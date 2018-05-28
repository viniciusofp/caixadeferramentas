<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caixa_de_Ferramentas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (! is_front_page()): ?>
	
	<nav class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-auto align-self-center">
					<a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo_branco.png" alt=""></a>
				</div>
				<div class="col-auto menu-itens">
					<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_class' => 'list-inline'
						) ); ?>
				</div>
			</div>
		</div>

			
			
	</nav>

<?php endif ?>

<div id="page" class="site">

