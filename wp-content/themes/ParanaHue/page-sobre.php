<?php
/*
 Template Name: Sobre
 *
*/
?>

<?php get_header(); ?>

	<div class="row">
		<div class="col-md-12 corpo_pagina">

			<h2 class="title_sobre"><?php bloginfo("description"); ?></h2>

			<?php

			    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
			        <div class="descricao_page">
			            <?php the_content(); ?> <!-- Page Content -->
			        </div><!-- .entry-content-page -->

			    <?php
			    endwhile; //resetting the page loop
			    wp_reset_query(); //resetting the page query
			?>


		</div> <!-- corpo_pagina -->
	</div> <!-- row -->




	



<?php get_footer(); ?>