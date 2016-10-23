<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <title>CompJunior</title>

        <!-- Carrega CSS do Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" >
        <!--[if lt IE 9]>
		   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
           <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
		  
		<!-- Permite aumentar ou diminuir o espaçamento entre as linhas dos textos utilizados -->
		<style>
			p.small {line-height:70%;}
			p.big {line-height:120%;}
		</style>
    </head>
	  
	<body>
	
		<nav id="cabecalho">
            <nav class="navbar navbar-default" role="navigation">
                <section class="container">
                    <section>
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
                            <section class="collapse navbar-collapse" id="menu-cabecalho">
                                <ul class="nav navbar-nav">
                                    <li><a href="#" class="borda-direita">Home</a></li>
                                    <li><a href="#" class="borda-direita">A Empresa</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">Equipe <b class="caret"></b></a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a href="#">Diretoria</a></li>
                                            <li><a href="#">Assessores</a></li>
                                            <li><a href="#">Membros</a></li>
                                            <li><a href="#">Trainees</a></li>
                                            <li><a href="#">Ex-Membros</a></li>
                                        </ul>
                                    </li>  
                                    <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">MEJ <b class="caret"></b></a> 
                                                      <ul class="dropdown-menu"> 
                                                            <li><a href="#">O que é a Empresa Júnior</a></li>
                                                            <li><a href="#">O Movimento Hoje</a></li>
                                                            <li><a href="#">FEJEMG</a></li>
                                                            <li><a href="#">NEJUFLA</a></li>
                                                      </ul>
                                                </li> 
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">Serviços <b class="caret"></b></a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a href="#">Desenvolvimento de Websites</a></li>
                                            <li><a href="#">Desenvolvimento de sistemas web</a></li>
                                            <li><a href="#">Arte</a></li>
                                            <li><a href="#">Treinamentos</a></li>
                                        </ul>
                                    </li>                                      
                                    <li><a href="#" class="borda-direita">Orçamento</a></li>                     
                                    <li><a href="#" class="borda-direita">Depoimentos</a></li>                     
                                    <li><a href="#" class="borda-direita">Portfólio</a></li>                     
                                    <li><a href="#" class="borda-direita">Notícias</a></li>                     
                                    <li><a href="#">Contato</a></li> 
                                </ul>
                            </section>                              
                    </section>
                </section>
                        
            </nav>
                  <div class="faixa-cinza">
                        
                  </div> 
                 
                  <nav class="container-fluid">
                        <nav class="row" id="fundo-branco">
                              <nav class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                                   <img src="img/logocomp.png" class="img-responsive"alt=""> 
                              </nav>
                              <nav class="col-sm-5 col-md-4 fundo-verde">
                                   <p class="lead">Horário de Atendimento</p>
                                   <p>Segunda a sexta-feira de 8:00 às 12:00 e 14:00 as 18:00</p>
                                   <p><span class="glyphicon glyphicon-edit"></span>Telefone: (35) 3829-5188 / (35) 9844-34-42</p>
                                   <p><span class="glyphicon glyphicon-comment"></span>Email: contato@compjunior.com.br</p>
                              </nav>
                              
                        </nav> 
                  </nav>
        </nav>
		<section class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<h1 class="titulo">A Empresa</h1><!-- Título da página -->
				</div>
			</div>	
			<div class="row"><!-- Inicio do texto da página -->
				<div class="col-md-offset-2 col-md-8">
					<h4 class="texto text-center">
						<p class="big" align="justify">  
							A Comp Júnior é uma empresa que atua no mercado de tecnologia, através da prestação de serviços de criação de websites, 
							desenvolvimento de software, consultoria em infra-estrutura de TI, e implantação de soluções em educação a distância. 
						</p>	
						<p class="big" align="justify">
							Oferecemos um amplo portfólio de serviços, visando atender às demandas do mercado e tornar as empresas clientes mais 
							eficientes e competitivas no mercado em que se inserem. Os projetos são desenvolvidos de acordo com as necessidades de 
							cada cliente. 
						</p>
						<p class="big" align="justify">
							Contamos com a orientação dos professores do Departamento de Ciência da Computação da Universidade Federal de Lavras - 
							UFLA e constante acompanhamento dos projetos pela gerência da empresa, o que garante a qualidade dos serviços e 
							conformidade dos mesmos com as mais modernas diretrizes tecnológicas. 
						</p>
					</h4>
				</div>
			</div><!-- Fim do texto da página -->
			<div class="row"><!-- Slogan centralizado logo abaixo do texto-->
				<div class="#">
					<h1 class="slogan text-center">
						<p class="big">
							Slogan da CompJunior
						</p>
					</h1>	
				</div>
			</div><!--Fim do slogan-->
			
			<div class="row"><!--Ícones que levam para outras três seções da página: Missão, Visão e Valores; Objetivos; Estrutura-->
				
					<div class="col-md-offset-2 col-xs-offset-1 col-sm-offset-4 col-md-8 col-xs-1 col-sm-4" >
						<nav class="center">
							<ul align="#">
								<a href="#"><img src="img/valores.png" class="#" alt="Valores"></a>
								<a href="#"><img src="img/objetivos.png" class="#" alt="Objetivos"></a>
								<a href="#"><img src="img/estrutura.png" class="#" alt="Estrutura"></a>
							</ul>
						</nav>
					</div>
				
			</div><!--Fim dos ícones-->
			
        </section><!-- /.container -->
			
		<?php include ("footer.php"); ?><!-- Chama o footer externamente de outro arquivo php -->
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>