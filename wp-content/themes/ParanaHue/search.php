<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage ParanaHue
 * @since ParanaHue 1.0
 */

get_header(); ?>
	

	<div id="primary" class="row">
		<div id="main" class="col-md-12 corpo_pagina" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h2 class="title_sobre"><?php printf( __( 'Resultados da pesquisa por: %s', 'ParanaHue' ), get_search_query() ); ?></h2>
				</header><!-- .page-header -->



				<?php
					global $query_string;

					$query_args = explode("&", $query_string);
					$search_query = array();

					foreach($query_args as $key => $string) {
						$query_split = explode("=", $string);
						$search_query[$query_split[0]] = urldecode($query_split[1]);
					} // foreach

					$search = new WP_Query($search_query);

					//var_dump($search->posts);
					foreach($search->posts as $key_post) {

					?>

						<div class="col-md-12 corpo_resultado">

							<h2 class="title_sobre"><a href="<?php echo $key_post->guid; ?>"><?php echo $key_post->post_title; ?></a></h2>

							<div class="pagina_principal_artigo">
								<?php echo $key_post->post_content; ?>
							</div>

						</div>

						

					<?php	

						//var_dump($key_post);

					}

				?>


			<?php

			else :
				//get_template_part( 'content', 'none' );

				echo "<p>Nada encontrado... </p>";

			endif;
			?>

			

		</div> <!-- main -->
	</div> <!-- search  -->



<?php get_footer(); ?>