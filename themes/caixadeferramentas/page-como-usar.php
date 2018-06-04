<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
$video = get_field('video');
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="single">
	<div class="single-header">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h4></h4>
					<h1><?php the_title(); ?></h1>
					<h3></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="como-usar-video container-fluid">
		<div class="row">
			<div class="col-12">
				<video controls>
				   <source src="<?php echo $video; ?>" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
	<div class="single-content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-xl-8">
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php
get_footer();
