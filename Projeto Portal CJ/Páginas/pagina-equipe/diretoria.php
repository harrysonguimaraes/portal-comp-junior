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
                                                <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">A Empresa <b class="caret"></b></a> 
                                                      <ul class="dropdown-menu"> 
                                                            <li><a href="#">História</a></li>
                                                            <li><a href="#">Missão, Visão e Valores</a></li>
                                                            <li><a href="#">Objetivos Institucionais</a></li>
                                                            <li><a href="#">Estrutura</a></li>
                                                      </ul>
                                                </li>  
                                                <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">Equipe <b class="caret"></b></a> 
                                                      <ul class="dropdown-menu"> 
                                                            <li><a href="diretoria.php">Diretoria</a></li>
                                                            <li><a href="assessores.php">Assessores</a></li>
                                                            <li><a href="membros.php">Membros</a></li>
                                                            <li><a href="trainees.php">Trainees</a></li>
                                                            <li><a href="exmembros.php">Ex-Membros</a></li>
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

            <!-- Inicio da página -->

            <nav class="area-titulo">
                  <p id="titulo-equipe">Conheça nossa equipe</p>
                  <p id="titulo-cargo">Diretores</p>
            </nav>     


            <nav class="container-fluid">
                  <nav class="espaco-membros">
                        <nav class="row" id="fundo-branco">
                              <nav class="col-md-3 col-md-offset-2">
                                    <img src="img/gustavo.png" class="foto-membro">                              
                              </nav>
                              <nav class="col-md-4 col-md-offset-1" id="membros">
                                    <p class="nome">Gustavo do Vale</p>
                                    <p class="cargo">Membro efetivo</p>
                                    <p class="texto-membro">Sistemas de Informação - Enésimo período</p>
                                    <p class="texto-membro">gustavo[at]compjunior.com.br</p>
                                    <p class="texto-membro">Curriculum</p> 
                              </nav>
                        </nav>
                  </nav>       
            </nav>


            <nav class="container-fluid">
                  <nav class="espaco-membros">
                        <nav class="row" id="fundo-branco">
                              <nav class="col-md-3 col-md-offset-2" id="membros">
                                    <p class="nome">Gioconda Cristina Afonso de Souza</p>
                                    <p class="cargo">Assessora de Marketing</p>
                                    <p class="texto-membro">Sistemas de Informação - Nono período</p>
                                    <p class="texto-membro">souza.gioconda[at]compjunior.com.br</p>
                                    <p class="texto-membro">Curriculum</p>  
                              </nav>
                              <nav class="col-md-3 col-md-offset-2">
                                    <img src="img/gioconda.png" class="foto-membro">                              
                              </nav>
                        </nav>
                  </nav>
            </nav>


            <nav class="container-fluid">
                  <nav class="espaco-membros">
                        <nav class="row" id="fundo-branco">
                              <nav class="col-md-3 col-md-offset-2">
                                    <img src="img/gustavo.png" class="foto-membro">                              
                              </nav>
                              <nav class="col-md-4 col-md-offset-1" id="membros">
                                    <p class="nome">Gustavo do Vale</p>
                                    <p class="cargo">Membro efetivo</p>
                                    <p class="texto-membro">Sistemas de Informação - Enésimo período</p>
                                    <p class="texto-membro">gustavo[at]compjunior.com.br</p>
                                    <p class="texto-membro">Curriculum</p> 
                              </nav>
                        </nav>
                  </nav> 
            </nav>


            <nav class="container-fluid">
                  <nav class="espaco-membros">
                        <nav class="row" id="fundo-branco">
                              <nav class="col-md-3 col-md-offset-2" id="membros">
                                    <p class="nome">Gioconda Cristina Afonso de Souza</p>
                                    <p class="cargo">Assessora de Marketing</p>
                                    <p class="texto-membro">Sistemas de Informação - Nono período</p>
                                    <p class="texto-membro">souza.gioconda[at]compjunior.com.br</p>
                                    <p class="texto-membro">Curriculum</p>  
                              </nav>
                              <nav class="col-md-3 col-md-offset-2">
                                    <img src="img/gioconda.png" class="foto-membro">                              
                              </nav>
                        </nav>
                  </nav>       
            </nav>

            <!-- fim da pagina -->
            

            <?php 
                  include("footer.php");
            ?>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>

</html>  