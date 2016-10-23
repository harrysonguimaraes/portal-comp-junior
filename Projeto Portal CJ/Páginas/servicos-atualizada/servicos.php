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
                  <nav class="faixa-cinza">
                        
                  </nav> 
                 
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

            <nav class="    area-titulo">
                  <p id="titulo">Serviços</p>
            </nav>     

            <nav class="panel-group" id="accordion">
                  <nav class="panel panel-default">
                        <nav class="panel-heading">
                              <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                          <nav class="container-fluid">
                                                <nav class="espaco">
                                                      <nav class="row" id="faixa-branca">
                                                            <nav class="col-md-2 col-md-offset-1 col-sm-offset-5 col-xs-offset-3">
                                                                  <img src="img/desenv.png" class="icone1">                              
                                                            </nav>
                                                            <nav class="col-md-6 col-md-offset-1">
                                                                  <p class="nome">Desenvolvimento</p>
                                                                  <p class="texto">Mussum ipsum cacilds. Consetis adipiscings elitis. Pra lá, 
                                                                  depois navoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
                                                                  nisi eros vermeio, in elementis mé pra quem é amistosis quis.</p>
                                                            </nav>
                                                      </nav>
                                                </nav>       
                                          </nav>
                                    </a>
                              </h4>
                        </nav>
                        <nav id="collapseOne" class="panel-collapse collapse">
                              <nav class="panel-body" id="descricao">
                                    <nav class="col-md-9 col-md-offset-1">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
                                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua 
                                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore 
                                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, 
                                          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </nav>
                              </nav>
                        </nav>
                  </nav>

                  <nav class="panel panel-default">
                        <nav class="panel-heading">
                              <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          <nav class="container-fluid">
                                                <nav class="espaco">
                                                      <nav class="row" id="faixa-branca">
                                                            <nav class="col-md-2 col-md-offset-1 col-sm-offset-5 col-xs-offset-3">
                                                                  <img src="img/lapis.png" class="icone">                              
                                                            </nav>
                                                            <nav class="col-md-6 col-md-offset-1">
                                                                  <p class="nome">Arte</p>
                                                                  <p class="texto">Mussum ipsum cacilds. Consetis adipiscings elitis. Pra lá, 
                                                                        depois navoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
                                                                        nisi eros vermeio, in elementis mé pra quem é amistosis quis.</p>
                                                            </nav>
                                                      </nav>
                                                </nav>       
                                          </nav>
                                    </a>
                              </h4>
                        </nav>
                        <nav id="collapseTwo" class="panel-collapse collapse">
                              <nav class="panel-body" id="descricao">
                                    <nav class="col-md-9 col-md-offset-1">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
                                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua 
                                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore 
                                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, 
                                          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </nav>
                              </nav>
                        </nav>
                  </nav>

                  <nav class="panel panel-default">
                        <nav class="panel-heading">
                              <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                          <nav class="container-fluid">
                                                <nav class="espaco">
                                                      <nav class="row" id="faixa-branca">
                                                            <nav class="col-md-2 col-md-offset-1 col-sm-offset-5 col-xs-offset-3">
                                                                  <img src="img/livro.png" class="icone">                              
                                                            </nav>
                                                            <nav class="col-md-6 col-md-offset-1">
                                                                  <p class="nome">Treinamento</p>
                                                                  <p class="texto">Mussum ipsum cacilds. Consetis adipiscings elitis. Pra lá, 
                                                                        depois navoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
                                                                        nisi eros vermeio, in elementis mé pra quem é amistosis quis.</p>
                                                            </nav>
                                                      </nav>
                                                </nav>       
                                          </nav>
                                    </a>
                              </h4>
                        </nav>
                        <nav id="collapseThree" class="panel-collapse collapse">
                              <nav class="panel-body" id="descricao">
                                    <nav class="col-md-9 col-md-offset-1">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
                                          non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua 
                                          put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore 
                                          wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, 
                                          raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </nav>
                              </nav>
                        </nav>
                  </nav>

                  <!--
                                          <nav class="container-fluid">
                                                <nav class="espaco">
                                                      <nav class="row" id="faixa-branco">
                                                            <nav class="col-md-3 col-md-offset-1">
                                                                  <img src="img/desenv.png" class="icone1">                              
                                                            </nav>
                                                            
                                                      </nav>
                                                </nav>       
                                          </nav>


                  <nav class="container-fluid">
                        <nav class="espaco">
                              <nav class="row" id="faixa-branco">
                                    <nav class="col-md-3 col-md-offset-1">
                                          <img src="img/lapis.png" class="icone">                              
                                    </nav>
                                    <nav class="col-md-6" id="membros">
                                          <p class="nome">Arte</p>
                                          <p class="texto">Mussum ipsum cacilds. Consetis adipiscings elitis. Pra lá, 
                                                depois navoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
                                                nisi eros vermeio, in elementis mé pra quem é amistosis quis.</p>
                                    </nav>
                              </nav>
                        </nav>
                  </nav>


                  <nav class="container-fluid">
                        <nav class="espaco">
                              <nav class="row" id="faixa-branco">
                                    <nav class="col-md-3 col-md-offset-1">
                                          <img src="img/livro.png" class="icone">                              
                                    </nav>
                                    <nav class="col-md-6" id="membros">
                                          <p class="nome">Treinamento</p>
                                          <p class="texto">Mussum ipsum cacilds. Consetis adipiscings elitis. Pra lá, 
                                                depois navoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, 
                                                nisi eros vermeio, in elementis mé pra quem é amistosis quis.</p>
                                    </nav>
                              </nav>
                        </nav> 
                  </nav>
            </nav> -->

            <!-- fim da pagina -->
            

            <?php 
                  include("footer.php");
            ?>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>

</html>  