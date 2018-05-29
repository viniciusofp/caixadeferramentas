<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
?>

<div class="single">
	<div class="single-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4></h4>
					<h1><?php the_title(); ?></h1>
					<h3></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="single-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php
					$args = array(
						'post_type' => 'percurso',
						'posts_per_page' => -1
					);
					// the query
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<!-- pagination here -->
						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
						<?php endwhile; ?>
						<!-- end of the loop -->
						<!-- pagination here -->
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
