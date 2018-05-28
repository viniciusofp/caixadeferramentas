<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
$o_que_e = get_field('o_que_e');
$por_que_e_importante = get_field('por_que_e_importante');
$como_usar = get_field('como_usar');

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single">
	<div class="single-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
						<h4>
						<?php 
						if (get_post_type() == 'post') {
							echo 'Aula';
						} else if (get_post_type() == 'sensibilizacoes') {
							echo 'Sensibilização';
						} else if (get_post_type() == 'atividades') {
							echo 'Atividade';
						} else if (get_post_type() == 'referencias') {
							echo 'Referências';
						} else if (get_post_type() == 'contextos') {
							echo 'Contexto';
						}
						?>
						</h4>
					
					<h1><?php the_title(); ?></h1>
					<h3>
					<?php
						$category = get_the_category(); 
						echo $category[0]->cat_name;
					?>
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="single-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php if ($o_que_e): ?>
						<div class="objetivo">
							<h2>O que é?</h2>
							<?php echo $o_que_e; ?>
						</div>
					<?php endif ?>
					<?php if ($por_que_e_importante): ?>
						<div class="objetivo">
							<h2>Por que é importante?</h2>
							<?php echo $por_que_e_importante; ?>
						</div>
					<?php endif ?>
					<?php if ($como_usar): ?>
					<h2>Como usar?</h2>
					<?php
					if( have_rows('como_usar') ):
						$passoCount = 1;
					    while ( have_rows('como_usar') ) : the_row();
					        echo '<h5 class="passoCount">' . $passoCount . '</h2>';
					        $passoCount++;
					        the_sub_field('passo');

					    endwhile;
					else :
					endif;
					?>

					<?php endif ?>
				</div>
				<div class="col-md-4">
					
					<?php 
					$postsRelacionados = get_posts(array(
						'post_type' => 'post',
						'meta_query' => array(
							array(
								'key' => 'contextos',
								'value' => '"' . get_the_ID() . '"',
								'compare' => 'LIKE'
							)
						)
					));
					?>
					<?php if( $postsRelacionados ): ?>
						<h3>Aulas dentro desse contexto</h3>
						<ul class="related-posts">
						<?php foreach( $postsRelacionados as $doctor ): ?>
							<?php 
							$categories = wp_get_post_categories($doctor->ID);
							$category = get_the_category_by_ID($categories[0]); 
							?>

							<li>
								<a href="<?php echo get_permalink( $doctor->ID ); ?>">
									<h2><?php echo $category; ?></h2>
									<h4><?php echo get_the_title( $doctor->ID ); ?></h4>
								</a>
							</li>
						<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<a href="#" onclick="window.history.back();" class="voltar">
						<p><i class="fas fa-arrow-left mr-1"></i> Voltar</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
get_footer();
