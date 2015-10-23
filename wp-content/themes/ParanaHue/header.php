<?php
/**
 * 
 *
 * Exibe todo os elementos contidos em "head".
 *
 * @package ParanaHue
 * 
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<title><?php bloginfo("name"); ?></title>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
	
	
	<div class="row row_nomargim">
		<div class="col-md-2"></div>
		<div class="col-md-8 middle_page">
			<div class="row">
				<div class="col-md-9 real_content">

					

						<div class="row row_nomargim">
							<div class="header_block">
								<div class="header_menu">
									<h2><?php bloginfo("name"); ?></h2>
									<span class="hidden-xs">
										<?php wp_nav_menu('Menu_principal'); ?>
									</span>

									<div class="col-xs-12 btn_phone">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
											<span class="icon-bar"></span> 
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<div class="text_mobile_menu">
												<span >Navegação</span>
											</div>
											
										</button>
									</div> <!-- btn_phone  -->
								</div>
								<div class="col-xs-12 form_pesquisa row_nopadding">
									<?php get_search_form( ); ?>
								</div>
							</div>

							

						</div> <!-- row row_nomargim  -->
					
				
		
		
		