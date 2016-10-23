<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
        				
	</head>
	
	<body>
            <nav id="cabecalho">
            <nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
                  <section class="container">
                              <!-- Brand and toggle get grouped for better mobile display -->
                              <section class="navbar-header">
                                    <!-- Esse button aparecerá no mobile para encurtar o menu -->
                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menu-cabecalho">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span> 
                                    </button>                          
                              </section> 
                              <!-- O menu que ficará dentro do botão acima é pego id="menu" -->
                              <section class="navbar-collapse collapse" id="menu-cabecalho">
                                    <?php wp_bootstrap_main_nav(); // Adicionar o menu usando Menus no Administrador do Wordpress ?>
                              </section>
                  </section>
            </nav>
            </nav>

            <div class="faixa-cinza">
                <section class="container migalha">
                        <?php if ( function_exists('get_mervin_breadcrumbs') ) {
	                               get_mervin_breadcrumbs('<p id="breadcrumbs">','</p>');
                                } 
                        ?>
                </section>
            </div> 
           
            <nav class="container-fluid" id="fundo-branco">
                <div class="container">
                  <nav class="row">
                        <nav class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                            <a href="http://www.compjunior.com.br">
                             <img class="img-responsive logoid" src="<?php bloginfo( 'template_url' ); ?>/img/logocomp1.png" alt="Comp júnior"> 
                            </a>
                        </nav>
                        <nav class="col-sm-5 col-md-4 fundo-verde">
                             <p class="lead">Horário de Atendimento</p>
                             <p>Segunda a sexta-feira de 8:00 às 12:00 e 14:00 as 18:00</p>
                             <p><span class="glyphicon glyphicon-edit">  </span>Telefone: (35) 3829-5188 / (35) 9844-3442</p>
                             <p><span class="glyphicon glyphicon-comment">  </span>Email: contato@compjunior.com.br</p>
                        </nav>
                  </nav> 
                </div>
            </nav>