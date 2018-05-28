function removeDuplicates(e,r){for(var n={},o=0,t=e.length;t>o;o++)n[e[o][r]]||(n[e[o][r]]=e[o]);var u=[];for(var c in n)u.push(n[c]);return u}

var $J = jQuery.noConflict();
var url = 'http://escoladejornalismo.org/caixadeferramentas/index.php?rest_route=/wp/v2/'
var myApp = angular.module('caixaDeFerramentas',['ngResource', 'ngSanitize']);
myApp.directive("formOnChange", function($parse){
  return {
    require: "form",
    link: function(scope, element, attrs){
       var cb = $parse(attrs.formOnChange);
       element.on("change", function(){
          cb(scope);
       });
    }
  }
});
myApp.factory('wp', ['$q', '$resource', function($q, $resource) {
  wp = []



  wp.queryPosts = function() {
    var perpage = 50;
    var results = [];
    // $resource( url + 'posts' ).query({}, function(users, responseHeaders){
    //   totalPosts = responseHeaders('X-WP-Total')
    //   var queryLoops =  Math.floor(totalPosts / 5 + 1)
    //   console.log(queryLoops)
    // })
    var i = 1;

      var queryPosts = $resource( url+ 'posts?per_page=' + perpage + '&page=' + i ).query()
      $q.all([
          queryPosts.$promise,
      ]).then( function (data) {
        data[0].forEach(function(post) {
          post.textQuery = post.title.rendered + post.content.rendered;
        })
        Array.prototype.push.apply(results, data[0]);
      });


      var queryReferencias = $resource( url+ 'referencias?per_page=' + perpage + '&page=' + i ).query()
      $q.all([
          queryReferencias.$promise,
      ]).then( function (data) {

        data[0].forEach(function(post) {
          post.textQuery = post.title.rendered;
          Array.prototype.push.apply(results, post);
        })
        // console.log('Referencias');
        // console.log(data[0]);
        // Array.prototype.push.apply(results, data[0]);
      });

      var querySensibilizacoes = $resource( url+ 'sensibilizacoes?per_page=' + perpage + '&page=' + i ).query()
      $q.all([
          queryReferencias.$promise,
      ]).then( function (data) {

        data[0].forEach(function(post) {
          post.textQuery = post.title.rendered + post.acf.objetivo;
        })
        Array.prototype.push.apply(results, data[0]);
      });

      var queryAtividades = $resource( url+ 'atividades?per_page=' + perpage + '&page=' + i ).query()
      $q.all([
          queryAtividades.$promise,
      ]).then( function (data) {

        data[0].forEach(function(post) {
          post.textQuery = post.title.rendered + post.acf.objetivo;
        })
        Array.prototype.push.apply(results, data[0]);
      });

      var queryContextos = $resource( url+ 'contextos?per_page=5&page=' + i ).query()
      $q.all([
          queryContextos.$promise,
      ]).then( function (data) {

        data[0].forEach(function(post) {
          post.textQuery = post.title.rendered;
        })
        Array.prototype.push.apply(results, data[0]);
      });
    console.log(results)

    removeDuplicates(results,'id')
    return results
  }
  wp.catCurso = function() {
    var results = [];
    var queryCategories = $resource( url+ 'categories?per_page=50&parent=1' ).query()
    $q.all([
        queryCategories.$promise,
    ]).then( function (data) {
      // Attach post media
      Array.prototype.push.apply(results, data[0]);
    });
    return results
  }
  wp.catJornal = function() {
    var results = [];
    var queryCategories = $resource( url+ 'categories?per_page=50&parent=2' ).query()
    $q.all([
        queryCategories.$promise,
    ]).then( function (data) {
      // Attach post media
      Array.prototype.push.apply(results, data[0]);
    });
    return results
  }
  wp.catGrupo = function() {
    var results = [];
    var queryCategories = $resource( url+ 'categories?per_page=50&parent=3' ).query()
    $q.all([
        queryCategories.$promise,
    ]).then( function (data) {
      // Attach post media
      Array.prototype.push.apply(results, data[0]);
    });
    return results
  }

  return wp;
}]);
myApp.controller('MainController', ['$scope', '$sce', 'wp', function($scope, $sce, wp){
  $scope.catCurso = wp.catCurso();
  $scope.catJornal = wp.catJornal();
  $scope.catGrupo = wp.catGrupo();
  $scope.catOptions =$scope.catCurso;
  $scope.catPai = 'Curso Introdutório';
  $scope.posts = wp.queryPosts();
  $scope.postFilter = {
    filter: {
      cat: 'Curso Introdutório'
    }
  };
  $scope.console = function() {
    console.log($scope.posts)
  }
  $scope.subcategories =
  $scope.categorySelector = function(e) {
    console.log($J(e.currentTarget).text())
    var target = $J(e.currentTarget);
    target.siblings().removeClass('active');
    target.addClass('active');

    // Lista subcategorias no campo de filtro
    if ($J(e.currentTarget).text() == 'Curso Introdutório') {
      $scope.catOptions = $scope.catCurso;
      $scope.catPai = 'Curso Introdutório';
      // Reseta o arranjo de posts
      $scope.postFilter = {
        filter: {
          cat: 'Curso Introdutório'
        }
      };
    } else if ($J(e.currentTarget).text() == 'Técnicas Jornalísticas') {
      $scope.catOptions = $scope.catJornal;
      $scope.catPai = 'Técnicas Jornalísticas';
      // Reseta o arranjo de posts
      $scope.postFilter = {
        filter: {
          cat: 'Técnicas Jornalísticas'
        }
      };
    } else if ($J(e.currentTarget).text() == 'Técnicas de Grupo') {
      $scope.catOptions = $scope.catGrupo;
      $scope.catPai = 'Técnicas de Grupo';
      // Reseta o arranjo de posts
      $scope.postFilter = {
        filter: {
          cat: 'Técnicas de Grupo'
        }
      };
    }

  }
}]);
