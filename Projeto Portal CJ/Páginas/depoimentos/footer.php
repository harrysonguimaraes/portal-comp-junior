<footer class="container-fluid" id="footer-principal">
      <section class="col-md-6 col-md-offset-1 borda-direita">
                  <h2 class="row text-center">Apoio</h2>
            <section class="row">
                  <!-- Insira aqui as imagens -->
                  <section class="col-xs-12 col-sm-4 col-md-4 text-center"><img src="img/logodcc.png" alt=""></section>
                  <section class="col-xs-12 col-sm-4 col-md-4 text-center"><img src="img/logoufla.png" alt=""></section>
                  <section class="col-xs-12 col-sm-4 col-md-4 text-center"><img src="img/logonejufla.png" alt=""></section>
            </section>
      </section>
      <section class="col-md-4 col-md-offset-1 centro">
            <p class="row"><h2 id="localizacao">Localização</h2></p>
            <section class="row padding-fundo">
                  <img src="img/location.png" id="icone-localizacao"alt="">
                  Departamento de Ciência da Computação <br>
                  Campus Universitário <br>
                  Universidade Federal de Lavras / MG 
            </section>
      </section>
                                     
</footer>

<footer id="footer">            
      <nav class="navbar navbar-default" role="navigation">
            <section class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <section class="navbar-header">
                        <!-- Esse button aparecerá no mobile para encurtar o menu -->
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#menu">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span> 
                        </button>
                        <a href="#"><img src="img/facebook.png"class="hover-azul" alt="facebook"></a>
                        <!-- <a href="#"><img src="img/twitter.png"class="hover-azul" alt="twitter"></a> -->
                        <a href="#"><img src="img/linkedin.png"class="hover-azul" alt="linkedin"></a>
                        
                        <!-- Button trigger modal -->
                        <a href="#"data-toggle="modal" data-target="#myModal">
                              <img class="hidden-md hidden-lg" id="membros-mobile" src="img/membros.png" alt="membros"> 
                        </a>                           

                  </section> 
                  <!-- O menu que ficará dentro do botão acima é pego id="menu" -->
                  <section class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                              <li><a href="#">Home</a></li>
                               <li class="dropup">
                                    <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">A Empresa</a> 
                                    <ul class="dropdown-menu"> 
                                          <li><a href="#">História</a></li>
                                          <li><a href="#">Missão, Visão e Valores</a></li>
                                          <li><a href="#">Objetivos Institucionais</a></li>
                                          <li><a href="#">Estrutura</a></li>
                                    </ul>
                              </li>                      
                              <li class="dropup">
                                    <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">Equipe</a> 
                                    <ul class="dropdown-menu"> 
                                          <li><a href="#">Diretoria</a></li>
                                          <li><a href="#">Assessores</a></li>
                                          <li><a href="#">Membros</a></li>
                                          <li><a href="#">Trainees</a></li>
                                          <li><a href="#">Ex-Membros</a></li>
                                    </ul>
                              </li>                      
                              <li class="dropup">
                                    <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">MEJ</a> 
                                    <ul class="dropdown-menu"> 
                                          <li><a href="#">O que é a Empresa Júnior</a></li>
                                          <li><a href="#">O Movimento Hoje</a></li>
                                          <li><a href="#">FEJEMG</a></li>
                                          <li><a href="#">NEJUFLA</a></li>
                                    </ul>
                              </li>                     
                              <li class="dropup">
                                    <a href="#" class="dropdown-toggle borda-direita" data-toggle="dropdown">Serviços</b></a> 
                                    <ul class="dropdown-menu"> 
                                          <li><a href="#">Desenvolvimento de Websites</a></li>
                                          <li><a href="#">Desenvolvimento de sistemas web</a></li>
                                          <li><a href="#">Arte</a></li>
                                          <li><a href="#">Treinamentos</a></li>
                                    </ul>
                              </li>                    
                              <li><a href="#">Orçamento</a></li>                     
                              <li class="hidden-sm"><a href="#">Depoimentos</a></li>                     
                              <li><a href="#">Portfólio</a></li>                     
                              <li><a href="#">Notícias</a></li>                     
                              <li><a href="#">Contato</a></li> 
                        </ul>
                  </section>

                        <!-- Button trigger modal -->
                        <a href="#"data-toggle="modal" data-target="#myModal">
                              <img class="hidden-xs" id="membros-desktop" src="img/membros.png" alt="membros">
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                          <div class="panel panel-default">
                                          <div class="panel-heading">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h3 class="panel-title text-center">Área de Membros - Login</h3>

                                          </div>
                                          <div class="panel-body">
                                          <form method="post" action="index.php" name="loginform" id="loginform">
                                            <fieldset>
                                                      <div class="form-group">
                                                          <input class="form-control" id="username" placeholder="Usuário" name="username" type="text">
                                                      </div>
                                                      <div class="form-group">
                                                            <input class="form-control" id="password" placeholder="Senha" name="password" type="password" value="">
                                                      </div>
                                                    <label>Não é usuário ainda? <a href="register.php">Registre-se</a></label>
                                                      <input class="btn btn-lg btn-info btn-block" type="submit" value="Login">
                                                </fieldset>
                                                </form>
                                        </div>
                                    </div>
                                    </div>
                              </div>
                        </div>


                        
            </section>
      </nav>  

</footer>