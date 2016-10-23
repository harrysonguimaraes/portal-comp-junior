<footer class="container-fluid" id="footer-principal">
    <section class="container">
      <section class="col-md-6 col-md-offset-1 borda-direita">
                  <h2 class="row text-center">Apoio</h2>
            <section class="row">
                  <!-- Insira aqui as imagens -->
                <section class="col-xs-12 col-sm-4 col-md-4 text-center">
                    <a href="http://www.dcc.ufla.br" target="_blank">
                      <img class="img-rounded" src="<?php bloginfo( 'template_url' ); ?>/img/logodcc.png" alt="DCC-UFLA">
                    </a>
                </section>
                <section class="col-xs-12 col-sm-4 col-md-4 text-center">
                    <a href="http://www.ufla.br" target="_blank">
                        <img class="img-rounded" src="<?php bloginfo( 'template_url' ); ?>/img/logoufla.png" alt="UFLA">
                    </a>
                </section>
                <section class="col-xs-12 col-sm-4 col-md-4 text-center">
                    <a href="#" target="_blank">
                      <img class="img-rounded" src="<?php bloginfo( 'template_url' ); ?>/img/logonejufla.png" alt="NEJUFLA">
                    </a>
                </section>
            </section>
      </section>
      <section class="col-md-4 col-md-offset-1 centro">
            <p class="row"><h2 id="localizacao">Localização</h2></p>
            <section class="row padding-fundo">
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/location.png" id="icone-localizacao"alt="">
                  Departamento de Ciência da Computação <br>
                  Campus Universitário <br>
                  Universidade Federal de Lavras / MG 
            </section>
      </section>
    </section>
                                     
</footer>

<footer id="footer">            
      <nav class="navbar navbar-default" role="navigation">
            <section class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <section class="navbar-header">

                      <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/facebook.png"class="hover-azul" alt="facebook"></a>
                      <!-- <a href="#"><img src="img/twitter.png"class="hover-azul" alt="twitter"></a> -->
                      <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/linkedin.png"class="hover-azul" alt="linkedin"></a>
                        
                        <!-- Button trigger modal -->
                        <a href="#"data-toggle="modal" data-target="#myModal">
                            <img class="hidden-md hidden-lg" id="membros-mobile" src="<?php bloginfo( 'template_url' ); ?>/img/membros.png" alt="membros">
                        </a>                           

                  </section> 
                  <!-- O menu que ficará dentro do botão acima é pego id="menu" -->
                  <!-- <section class="collapse navbar-collapse" id="menu">
                        <//?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>  
                  </section>
                    -->

                        <!-- Button trigger modal -->
                        <a href="#"data-toggle="modal" data-target="#myModal">
                              <img class="hidden-xs" id="membros-desktop" src="<?php bloginfo( 'template_url' ); ?>/img/membros.png" alt="membros">
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
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
     
	</body>

</html>