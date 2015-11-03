<?php get_header(); ?>

	


	<div class="row">
		<div class="col-md-12 corpo_pagina">


			<div id="conteudo">
				<div id="artigos">
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-12 artigo">
							<h1 class="titulo_single"><?php the_title(); ?></h1>
						
							<p><?php the_content(); ?></p>


							<div class="fb-comments" data-href="http://paranahue.com.br/?p=<?php the_ID(); ?>" data-width="320" data-numposts="5"></div>

						</div>
						
	
							
					<?php endwhile; else: ?>
						<div class="artigo">
							<h2>Nada Encontrado</h2>
							<p>Erro 404</p>
							<p>Lamentamos mas não foram encontrados artigos.</p>
						</div>			
					<?php endif; ?>
					
				</div>
				
				<?php // get_sidebar(); ?>
			</div>


		</div> <!-- corpo_pagina -->
	</div> <!-- row -->






<?php get_footer(); ?>