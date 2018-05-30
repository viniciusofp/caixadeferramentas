<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
$descricao = get_field('descricao');
$url = get_field('url');

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
							echo 'Referência';
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
					<h2>Descrição</h2>
					<?php echo $descricao; ?>
					<h2>Link</h2>
					<a href="<?php echo $url; ?>"><?php echo $url; ?></a>
				</div>
				<div class="col-md-4">
					
					<?php 
					$postsRelacionados = get_posts(array(
						'post_type' => 'post',
						'meta_query' => array(
							array(
								'key' => 'referencias',
								'value' => '"' . get_the_ID() . '"',
								'compare' => 'LIKE'
							)
						)
					));
					?>
					<?php if( $postsRelacionados ): ?>
						<h3>Aulas dentro que usam essa referência</h3>
						<ul class="related-posts">
						<?php foreach( $postsRelacionados as $aula ): ?>
							<?php 
							$categories = wp_get_post_categories($aula->ID);
							$category = get_the_category_by_ID($categories[0]); 
							?>

							<li>
								<a href="<?php echo get_permalink( $aula->ID ); ?>">
									<h2><?php echo $category; ?></h2>
									<h4><?php echo get_the_title( $aula->ID ); ?></h4>
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
