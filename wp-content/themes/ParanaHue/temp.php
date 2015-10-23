<header role="banner">

				<div class="container">
					
					<div class="navbar-header">
						<a class="navbar-brand logo-header" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img class="" src="<?php echo home_url(); ?>/wp-content/themes/benedictis/images/logo_benedictis.png"/> </a>
					</div>

					<div class=" collapse navbar-collapse navbar-responsive-collapse menu_response"> <!-- navbar-header collapse navbar-collapse navbar-responsive-collapse header -->
						
						<div class="navbar-gray pull-right">
							<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						</div>

					</div>

					<div class="col-xs-12 btn_phone">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<div class="text_mobile_menu">
								<span >Navegação</span>
							</div>
							
						</button>
					</div>

					

				</div> <!-- end .container -->
			
		
		</header> <!-- end header -->






		/*
Theme Name: benedictis
Theme URI: http://benedictis.com.br
Description: Tema responsivo da Benedictis Engenharia
Version: 1.0
Author: Joiss Soluções Inteligentes
Author URI: http://joiss.com.br
Tags: black, white, red, one-column, two-columns, flexible-width, custom-background, custom-colors, custom-menu, full-width-template, theme-options
License: GNU General Public License v2.0 & Apache License 2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html http://www.apache.org/licenses/LICENSE-2.0
*/

/* HEADS UP: Everything that you will normally find here can be found in the library/less/wp.less */


@font-face
{
	font-family: "BankGothic Md BT Medium";
	src: url('library/fonts/BankGothic Md BT Medium.ttf') format('embedded-opentype'),
    url('library/fonts/BankGothic Md BT Medium.ttf'),
    url('library/fonts/BankGothic_Md_BT_Medium.eot');  
}

@font-face
{
	font-family: "DaxCondensed";
	src: url('library/fonts/DaxCondensed.ttf') format('embedded-opentype'),
	url('library/fonts/DaxCondensed.eot'),
    url('library/fonts/DaxCondensed.ttf'); 
}

@font-face
{
	font-family: "DaxLight";
	src: url('library/fonts/DaxLight.ttf') format('embedded-opentype'),
    url('library/fonts/DaxLight.ttf'),
    url('library/fonts/DaxLight.eot');  
}

@font-face
{
	font-family: "DaxLBold";
	src: url('library/fonts/dax_bold.ttf') format('embedded-opentype'),
    url('library/fonts/dax_bold.ttf'),
    url('library/fonts/dax_bold.eot'); 
}

@font-face
{
	font-family: "OpenSans-Bold";
	src: url('library/fonts/OpenSans-Bold.ttf') format('embedded-opentype'),  
    url('library/fonts/OpenSans-Bold.ttf'),
    url('library/fonts/OpenSans-Bold.eot'); 
}
@font-face
{
	font-family: "DaxMedium";
	src: url('library/fonts/dax-medium.ttf') format('embedded-opentype'),
    url('library/fonts/dax-medium.eot'), 
    url('library/fonts/dax-medium.ttf'); 
}

@font-face
{
	font-family: "MyriadPro"; 
	src: url('library/fonts/MyriadPro-Regular.ttf'),
	url('library/fonts/MyriadPro-Regular.eot') format('embedded-opentype');
}



/* layout */

body{
	background:url('images/backgroud_img.png') no-repeat top center;
	padding: 0 !important;
	margin: 0;
}


/* header */

.header
{
	width: 100%;
}

.header_page {
}

.menu-header{
}

a:hover{
	text-decoration: none;
}

.logo-header
{
	height: 185px !important;
    margin-left: 7.6%; /* 95px*/
    width: 23.2%; /* 290px*/
}

@media(max-width: 760px){
	 .logo-header{
		height: 185px !important;
	    margin-left: 26%;
	    width: 100%;
	}
}

@media(max-width: 460px){
	.logo-header{
		 margin-left: 0%;
		 
	}
}

@media(max-width: 460px){
	.logo-header img{
		 width: 320px;
	}
}

/* Menu principal */


.navbar-responsive-collapse {
	background-color: #ffffff;
}
.navbar-brand {
	height: 155px;
}

.menu-item {
	font-family: "BankGothic Md BT Medium";
	font-size: 17px;
	
}
@media(max-width: 320px){
	.menu-item{
	font-size: 20px;
    height: 30px;
	}
}

.menu-item > a{
 background: url("images/separador_menu.png") no-repeat;
 background-position:left center;
} 

.navbar-nav li:last-child >a{
	border-right: none; 
}
.navbar-nav li:first-child >a{
	background: none;
}
.navbar-nav > li > a:hover
{
	background-color: #000000;
	color: #ffffff;
}

.menu-item a{
	color: #ffffff;
	line-height: 0px !important;
}

.menu-item a:hover{
	color: #cccccc;
	line-height: 0px !important;
}

.menu-item.active {
	background-color: #d3031b;
}

.navbar-nav {
	margin-right: 60px;
}

.navbar-collapse {
	padding: 0;
}

/* Adiciona a borda preta sobre o header*/
.navbar-collapse.collapse{ 
	border-top: 5px solid #000000;
}

.navbar-gray {
	margin-top: 60px;
	background-color: #616161;
	display: inline-block;

	box-shadow: 8px 12px 0 -8px grey;
}

.navbar-brand{
	padding: 0;
}

/* footer */

.footer-links ul>li>a{
	background: none;
}
#inner-footer .row{
	margin: 0;
}

.container .top-border
{
	padding-left: 0px;
	padding-right: 0px;
}
.menu_response
{
	margin-left: 0px !important;
    margin-right: 0px !important;
	max-height: 365px;
	width: 100%
}

@media(max-width: 760px){
	.navbar-gray {
    background-color: #616161;
    box-shadow: 8px 12px 0 -8px grey;
    display: inline-block;
    margin-top: 60px;
    width: 100%;
	}
}/*/mediaquery*/

@media(max-width: 760px){
	.navbar-header {
	background-color: #ffffff;
	border-top: 4px solid;
	}
}/*/mediaquery*/

.header-footer {  
	background-color: #000000;
	height: 65px;
}


.header-footer h4 {
	font-family: "MyriadPro";
	font-size: 30px;
	line-height: 48px;
	text-align: center;
	color: #ffffff;
	
}

#widget-footer { 
	background-color: #d3031b;
	padding: 10px 0 50px;
}

.container{
	width: 1280px;
}
.container-fluid{
	width: 1024px;
}

@media(max-width: 1280px){
	.container, .container-fluid{
		width: 100%;
	}
}/*/mediaquery*/

.footer-menu{
	/* width: 19.558359621451%; */
	height: 245px;
}

.footer-menu h4{
	color: #ffffff;
	text-indent: 20px;
}

.footer-menu li { /* links do menu paginas no footer... */
	width: 100%;
	list-style-image: url("images/seta_rigth.png");
}

.footer-menu a {
	border-right: medium none;
	font-family: arial;
	color: #ffffff;
	font-size: 14px;
}

.icoSetaImgFooter
{
	background-image: url("images/seta_rigth.png");
    background-position: 14px 0px;
    background-repeat: no-repeat;
    border-radius: 3px;
    display: inline-table;
    height: 15px;
    line-height: 30px;
    vertical-align: text-top;
    width: 25px;
    z-index: 80;
}

@media(max-width: 320px){
	.icoSetaImgFooter{
		background-position: 4px 0;
		width: 14px;
	}
}/*/mediaquery*/

.btn_form_footer
{
	font-family: arial;
	font-size: 12px;
	line-height: 31px;
}

/* classe generica para botões ...*/

.box-btn {
	background-color: #ffffff;
    text-align: center;
    margin: -5px auto;
	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;
}

.box-btn a{
	 border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 

	box-sizing: border-box;
    font-size: 12px; 

    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

.box-btn-servico
{
	width: 335px;
}

.btn-conheca-servicos {
	height: 40px;
	background-color: #e0e0e0;
    margin: 0px auto;
    width: 90%;
}

@media(max-width: 990px){
	.btn-conheca-servicos {
		margin: 0px auto 10px; 
		width: 40%;
	}
}/*/mediaquery*/

@media(max-width: 800px){
	.btn-conheca-servicos {
		width: 55%;
	}
}/*/mediaquery*/



.btn-conheca-servicos a {
	background-repeat: repeat-x;
    border-radius: 3px;
    color: #ffffff;
    font: arial;
    font-size: 12px;
    height: 34px;
    line-height: 40px;
    padding: 9px 15px 8px 12px;
    text-align: justify;
    text-indent: 0;
    width: 300px;

     border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  

    background-image: -webkit-linear-gradient(top, color-stop(#9d9d9d 0%), color-stop(#7d7d7d 100%));
  	background-image: linear-gradient(to bottom, #9d9d9d 0%, #7d7d7d 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

.btn_phone{
	background-color: #ffffff;
}

/* Footer menu */


.form-control {
	border-radius: 0;
	-moz-border-radius:0;
	-webkit-border-radius: 0;
}

/* input-form 

.input-form textarea
{
	background-color: #e1e4e6;
	border: 0;
	height: 105px;
	padding: 15px;
	width: 100%;
}

*/

.form-control textarea{
	background-color: #e1e4e6;
	border: 0;
	height: 105px;
	padding: 15px;
	width: 100%;
}


.btn_submit_footer {
	
	/*background-color: #ffffff;*/
	height: 44px;
	padding: 4px;
    text-align: center;
	/*border-radius: 3px;*/
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;
}

.btn_submit_footer button{

	border: 4px solid #ffffff;
	
    margin: 1px;
   
    width: 270px;

    font: arial;
    font-size: 12px;
    color: #ffffff;
    text-align: left;
    text-indent: 3px;

    border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  

  background-image: -webkit-linear-gradient(top, color-stop(#de3f52 0%), color-stop(#cf031a 100%));
  background-image: linear-gradient(to bottom, #de3f52 0%, #cf031a 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);

	box-sizing: border-box;
    font-size: 12px;
    height: 42px;
}

@media(max-width: 320px){
	.btn_submit_footer button{
		width: 250px;
	}
}/*/mediaquery*/

/* botão de acessar o projeto completo */
.btn_submit_projetos {
	height: 31px;
	background-color: #ffffff;
    text-align: center;
    margin: -65px auto;
    width: 175px;  /*185**/
	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;
}

.btn_submit_projetos a{
   
    box-sizing: border-box;
    color: #ffffff;
    font-size: 12px;
    height: 22px;
    line-height: 31px;
    margin: 0px;
    padding: 5px 0px;

    border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  

  background-image: -webkit-linear-gradient(top, color-stop(#9e9e9e 0%), color-stop(#7e7e7e 100%));
  background-image: linear-gradient(to bottom, #9e9e9e 0%, #7e7e7e 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);

	box-sizing: border-box;
    font-size: 12px;
}
/* regra de css valida para safari e chrome*/

@media screen and (-webkit-min-device-pixel-ratio:0) {
    .btn_submit_projetos a{
    	padding: 5px 0px !important;
    	margin: 0 !important;
    }
}

.btn-conheca-servicos .icoSetaImg {
	background-position: 15px 0px;
    height: 15px;
    width: 25px;
}
.btn_submit_projetos .icoSetaImg {
	background-position: 15px 0;
}

.icoSetaImg {
  	background-image: url("images/seta_rigth.png");
  	background-position: 40px 2px;
  	background-repeat: no-repeat;
  	display: inline-table;
  	height: 15px;
  	line-height: 30px;
  	vertical-align: text-top;
  	width: 50px;
  	z-index: 80;

  	 border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  
}

.icoSetaImg-home {
	
  	background-image: url("images/seta_rigth.png");
  	background-position: 10px 0px;
  	background-repeat: no-repeat;
  	display: inline-block;
  	height: 15px;
  	line-height: 30px;
  	vertical-align: text-top;
  	width: 20px;

}

.icoSetaImg-Proj-rigth {
	
  	background-image: url("images/seta_rigth_dest.png");
  	background-position: 0px 3px;
    background-repeat: no-repeat;
    display: inline-block;
    height: 32px;
    width: 32px
}
.icoSetaImg-Proj-left {
	
  	background-image: url("images/seta_left_dest.png");
    background-position: 0px 3px;
    background-repeat: no-repeat;
    display: inline-block;
    height: 32px;
    width: 32px

}

/* Responsavel por estilisar as bordas laterais da coluna central */
.divider {
border-right: 1px dotted #ffffff;
}

.boxAtendimento {
	width: 100%;
	height: 235px; /* 180px*/
	background-color: #990819;
	margin-top: 10px;
	padding: 10px;
	box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
}

.boxAtendimento hr{
	border-style: dotted;
	border-color: #d3031b;
}

.atendimento {
	color: #ffffff;
	text-align: center;
	padding-top: 10px;
}

.atendimento h4{
	font-family: "DaxLight";
	font-size: 14px;
	margin: 0;
	line-height: 20px;
}

.atendimento p {
	font-family: "DaxLight";
	font-size: 12px;
	line-height: 20px;
}

.atendimento a {
	color: #ffffff;
}

.endereco p{
	color: #ffffff;
	text-align: center;
	font-family: "DaxLight";
	font-size: 11px;
	line-height: 15px;
}
.ico-telefone {
	background-image: url("images/telefone_icon.png");
	background-repeat: no-repeat;
	background-position: left center;
	padding-left: 30px;
	color: #ffffff;
	height: 30px;
	line-height: 30px;
	font-size: 24px;
}

.telefone {
	color: #ffffff;
	height: 30px;
	line-height: 30px;
	font-size: 24px;
}

.copyright { /* terceira faixa da coluna... */
	height: 87px;
	background-color: #ffffff;
}

.copyright p {
	color: #C0C0C0;
	font-family: arial;
	font-size: 12px;
	text-align: center;
	line-height: 45px;
} 

/* pagina full-width */

.faixa-paginas {
	height: 157px;
	background: url("images/faixa-titulo-background.png");
	border-bottom:  10px solid black;
}

@media(max-width: 760px){
	 .faixa-paginas{
	background: url("images/faixa-titulo-background2.png");
	background-color: #424242;
    border-bottom: 10px solid black;
    min-height: 200px;
	}
}/*/mediaquery*/

#content {
	margin-top: -10px;
}

.header-faixa {
	/*background-image: url("images/header_background_faixa.png");*/
	height: 100%;
}
.header-faixa h2{
	color: #ffffff;
	font-family: "DaxCondensed";
	font-size: 25px;
	float: left;
	margin-left: 130px; /* Verificar se essa medida é valida para outras paginas */
}

.header-resumo {
	height: 100%;
}

.header-resumo p{
	color: #ffffff;
	font-family: arial;
	font-size: 14px;
	margin-top: 20px;
}

@media(max-width: 980px){
	.header-resumo p{
		margin-top: 0;
	}
}/*/mediaquery*/
.img-thumbnail-slider {
	margin-top: 5px;
}
.box-img-faixa {
	box-shadow: -70px 65px 0 -59px #FF0000;
    height: 130px;
    margin-left: 75px;
    margin-top: -1px;
    width: 430px;
}

.seta_esquerda {
	float: left;
	width: 60px;
	height: 130px;
}
.seta_direita {
	float: right;
	width: 60px;
	height: 130px;
	margin-top: -130px;	
}

/* Pagina home */
.carrosel-obras {
	height: 315px;
	background-color: #ffffff;
	margin: 0;
}

@media(max-width: 760px){
	.carrosel-obras {
	height: 415px;
	background-color: #ffffff;
	margin: 0;
	}
}/*/mediaquery*/
.titulo-home {
	border-bottom: 5px solid #8d7f7e;
	color: #8d7f7e;
	font-family: arial;
	font-size: 16px;
	float: right;
}

.caixa-projetos
{
	border: 6px solid #eeeeee;
	height: 220px;
	overflow: hidden;
	width: 220px;
}


.label-projetos
{
	background-color: #FFFFFF;
	bottom: 0px;
    height: 0px;
    overflow: hidden;
    margin: 0px; /* 5 */
    position: absolute;
    width: 209px;
    z-index: 5;

	-webkit-transition: height 0.35s ease;
  	-moz-transition: height 0.35s ease;
  	-o-transition: height 0.35s ease;
  	transition: height 0.35s ease;
}

@media(max-width: 460px){
	.label-projetos{
		width: 94.5%
	}
}/*/mediaquery*/

@media(max-width: 460px){
	.caixa-projetos{
		width: 100%
	}
	.label-projetos{
		width: 100%
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.caixa-projetos{
		width: 100%;
	}
	.label-projetos{
		width: 95.5%
	}
}/*/mediaquery*/

.label-chamada
{
	bottom: 0;
   	background-color: #d6d6d6;
	border: 3px solid #eeeeee;
	height: 100px;
    display: none;
    position: absolute;
    margin-left: 25px;
    width: 420px;
    overflow: visible;
    z-index: 400;
}

.label-chamada h4
{
	font-family: "DaxLight";
	font-size: 17px;
	color: #d3031b;
}

.label-chamada p
{
	color: #616161;
	font-family: arial;
	font-size: 14px;
}
.caixa-projetos:hover
{
	border: 6px solid #ffffff;
}

.caixa-projetos:hover .label-projetos
{
	border-top: 3px solid #d3031b;
	height: 85px;
}

/*
.caixa-projetos:hover .label-chamada
{
	 bottom: -90px;
	 display: list-item;
	 z-index: 99999;
	
}
*/

.nome-projeto li
{
	color: #d3031b;
	line-height: 85px;
	list-style: disc;
}
.nome-projeto a
{
	font-family: "DaxMedium";
	font-size: 17px;
	color: #bcbcbc;
}
.icoNomeProj
{
	background: url("images/redDotIco.png")no-repeat;
	background-position: 5px 0px;
	color: #949494;
	font-family: "DaxMedium";
	font-size: 17px;
	float: left;
	line-height: 20px;
	margin-left: 15px;
	margin-top: 20px;
}

.icoNomeProj:hover
{
	color: #949494;
	font-family: "DaxMedium";
}

.label-ini
{
	font-family: "DaxLight";
	font-size: 17px;
	color: #bcbcbc;
}

.label-projetos p
{
	margin-left: 25px;
}

.projeto-ini
{
	font-family: "DaxLight";
	font-size: 17px;
	color: #d3031b;
}


.conteudo-home {
	background: url("images/background-projeto-principal.png");
	border-bottom: 13px solid #000000;
	border-top:  20px solid #d3031b;
	height: 545px; /* 545px*/
	margin-left: 0;
	margin-right: 0;
	margin-bottom: 10px;
}

@media(max-width: 980px){
	 .conteudo-home{
	height: 845px;
	margin-bottom: 20px;
	margin-top: 60px;
	}
}/*/mediaquery*/

@media(max-width: 76px){
	 .conteudo-home{
	height: 610px; /* 885 px*/
	margin-bottom: 20px;
	margin-top: 60px;
	}
}/*/mediaquery*/
@media(max-width: 360px){
	 .conteudo-home{
	height: 585px;
	margin-bottom: 20px;
	margin-top: 0px;
	}
}/*/mediaquery*/

.bloco-servicos-carrosel {
	float: inherit;
    margin: 60px auto 0;
	min-height: 200px;
}

.content_page { /* conteudo da pagina */
	min-height: 400px;
	margin-top: 50px;
	margin-bottom: 10px;
}

.conteudo-pagina{ /* parte de dentro do content page */
	background-color: #ffffff;
	box-shadow: 1px 10px 10px 1px #cccccc;
    margin-bottom: 20px;
    margin-top: 0px;
	min-height: 600px;
}
.conteudo-alinhado {
	margin-left: 20px;
	min-height: 100px;
}

.titulo_conteudo {
	font-family: "DaxCondensed";
	font-size: 30px;
	color: #d3031b;
}
.backgroundConteudo {
	background: url("images/content_background.png") no-repeat;
	margin-top: 35px;
	 margin-bottom: 30px;
}

.staff-list h2{
	font-family: arial;
	font-size: 14px;
	font-weight: bold;
}
.staff-titulo
{
	float: right;
	width: 320px;
	height: 95px;
	margin-top: -10px;
}

.staff-btn
{
	background: url("images/btn_staff_background.png") top left no-repeat;
	background-position: 0px -14px;
	list-style: none;
	margin-left: -10px;
	padding-left: 20px;
}

.staff-btn:hover
{
	background-position: 0px 4px;
}

@media(max-width: 460px){
	.staff-btn:hover{
	background-position: 0px -13px;
	}
	.staff-btn{
		background-position: 0px -13px;
	}
}/*/mediaquery*/

@media screen and (-webkit-min-device-pixel-ratio:0) {
   .staff-btn
{
	background: url("images/btn_staff_background.png") top left no-repeat;
	background-position: 0px -14px;
	list-style: none;
	margin-left: -10px;
	padding-left: 20px;
}

	.staff-btn:hover
{
	background-position: 0px 4px;
}
} 

@media(max-width: 560px){
	.engenheiros-institucional{
	margin-left: -20px;
	}
	.engenheiros-institucional ul{
	margin-left: -30px;
	}
}/*/mediaquery*/

@media(max-width: 560px){
	.quadro-tecnico-institucional{
	margin-left: -20px;
	}
	.quadro-tecnico-institucional ul{
	margin-left: -30px;
	}
}/*/mediaquery*/



.staff_box
{
	background-color: #d6d6d6;
	height: 0px;
	width: 420px;
	margin-left: 450px;

	position: absolute;
    z-index: 15;
    overflow: hidden;
}

@media(max-width: 780px){
	.staff_box{
		margin-left: 200px;
	}
}/*/mediaquery*/

.staff_picture 
{
	padding-left: 0px;
    padding-top: 0px;
    margin-top: 2px;
    width: 90px;
}

.staff-name
{
	color: #d3031b;
	font-family: "DaxLight";
	font-size: 17px;
	height: 10px;
}
.staff-mini-cv
{
	color: #616161;
	font-family: arial;
	font-size: 14px;
	height: 85px;
}

.staff-list li:hover .staff_box 
{
	border: 3px solid #ffffff;
	box-shadow: 1px 3px 6px 2px;
	height: 100px;
	margin-top: -100px;
}

.bloco-servico-home {
	width: 312px;

}
.bloco-servico-home  h2{
	color: #ffffff;
	font-family: "DaxCondensed";
	font-size: 25px;
	text-align: justify;
}
.bloco-servico-home  p{
	color: #ffffff;
	font-family: arial;
	font-size: 12px;
	float: inherit;
	text-align: justify;
	width: 335px;
}
.servico-destaque
{

}
.servico-destaque h2
{
	color: #ffffff;
	font-family: "DaxCondensed";
	font-size: 25px;
}
.servico-destaque p
{
	color: #ffffff;
	font-family: arial;
	font-size: 14px;
	text-align: justify;
}
.contem-carrosel
{

}

@media(max-width: 1220px){
	.servico-destaque h2{
		margin-left: 25px;
	}
}/*/mediaquery*/

@media(max-width: 990px){
	.servico-destaque h2{
		margin-left: 110px;
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.servico-destaque h2{
		margin-left: 115px;
	}
}/*/mediaquery*/

.bloco-carrosel-servicos-home {
	min-height: 200px;
}

.box-carrosel-servico-home {
	 margin-left: -45px;
	 margin-top: -70px;
}
.box-carrosel-servico-home ul {
	list-style: none;
}
.box-carrosel-servico-home li {

}
.servicos-carrosel-list { /* estilo para o carrosel de serviços da home */
	/* min-height: 350px; */
}
.servico-carrousel-img {
	height: 350px;
    margin-top: 10px;
    width: 440px;
}
.alturaCursorLV {
	float: left;
	margin-left: 30px;
	margin-top: -170px;
}
.alturaCursorRV {
	float: right;
	margin-right: 30px;
	margin-top: -170px;
}

/* Pagina de projetos */

.titulo-botton-border {
	border-bottom: 1px solid #cccccc;
}

.linha-paginacao{
	margin-top: 0px;
	padding-right: 0;
	padding-left: 0;
}
.coluna-paginacao-projetos
{
	margin-left: -25px;
    padding: 0;
}
.projetos-txt
{
	width: 100%;
}

.projetos-txt p
{
	text-align: justify;
}
.paginacao_projetos 
{
	margin-left: 35px;
}

.row-projetos {
	margin-bottom: 20px;
}

.imagem-projeto {
	height: 150px;
	overflow: hidden;
	position: relative;
}
@media(max-width: 800px){
	.imagem-projeto {
		width: 100%;
	}
}/*/mediaquery*/
.imgem-projeto > img.desaturate{
	-webkit-filter: grayscale(100%);

	-moz-filter: grayscale(100%);

	filter: grayscale(100%);
}

.pagination 
{
	display: inline;
}

 .pagination > .disabled > a
{
	background: none;
    border: 0;
}
.pagination > .active > a
{
	background: none;
    border: 0;
}

.pagination > li > a, .pagination > li > span
{
	background: none;
    border: 0;
}

.projeto-area {
	width: 200px;
	height: 150px;
	overflow: hidden;
	text-align: center;
	position: relative;
}
.projeto-area img{
	max-width: 100%;
	
}

@media(max-width: 1000px){
	.projeto-area {
		margin: 0 auto 10px;
		width: 100%;
	}
	.row-projetos {
		margin-top: 0px;
		margin-bottom: 0px;
	}
}/*/mediaquery*/

.imgProjeto{
	opacity:0.4;
	filter:alpha(opacity=40);
}

.detalhe-projeto{
	background-color: #d3031b;
	width: 100%;
	height: 0px;
	bottom: 0;

	position: absolute;
    z-index: 5;
    

    -webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}

@media(max-width: 980px){
	.detalhe-projeto{
		margin-left: 5px;
		width: 96%;
	}
}/*/mediaquery*/

@media(max-width: 800px){
	.detalhe-projeto{
		margin-left: 0px;
		width: 100%;
	}
}/*/mediaquery*/

.projeto-area:hover .detalhe-projeto{
	height: 85px;
}
.projeto-area:hover .imgProjeto
{
	opacity:1.0;
	filter:alpha(opacity=100);
}
.projeto-area:hover .detalhe-projeto .projeto-seta
{
	margin-top: -90px;
}
.detalhe-projeto .projeto-seta {
    bottom: inherit;
    top: -30px;
}
.resumo-projeto {
	height: 115px;
	width: 100%;
}

.resumo-projeto p {
	color: #ffffff;
	font-family: arial;
	font-size: 14px;

	padding: 6px;
	text-align: center;
}
/* pagina detalhe do projeto */

.faixa-detalhe-projeto {
	background: #000000;
	height: 435px;
	padding: 0;
}

.faixa-img-principal
{
	background: url("images/background-faixa-projeto.png") no-repeat;
	height: 355px;
}

@media(max-width: 360px){
	.faixa-detalhe-projeto{
		height: 260px;
	}
	.faixa-img-principal{
		height: 240px;
	}
	.projeto-page{
		height: 320px;
	}
	.projetos-img-princ{
		height: 290px;
	}
}/*/mediaquery*/

.conteudo-projeto { 
	
}
.carrosel-imagens-pj {
	background-color: #000000;
	height: 80px;
}
.carrosel-imagens-pj li{
	margin-bottom: 0px;
}

.carousel-indicators {
	bottom:  25px;
	position: relative;
	left: 42%;
}

.texto-single-projeto {
	margin-top: 20px;
	margin-bottom: 20px;
}

.box-retorno {
}

.btn-servicos-projeto {
	height: 41px;
	background-color: #e0e0e0;
    text-align: center;
    margin: 0px 0px 25px 5px;
    width: 312px;
	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;
	padding: 0;
}

.btn-servicos-projeto a{
	color: #FFFFFF;
    font-size: 12px;
    height: 28px;
    line-height: 40px;
    margin: 4px;
    padding: 9px 12px;
  
  background-image: -webkit-linear-gradient(top, color-stop(#ae293d 0%), color-stop(#560d0d 100%));
  background-image: linear-gradient(to bottom, #ae293d 0%, #560d0d 100%);
  
}

/* estilo para safari chrome */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    .btn-servicos-projeto a{
    	  padding: 9px 14px;
    }
}

.btn-voltar-projetos {
    text-align: left;
    margin: 0px 0px 0px 15px;
}

.btn-voltar-projetos a{
	border: 4px solid #e0e0e0;
	color: #FFFFFF;
    font-size: 12px;
    height: 23px;
    line-height: 40px;
    margin: 4px;
    padding: 9px 10px;
  

  background-image: -webkit-linear-gradient(top, color-stop(#9e9e9e 0%), color-stop(#7d7d7d 100%));
  background-image: linear-gradient(to bottom, #9e9e9e 0%, #7d7d7d 100%);

}

@media(max-width: 320px){
	.btn-voltar-projetos {
    text-align: left;
    margin: 0px 0px 0px 5px;
}

	.btn-voltar-projetos a{
		border: 4px solid #e0e0e0;
		color: #FFFFFF;
	    font-size: 10px;
	    height: 23px;
	    line-height: 40px;
	    margin: 4px;
	    padding: 9px 10px;
  
	  background-image: -webkit-linear-gradient(top, color-stop(#9e9e9e 0%), color-stop(#7d7d7d 100%));
	  background-image: linear-gradient(to bottom, #9e9e9e 0%, #7d7d7d 100%);

	}
}

@media(max-width: 320px) and (-webkit-min-device-pixel-ratio:0) {
	.btn-voltar-projetos {
    text-align: left;
    margin: 0px 0px 0px 5px;
}

	.btn-voltar-projetos a{
		border: 4px solid #e0e0e0;
		color: #FFFFFF;
	    font-size: 10px;
	    height: 23px;
	    line-height: 40px;
	    margin: 4px;
	    padding: 9px 9px;
  
	  background-image: -webkit-linear-gradient(top, color-stop(#9e9e9e 0%), color-stop(#7d7d7d 100%));
	  background-image: linear-gradient(to bottom, #9e9e9e 0%, #7d7d7d 100%);

	}
}

/* Imagem dos slider */
.projeto-slider img
{
	height: 272px;
	width: 984px;
}

/* estilo para safari chrome */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    .btn-voltar-projetos a{
    	  padding: 9px 13px;
    }
}

.btn-voltar-projetos .icoSetaImg{
	background-image: url("images/seta_left.png");
	background-position: 0px 1px;
	width: 20px;
}

.btn-servicos-projeto .icoSetaImg{
	background-position: 10px 0;
	width: 20px;
}

.conteudo-pagina-superior { /* estilo da row superior*/
	margin: 0;
}
.conteudo-detalhe-projeto { /* estilo da row inferior */
	margin-left: 0;
	margin-right: 0;
}
.centro-carrocel {
}

.conteudo-projeto-left {
	background-color: #cccccc;
	height: 100%;
	
}
.conteudo-projeto-center {
	height: 100%;
	padding: 0;
}
.conteudo-projeto-rigth {
	background-color: #cccccc;
	float: right;
	height: 100%;
}
.linha-vermelha-conteudo {
}
.linha-vermelha-conteudo img{
	float: right;
}

.background-conteudo-projeto {
}

.resumo-projeto-page {
}

.titulo_single_serv{

}

@media(max-width: 980px){
	.titulo_single_serv{
		margin-left: 150px;
	}	
}/*/mediaquery*/

.resumo-projeto-page h2{
	color: #ffffff;
	font-family: "DaxCondensed";
	font-size: 25px;
	float: left;
	padding: 0;
}
.resumo-projeto-page p {
	box-shadow: -15px 5px 0 -10px #FFFFFF;
	color: #828282;
	font-family: arial;
	font-size: 14px;
	float: right;
	line-height: 15px;
	padding-bottom: 0;
	padding-top: 5px;
}

.linha-imagens {
	/* height: 290px; */
	margin-right: 0;
	margin-left: 0;
}
.linha-carrosel {
	margin-right: 0;
	margin-left: 0;
}

.imagem-principal {
	width: 100%;
	height: 275px;
	box-shadow: 10px 53px 0 -45px #AF293D;
}
.imagem-principal img{
	height: 100%;
	padding: 0 auto;
}
.alturaCursor{
	padding-top: 70px;
}
.carousel-inner{
	box-shadow: 15px 50px 0 -41px #af293d;
	height: 274px;
    overflow: hidden;
    position: relative;
    width: 900px; /* 984*/
}

.owl-carousel{
		width: 1010px !important; /*900px*/
}

@media(max-width: 980px){
	.carousel-inner{
		width: 70%;
		height: 274px;
	}
	.owl-carousel{
		width: 100% !important;
	}

}/*/mediaquery*/

@media(max-width: 360px){
	.carousel-inner{
		width: 100%;
		height: 150px;
	}
	.owl-carousel{
		width: 100% !important;
	}
}/*/mediaquery*/

.carousel-control.left {
	background: none;
}
.carousel-control.right {
	background: none;
}
.carousel-indicators li {
	display: inline-block;
    height: 10px;
    line-height: 25px;
    margin-left: 75px; /* 55 */
    text-indent: 0px;
    width: 0px;

    background-color: rgba(0, 0, 0, 0);
    border: 0px solid #FFFFFF;
    border-radius: 0px;
}

@media(max-width: 768px){
	.carousel-indicators {
		 margin-left: -35%; 
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.carousel-indicators {
		margin-left: 0;
		left: 15%
	}
}/*/mediaquery*/

.carousel-indicators.listThumb li{
	 margin-left: 15%; /* 55 */
}

.servico-home {
	margin-top: 170px;
	opacity: 1;
}
.box-btn-esquerdo
{

}

.btn-vermelho-esquerdo {
	margin-left: 18px;
	height: 42px;
	width: 40px;
}
.btn-vermelho-direito {
	margin-right: 18px;
	height: 42px;
	width: 40px;
}

.img-destaque-projeto {
	/*
	height: 360px;
	width: 450px;
	*/
	height: 373px !important;
	width: 100%;
}

@media(max-width: 460px){
	.img-destaque-projeto {
	height: 100% !important;
	width: 100%;
	}
	.img-destaque-projeto img{
	height: 100%;
	width: 100%;
	}
}/*/mediaquery*/

.img-projeto {
	margin: 0 auto;
	max-height: 277px;
}
@media(max-width: 360px){
	.img-projeto{
		max-height: 150px;
	}
}/*/mediaquery*/

.img-servico-home {
	box-shadow: none;
	height: 373px;
    margin: 0 auto;
    width: 528px; /* 528px*/
    border: 2px solid #ffffff;
}

@media(max-width: 660px){
	.img-servico-home{
		width: 95%; /* 528px*/
		margin-bottom: 20px;
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.img-servico-home{
		height: 175px;
	}
}/*/mediaquery*/

/* estilo do carrosel da pagina de homepage */

.listaProjetosCarrosel {
	background: url("images/background-carrosel-projetos.png") no-repeat;
	min-height: 315px;
}

@media(max-width: 760px){
	.listaProjetosCarrosel{
		background: none;
	}
}/*/mediaquery*/

.ultimos-trabalhos
{
	color: #cacaca;
	font-family: arial;
	font-size: 10px;
	float: left;
	margin-left: 130px;
	margin-top: 45px;
}

@media(max-width: 570px){
	.ultimos-trabalhos{
		margin-left: 0px;
	}
}/*/mediaquery*/

.titulo_homepage {
	border-bottom: 5px solid #8d7f7e;
	color: #4d4d4d;
	font-family: "DaxLBold";
	font-size: 20px;
	float: right;
	margin-right: 150px;
}

@media(max-width: 460px){
	.titulo_homepage{
		margin-right: 70px;
		width: 77%;
	}
}/*/mediaquery*/
.subTitulo_homepage {
	font-family: "DaxLight";
}
.caroufredsel_wrapper {
	   margin: 70px 85px 10px !important;/*  70px 100px 10px !important; */
	   width: 1005px !important;
}
li ul.caroufredsel_wrapper {
	overflow: visible !important;
	}

.listThumb {
	line-height: 20px;
	margin-top: 35px;
}

@media screen and (-webkit-min-device-pixel-ratio:0) { 
    /* Safari and Chrome */
    .listThumb{
	margin-top: 30px;
	}
}

@media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) { @media
{
    /* Safari and Chrome */
    .listThumb{
	margin-top: 15px;
	}
}}



@media(max-width: 980px){
	.listThumb {
	margin-top: 65px;
	}
	.carousel-indicators{
		left: 42%;
	}
}/*/mediaquery*/

@media(max-width: 800px){
	.listThumb {
	margin-top: 75px;
	}
	.carousel-indicators{
		left: 42%;
	}
}/*/mediaquery*/

/* Estilo para safari e chrome */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    .listThumb {
	line-height: 50px;
	}
}
@media(max-width: 980px){
	.listThumb{
		/* width: 100%; */
	}
}/*/mediaquery*/
.thumbImgProjeto {
	width: 50px;
	height: 50px;
}

.home-carossel-setaL
{
	background: url("images/seta_preta_esquerda.png") no-repeat;
	height: 160px;
	left: 0;
	position: absolute;
	top: 110px;
	width: 60px;
}
.home-carossel-setaR
{
	background: url("images/seta_preta_direita.png") no-repeat;
	float: right;
	height: 130px;
	right: 0px;
	position: absolute;
	top: 110px;
	width: 100px;
}

.alturaCursorL {
	float: left;
	margin-left: 15px;
    margin-top: 44px;
	
}

.alturaCursorR {
	float: right;
    margin-right: 52px;
    margin-top: 45px;
}
.linha-carrosel {
	height: 270px;
	padding: 0;
}
@media(max-width: 320px){
	.linha-carrosel{
		height: 115px;
	}
}/*/mediaquery*/
.carrousel-img { /* imagens dos projetos no carrosel */
	height: 220px;
	width: 220px;
	border: 5px solid #ffffff;
}
.jcarousel { /* Estiliza os elementos ul e li do carrosel*/
	position: relative;
	padding: 0 85px;
}

@media(max-width: 460px){
	.jcarousel{
		padding: 0 45px;
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.jcarousel{
		padding: 0 23px;
	}
}/*/mediaquery*/

.jcarousel ul {
    list-style: none;
}
.jcarousel li {
    float: left;
    margin-right: 26px;
}
.projetos-carrosel{
	/*
	height: 322px !important;
	padding-left: 0px !important;
	width: 1200px !important;
	*/
}

/* estilo para os botes do carrosel de imagens do projeto destaque */
.btn-dest-left
{
	background-color: #d4d4d4 !important;
	height: 40px;
	margin-left: 10px;
	margin-top: 170px;
	width: 40px;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  
}

.btn-dest-left a
{
	padding: 9px 0 0;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 

	background-image: -webkit-linear-gradient(top, color-stop(#d3162c 0%), color-stop(#75131d 100%));
  	background-image: linear-gradient(to bottom, #d3162c 0%, #75131d 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

.btn-dest-rigth
{
	background-color: #d4d4d4 !important;
	height: 40px;
	margin-right: 10px;
	margin-top: 170px;
	width: 40px;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  
}

.btn-dest-rigth a
{
	padding: 9px 0 0;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 

	background-image: -webkit-linear-gradient(top, color-stop(#d3162c 0%), color-stop(#75131d 100%));
  	background-image: linear-gradient(to bottom, #d3162c 0%, #75131d 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
   .btn-dest-rigth a
{
	padding: 9px 0 0;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 
}
	.btn-dest-left a
{
	padding: 9px 0 0;

	border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 
}
}

.btn-projeto_dest
{

	
}
.carousel-control
{
	opacity: 1;
}

/* Estilo do botão serviço na pagina home */

.btn-conheca-servicos-home {
	height: 42px;
	background-color: #e0e0e0;
    margin: 0px auto;
    padding: 0;
}

@media(max-width: 760px){
	.btn-conheca-servicos-home{
		margin-bottom: 20px;
		margin-left: 30%;
		width: 42%;
	}
}/*/mediaquery*/

@media(max-width: 800px){
	.btn-conheca-servicos-home{
		margin-bottom: 20px;
		margin-left: 30%;
		width: 42%;
	}
}/*/mediaquery*/

@media(max-width: 980px){
	.btn-conheca-servicos-home{
		margin-bottom: 20px;
		margin-left: 30%;
		width: 42%;
	}
}/*/mediaquery*/


.btn-conheca-servicos-home a{
	height: 33px;
    width: 300px;

    font: arial;
    font-size: 12px;
    color: #ffffff;
    line-height: 45px;
    padding: 10px 52px 7px;
    text-align: justify;
    text-indent: 0px;

     border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  

    background-image: -webkit-linear-gradient(top, color-stop(#9d9d9d 0%), color-stop(#7d7d7d 100%));
  	background-image: linear-gradient(to bottom, #9d9d9d 0%, #7d7d7d 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

@media(max-width: 800px){
	.btn-conheca-servicos-home a{
		font-size: 10px;
		padding: 10px 25px 7px;
	}
}/*/mediaquery*/

/* pagina de serviços */

.servicos-disponiveis
{
	padding-right: 0;
	padding-left: 0;
}

.decricao-pagina-servicos p
{
	font-family: arial;
	font-size: 16px;
	padding: 0;
}

.caixa-servicos {
	height: 230px;
	width: 310px; /* 310px */
	background-color: #cccccc;
	margin: 0 auto;
}

.imagem-servico {
	width: 100%;
	height: 230px;
	text-align: center;
	position: relative;
}

.imagem-servico img
{
	width: 100%;
	height: 100%;

	opacity:0.4;
	filter:alpha(opacity=40);
}

.detalhe-servico 
{
	background-color: #D3031B;
    height: 0px;
    overflow: hidden;
    position: absolute;
    bottom: 0;
    width: 310px;
    z-index: 5;

	-webkit-transition: height 0.35s ease;
  	-moz-transition: height 0.35s ease;
  	-o-transition: height 0.35s ease;
  	transition: height 0.35s ease;
}
.detalhe-servico h3
{
	color: #ffffff;
	font-family: arial;
	font-size: 20px;
	margin: 5px auto;
	width: 290px;
}
.detalhe-servico p
{
	color: #ffffff;
	font-family: arial;
	font-size: 14px;
	text-align: justify;
	width: 290px;
	margin: 5px auto;
}

.caixa-servicos:hover .projeto-seta
{
	margin-top: -90px;
}
.caixa-servicos:hover img{
	opacity:1;
	filter:alpha(opacity=100);
}

.caixa-servicos:hover .detalhe-servico{
	height: 130px;
}

.row-servicos
{
	min-height: 230px;
}
.servicos-disponiveis{
	margin-bottom: 15px;
}
.
.paginacao-servicos
{
	padding-left: 50px;
}

/* pagina de clientes */

.row-clientes{
	min-height: 230px;
}
.clientes-disponiveis{
	margin-bottom: 15px;
}
.
.paginacao-clientes
{
	padding-left: 50px;
}

.caixa-clientes {
	height: 230px;
	width: 310px; /* 310px */
	background-color: #cccccc;
	margin: 0 auto;
}
.caixa-clientes:hover .barra-titulo-projeto{
	height: 0px;
}
.caixa-clientes:hover .projeto-seta
{
	margin-top: -90px;
}
.caixa-clientes:hover img{
	opacity:1;
	filter:alpha(opacity=100);
}

.caixa-clientes:hover .detalhe-servico{
	height: 130px;
}

.texto-single-clientes {
	margin-top: 20px;
	margin-bottom: 20px;
}
.texto-single-clientes p{
	font-size: 16px;
}

.lista_clientes{
	list-style-type: square;
	font-size: 15px;
	color: #D3031B;

}
@media(max-width: 800px){
	.lista_clientes{
		padding: 0;
	}
}/*/mediaquery*/
.nome_clie{
	color: #000000;
	font-size: 17px;
}
.detalhes_clie{
	color: #000000;
	margin-top: 5px;
}

/******* Projeto *******/

.barra-titulo-projeto
{
	background-color: #D3031B;
    height: 50px;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 310px;
    z-index: 5;

	-webkit-transition: height 0.35s ease;
  	-moz-transition: height 0.35s ease;
  	-o-transition: height 0.35s ease;
  	transition: height 0.35s ease;
}

.barra-titulo-projeto h3
{
	color: #ffffff;
	font-family: arial;
	font-size: 20px;
	text-align: center;
}

.caixa-servicos:hover .barra-titulo-projeto{
	height: 0px;
}

.projeto-seta
{	
	height: 23px;
	position: absolute;
    bottom: 15px;
    left: 50%;
    margin-left: -14.5px;
    width: 29px;
    z-index: 5;
}

@media(max-width: 400px){ /* ajustar a largura das caixas de serviço quando a resolução ficar abaixo de 400px de largura*/
	.detalhe-servico p{
		width: 90%;
	}
	.detalhe-servico h3{
		width: 90%;
	}
	.detalhe-servico {
		width: 100%;
	}
	.caixa-servicos {
		width: 100%;
	}
	.barra-titulo-projeto{
		width: 100%;
	}
}/*/mediaquery*/

.btn_detalhes_servico 
{
	height: 38px;
	width: 210px;
	background-color: #ffffff;
    margin: 0px auto;
    padding: 0;

     border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  
}

.btn_detalhes_servico a
{
	height: 27px;
    font: arial;
    font-size: 12px;
    color: #ffffff;
    line-height: 40px;
    margin-left: 3px;
    padding: 10px 3px 7px 28px;
    text-indent: 0px;
    text-decoration: none;
    width: 250px;

     border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px;  

    background-image: -webkit-linear-gradient(top, color-stop(#9d9d9d 0%), color-stop(#7d7d7d 100%));
  	background-image: linear-gradient(to bottom, #9d9d9d 0%, #7d7d7d 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

@media(max-width: 320px){
	.btn_detalhes_servico{
		width: 195px;
	}
	.btn_detalhes_servico a{
		padding: 10px 3px 7px 15px
	}
} /*/mediaquery*/

@media screen and (-webkit-min-device-pixel-ratio:0) {
    .btn_detalhes_servico a
	{
		padding: 10px 3px 7px 32px;

		border-radius: 3px !important;
		-moz-border-radius:3px !important;
		-webkit-border-radius: 3px !important;  

    }

    .btn_detalhes_servico_link
	{
		margin-left: 15px;
	}
}

.btn_detalhes_servico .icoSetaImg {
	background-image: url("images/seta_rigth.png");
    background-position: 10px 0px;
    background-repeat: no-repeat;
    display: inline-block;
    height: 15px;
    line-height: 30px;
    vertical-align: text-top;
    width: 60px;
    z-index: 80;

    border-radius: 3px;
	-moz-border-radius:3px;
	-webkit-border-radius: 3px; 
}
.btn_detalhes_servico_link
{
	margin-left: 15px;
}

.btn_detalhes_projetos_link
{
	margin-left: 25px;
}

@media screen and (-webkit-min-device-pixel-ratio:0){
    .btn_submit_projetos{
    	width: 170px;
    }

    .btn_detalhes_servico a
	{
		padding: 10px 1px 7px 15px;

		border-radius: 3px !important;
		-moz-border-radius:3px !important;
		-webkit-border-radius: 3px !important;  

    }

    .btn_detalhes_servico_link
	{
		margin-left: 10px;
	}
	.btn_detalhes_projetos_link {
		margin-left: 0px;
	}
}



@media(max-width: 800px){
	.btn_detalhes_projetos_link
	{
		margin-left: 20px;
	}
}/*/mediaquery*/

@media(max-width: 320px){
	.btn_detalhes_projetos_link
	{
		margin-left: 1px;
	}
	.btn_submit_projetos{
		width: 150px;
	}
	.btn_submit_projetos a{
		line-height: 31px;
	}
}/*/mediaquery*/



@media screen and (-webkit-min-device-pixel-ratio:0) {
	.btn_detalhes_projetos_link
	{
		margin-left: 1px;
	}
	.btn_submit_projetos{
		width: 150px;
	}
	.btn_submit_projetos a{
		line-height: 31px;
	}
}

.prev-link 
{
	background: url("images/seta_paginacao_cima.png") no-repeat;
	list-style: none;
}
.next-link
{
	background: url("images/seta_paginacao_baixo.png") no-repeat;
	list-style: none;
}

/* pagina de contato */

.coluna-mapa p 
{
	font-family: arial;
	font-size: 14px;
	margin-left: 20px;
	text-align: justify;
	width: 565px;
}

@media(max-width: 1260px){
	.coluna-mapa p {
	font-family: arial;
	font-size: 14px;
	margin-left: 20px;
	text-align: justify;
	width: 100%;
	}
}/*/mediaquery*/
@media(max-width: 400px){
	.coluna-mapa p {
	font-family: arial;
	font-size: 14px;
	margin-left: 00px;
	text-align: justify;
	width: 100%;
	}
}/*/mediaquery*/

.btn-mapa
{	
	border: 5px solid #d3031b;
	border-radius: 0px !important;
	color: #ffffff;
	font-family: "OpenSans-Bold";
	height: 40px;
	margin-left: 0px;
	
	width: 110px;

	background-image: -webkit-linear-gradient(top, color-stop(#e04e5f 0%), color-stop(#d3031b 100%));
  	background-image: linear-gradient(to bottom, #e04e5f 0%, #d3031b 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.link_mapa
{
	margin-top: 5px;
}
.link_mapa:hover
{
	text-decoration: none;	
}

.link_mapa:visited, .link_mapa:active, .link_mapa:link
{
	text-decoration: none;	
}

/* formulario da pagina de contato */

.coluna-formulario{

}
@media(max-width: 1000px){
	.coluna-formulario{
		margin-top: 20px;
	}
}/*/mediaquery*/

@media(max-width: 600px){
	.coluna-formulario{
		padding: 0;
	}
}/*/mediaquery*/

.input-form
{
	background-color: #e1e4e6;
	border: 0;
	height: 50px;
	margin-bottom: 10px;
	padding: 15px;
	width: 100%;
}
textarea
{
	resize: vertical; 
}

.mensagem-contato
{
	border: 0;
	height: 105px;
}

.input-form textarea
{
	background-color: #e1e4e6;
	border: 0;
	height: 105px;
	padding: 15px;
	width: 100%;
}

.image-capchar
{
	margin-left: 10px;
	width: 80px;
}
.txt-capchar
{
	background-color: #e1e4e6;
	border: 0;
	height: 50px;
	padding: 15px;
	margin-left: 10px;
	width: 215px;
}

@media(max-width: 800px){
	.txt-capchar{
		margin-left: 0px;
		width: 100%;
	}
}/*/mediaquery*/

@media(max-width: 400px){
	.txt-capchar{
		margin-left: 0px;
		width: 100%;
	}
}/*/mediaquery*/

.box-contato-gray
{
	background-color: #acb1b4;
	color: #ffffff;
	font-family: "MyriadPro"; 
	height: 90px;
	padding-left: 25px;
	padding-top: 15px;
    margin-top: -10px;
}

@media(max-width: 1124px){
	.box-contato-gray{
		height: 110px;
	}
}/*/mediaquery*/
.box-contato-gray h2
{
	font-family: "DaxLight";
	font-size: 16px;
	margin-top: 5px;

}
.box-contato-gray a
{
	font-size: 24px;
	font-weight: bold;
	text-decoration: none;
	margin-top: 5px;
}

div.wpcf7-validation-errors
{
	border: 0;
}
div.wpcf7-mail-sent-ok 
{
	border: 0;
}
div.wpcf7-mail-sent-ng
{
	border: 0;
}
::-webkit-input-placeholder {
   color: #b3b5b7;
}

:-moz-placeholder { /* Firefox 18- */
   color: #b3b5b7;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #b3b5b7;  
}

:-ms-input-placeholder {  
   color: #b3b5b7;  
}

.btn-submit-contato
{
	border: 5px solid #747d82;
	color: #ffffff;
	font-family: "OpenSans-Bold";
	height: 48px;
	margin-left: 10px;
	width: 100px;

	background-image: -webkit-linear-gradient(top, color-stop(#9da3a7 0%), color-stop(#747d82 100%));
  	background-image: linear-gradient(to bottom, #9da3a7 0%, #747d82 100%);
  	background-repeat: repeat-x;
  	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

@media(max-width: 1270px){
	.btn-submit-contato{
		margin-top: 15px;
		margin-bottom: 15px;
	}
}/*/mediaquery*/
@media(max-width: 1000px){
	.btn-submit-contato{
		margin-left: 0px;
	}
}/*/mediaquery*/
.tela_small{

}
@media(max-width: 320px){
	.tela_small{
		padding: 0;
	}
}/*/mediaquery*/

.sem-margim-padding
{
	padding: 0;
	margin: 0;
}
/* espaco em branco */
.espaco
{
	width: 5px;
}

/* pagina institucional */

.instLink
{
	text-decoration: none;
}

/* jcarrousel */

/*.owl-carousel .owl-wrapper-outer
{
	float: left;
}
.owl-theme .owl-controls
{
	float: left;
	width: 100%;
}*/

.carousel-inner > .item > img, .carousel-inner > .item > a > img{
	display: block;
	height: 370px;
    line-height: 1;
  	max-height: 100%;
    max-width: 100%;
}

.owl-carousel.owl-loaded.mark
{
	display: inline-block !important;
}

.owl-carousel.owl-loaded
{
	display: inline-block;
}

.navbar-toggle
{
	background-color: #616161;
}

.navbar-toggle .icon-bar {
	background-color: #ffffff;
}

.ico-zoom{
	background-color: rgba(0, 0, 0, 0.5);
	border: 1px solid #d3031b;
	color: #ffffff;
	font-size: 10px;
	padding: 5px;
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 1;
}
.ico-zoom span
{
	margin-right: 5px;
}

.text_mobile_menu {
	font-family: "BankGothic Md BT Medium";
	float: right;
	color: #ffffff;
	margin-left: 30px;
	margin-top: -17px;
}

.widget_text{
}

@media(max-width: 800px){
	.attachment-projeto-slide{
		height: 380px;
		width: 100%;
	}
}/*/mediaquery*/

@media(max-width: 360px){
	.attachment-projeto-slide{
		height: 150px;
		width: 300px;
	}
}/*/mediaquery*/

@media(max-width: 320px){
	.attachment-projeto-slide{
		height: 150px;
		width: 260px;
	}
}/*/mediaquery*/

.txtEficacia{

}
@media(max-width: 500px){
	.txtEficacia{
		padding: 0;
	}
}/*/mediaquery*/


/********* Projetos Img midia *********/

.img_midia{
	height: 200px;
}
.img_midia img{
	height: 100%;
	width: 100%;
}
.texto_midia{
	margin: 5px;
}
.revista-midia{
	margin-bottom: 15px;
}