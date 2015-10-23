<?php
/*
 Template Name: Home Page
 *
*/
?>

<?php get_header(); ?>

	<div class="row">
		<div class="col-md-12 corpo_pagina">
			
			

			<?php


			$args = array( 
				'posts_per_page' => 4,
				'post_type' => 'post',
    			'post_status' => 'any'
				);



			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {

			?>
			

				<?php 

					while ( $the_query->have_posts() ) {
						$the_query->the_post();

				?>
					<div class="post_cadastrado">


						<h2 class="post_titulo"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>

						<div class="pagina_principal_artigo">
						 	<?php the_content(); ?>
						</div>

					</div>
			<?php

					} //Fim do while...

			} //fim do if  
			else {
				echo "Nenhum post encontrado";
			}
			/* Restore original Post Data */
			wp_reset_postdata();



			?>


		</div> <!-- col-md-12 -->
		



	</div>




	



<?php get_footer(); ?>