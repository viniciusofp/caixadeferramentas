<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caixa_de_Ferramentas
 */

?>

</div><!-- #page -->

<?php wp_footer(); ?>
<div class="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class' => 'list-inline'
					) ); ?>
			</div>
			<div class="col-12">
				<p><a target="_blank" href="http://escoladejornalismo.org">Escola de Jornalismo</a>, 2018. Desenvolvido por <a target="_blank" href="http://viniciusofp.com.br">viniciusofp</a>.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
