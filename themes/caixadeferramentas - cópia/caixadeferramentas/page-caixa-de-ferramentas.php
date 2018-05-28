<?php
/**
 * Homepage File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
?>

<div class="caixa-wrapper" ng-app="caixaDeFerramentas">
	<div class="container" ng-controller="MainController">
		<div class="row">
			<div class="col-12">
				<svg class="caixa-icon" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="61.3px" height="70px" viewBox="0 0 61.3 70" style="enable-background:new 0 0 61.3 70;"
								 xml:space="preserve">
					<defs>
					</defs>
					<g>
						<g>
							<path style="&st0;" d="M59.8,40.1h-4.9L54.3,37c0.4,0,0.7-0.2,1-0.4c0.3-0.3,0.4-0.6,0.4-1v-3.9c0-0.4-0.1-0.8-0.4-1
								c-0.3-0.3-0.7-0.4-1.1-0.4h-2V16.7l1.8-3c0.1-0.2,0.2-0.5,0.2-0.7V8c0-0.8-0.7-1.5-1.5-1.5h-6.8c-0.8,0-1.4,0.7-1.4,1.5v5
								c0,0.2,0.1,0.4,0.1,0.6l1.5,3v13.5l-2.2,0c-0.8,0-1.4,0.7-1.4,1.5v3.8c0,0.8,0.6,1.4,1.4,1.5h0h0l-0.6,3.2H40v-6
								c0-0.8-0.7-1.4-1.5-1.4h-1.4v-2l2.5-1.8V0H26.7v28.9l2.5,1.8v2h-1.5c-0.8,0-1.4,0.6-1.5,1.4v0v6h-4.2v-25L0,9.8v24.3l7.1-1.7
								l6.3-1.5v9.3h-5c-0.8,0-1.5,0.6-1.5,1.4v24.2c0,2.4,1.9,4.3,4.3,4.3H57c2.3,0,4.3-1.9,4.3-4.3V41.5C61.3,40.7,60.6,40.1,59.8,40.1
								z M5.4,29.8l-2.5,0.6V13.5L5.4,14V29.8z M47.4,9.4h3.9v3.2l-1.8,3c-0.1,0.2-0.2,0.5-0.2,0.7v13.9H49V16.3c0-0.2-0.1-0.4-0.1-0.6
								l-1.5-3V9.4z M45.3,33.1l5.4,0l2,0v1l-7.2,0h-0.2V33.1z M51.9,40.1h-5.7l0.6-3.1l4.5,0L51.9,40.1z M29.6,2.9h7v0.6l-7,3.2V2.9z
								 M29.6,9.9l7-3.2v2.9l-7,3.2V9.9z M29.6,16l7-3.2v2.9l-7,3.2V16z M29.6,22.1l7-3.2v2.9l-7,3.2V22.1z M30.3,27.9l6.3-2.9v2.5
								l-2.5,1.8v3.5h-2v-3.4L30.3,27.9z M29.2,35.6h7.8v4.5h-7.8V35.6z M8.3,29.1V14.7l10.9,2.6v9l-4.7,1.1L8.3,29.1z M19.2,29.4v10.7
								h-2.9v-10L19.2,29.4z M58.4,65.8c0,0.8-0.6,1.4-1.4,1.4H11.1c-0.8,0-1.4-0.6-1.4-1.4v-5.5h48.7V65.8z M58.4,57.4H9.7V43h48.7V57.4
								z"/>
						</g>
					</g>
				</svg>
				<h1>Caixa de Ferramentas</h1>
				<ul class="category-menu">
					<li class="active" ng-click="categorySelector($event)">Curso Introdutório</li>
					<li ng-click="categorySelector($event)">Técnicas Jornalísticas</li>
					<li ng-click="categorySelector($event)">Técnicas de Grupo</li>
				</ul>
				<form class="form-inline">
				  <div class="input-group mb-2 mr-sm-2">
						<p>Filtrar: </p>
					</div>
				  <div class="input-group mb-2 mr-sm-2">
					  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Palavra-chave" ng-model="postFilter.textQuery">
				  </div>
				  <div class="input-group mb-2 mr-sm-2">
					  <select class="form-control mb-2 mr-sm-2" ng-model="postFilter.filter.cat">
					  	<option ng-value="catPai" selected>Todas Categorias</option>
					  	<option ng-repeat="cat in catOptions" ng-value="cat.name">{{cat.name}}</option>
					  </select>
	
				  </div>
					
				</form>
				<!-- <button ng-click="console()"></button> -->
			</div>
		</div>
		<div class="row">
			<div ng-repeat="post in filteredPosts = (posts | filter: postFilter) track by $index" class="col-sm-6 col-lg-4 col-xl-3">

				<a ng-if="post.type != 'referencias'" href="{{post.link}}">
					<div class="caixa-item">
						<div class="meta">
							<h5>{{post.tipo}}</h5>
							<h2>{{post.title.rendered}}</h2>
						</div>
					</div>
				</a>
				<a target="_blank" ng-if="post.type == 'referencias'" href="{{post.acf.url}}">
					<div class="caixa-item">
						<div class="meta">
							<h5><i class="fas fa-link mr-2"></i>{{post.tipo}}</h5>
							<h2>{{post.title.rendered}}</h2>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-sanitize.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/app.js"></script>
<?php
get_footer();
