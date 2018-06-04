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