<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
$objetivo = get_field('objetivo');
$atividades = get_field('atividades');
$sensibilizacoes = get_field('sensibilizacoes');
$referencias = get_field('referencias');
$contextos = get_field('contextos');

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
					<?php if ($objetivo): ?>
						<div class="objetivo">
							<h2>Objetivo</h2>
							<?php echo $objetivo; ?>
						</div>
					<?php endif ?>
					<?php the_content(); ?>
				</div>
				<div class="col-md-4">
					<?php if ($contextos): ?>
						<h2>Contexto</h2>
						<ul class="contexto">
							<?php foreach ($contextos as $contexto): ?>
				      <a href="<?php the_permalink($contexto->ID); ?>">
				        <li><?php echo get_the_title($contexto->ID); ?>
				        </li>
				      </a>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<?php if ($atividades): ?>
						<h2>Atividades</h2>
						<ul class="referencias">
							<?php foreach ($atividades as $atividade): ?>
				        <li>
				            <a href="<?php the_permalink($atividade->ID); ?>"><?php echo get_the_title($atividade->ID); ?></a>
				        </li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<?php if ($sensibilizacoes): ?>
						<h2>Sensibilizações</h2>
						<ul class="referencias">
							<?php foreach ($sensibilizacoes as $sensibilizacao): ?>
				        <li>
				            <a href="<?php the_permalink($sensibilizacao->ID); ?>"><?php echo get_the_title($sensibilizacao->ID); ?></a>
				        </li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<?php if ($referencias): ?>
						<h2>Referências</h2>
						<ul class="referencias">
							<?php foreach ($referencias as $referencia): ?>
				        <li>
				            <a href="<?php the_permalink($referencia->ID); ?>"><i class="fas fa-link mr-2"></i><?php echo get_the_title($referencia->ID); ?></a>
				            <p style="line-height: 1.2rem;"><small><?php echo get_field('descricao', $referencia->ID) ?></small></p>
				        </li>
							<?php endforeach ?>
						</ul>
					<?php endif ?>
					<?php
					//Posts Relacionados
					$categories = wp_get_post_categories($post->ID);
					if ($categories) {
					$cat_array = array();
					for ($i=0; $i < sizeof($categories) + 1; $i++) { 
						$cat_array[$i] = $categories[$i];
					}
					$args = array(
					'cat' => $cat_array,
					'post__not_in' => array($post->ID),
					'posts_per_page'=>4,
					'caller_get_posts'=>1,
					'orderby'        => 'rand',
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
						echo '<div class="separador"></div>';
						echo '<h3>Veja também</h3>';
						echo '<ul class="related-posts">';
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<li>
							<h2><?php 
								$category = get_the_category(); 
								echo $category[0]->cat_name;?>
							</h2>
								<h4><?php the_title(); ?></h4>
						</li>
					</a>
					<?php
					endwhile;
					echo '</ul>';
					}
					wp_reset_query();
					}
					?>
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
