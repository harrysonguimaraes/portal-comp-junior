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
                  <h1 class="col-md-offset-2 titulo">Contato</h1>
                  <h4 class="subtitulo col-md-8 col-md-offset-2 text-center">
                        Sua opinião é muito importante para nós. Se você tem dúvidas, comentários e/ou sugestões,<br>
                        sinta-se a vontade para entrar em contato em uma das formas disponibilizadas abaixo.
                  </h4>
                  <section class="row">  
                        <form action="contato.php" method="POST"name="">   
                              <!--Inputs do lado esquerdo  -->
                              <section class="col-md-3 col-md-offset-2">
                                    <input class="form-control borda-cinza margin-bottom" type="text" name="nome" placeholder="Nome (*)" required autofocus>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <input class="form-control borda-cinza margin-bottom"type="text" name="organizacao" placeholder="Organização">
                                    <span class="glyphicon glyphicon-home"></span>
                                    <input class="form-control borda-cinza margin-bottom"type="tel" name="telefone1" placeholder="Telefone (*)" required>
                                    <span class="glyphicon glyphicon-phone"></span>
                                    <input class="form-control borda-cinza margin-bottom"type="tel" name="telefone2" placeholder="Tel. Alternativo">
                                    <span class="glyphicon glyphicon-phone"></span>
                                    <input class="form-control borda-cinza margin-bottom" type="email"  name="email" placeholder="Email (*)" required>
                                    <span class="glyphicon glyphicon-envelope"></span> 
                                    <input class="btn btn-block btn-verde hidden-xs hidden-sm margin-bottom" type="reset"  value="Limpar informações">
                                    <input class="btn btn-block btn-verde hidden-xs hidden-sm margin-bottom"type="submit" value="Enviar">
                              </section>
                              <!-- Inputs do lado direito -->
                              <section class="col-md-5">
                                    <input class="form-control borda-cinza margin-bottom" type="text" name="assunto" placeholder="Assunto (*)" required>
                                    <span class="glyphicon glyphicon-comment"></span>
                                    <textarea class="form-control borda-cinza padding" name="mensagem" rows="11" placeholder="Mensagem (*)"required></textarea>
                                    <span class="glyphicon glyphicon-pencil" id="mensagem"></span>   
                                    <span class="text-right help-block">(*) Campos de preenchimento obrigatório</span> 
                                    <input class="btn btn-block btn-verde hidden-md hidden-lg margin-bottom" type="reset" value="Limpar informações">
                                    <input class="btn btn-block btn-verde hidden-md hidden-lg margin-bottom" type="submit" value="Enviar">
                              </section>
                        </form>
                  </section>
            </section><!-- /.container -->

            <?php 
                  include("footer.php");
            ?>

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>

</html>


<section class="row">

<section class="col-md-3 col-md-offset-2">

<p><span class="glyphicon glyphicon-user"></span>
    [text* nome class:form-control borda-cinza margin-bottom "Nome (*)"]</p>
    
<p><span class="glyphicon glyphicon-home"></span>
    [text organzacao class:form-control borda-cinza margin-bottom "Organização"]</p>

<p><span class="glyphicon glyphicon-phone"></span>
    [tel* telefone class:form-control borda-cinza margin-bottom "Telefone (*)"]</p>

<p><span class="glyphicon glyphicon-phone"></span>
    [tel telAlternativo class:form-control borda-cinza margin-bottom "Tel. Alternativo"]</p>

<p><span class="glyphicon glyphicon-envelope"></span>
    [email* email class:form-control borda-cinza margin-bottom "E-mail (*)"]</p>        
</section>

<section class="col-md-5">

<p><span class="glyphicon glyphicon-comment"></span>
    [text* assunto class="form-control borda-cinza margin-bottom" "Assunto (*)"] </p>

<p><span class="glyphicon glyphicon-pencil" id="mensagem"></span>
    [textarea* mensagem class:form-control borda-cinza padding x8 "Mensagem (*)"] </p>

<p>[submit "Enviar" class:btn btn-block btn-verde hidden-xs hidden-lg margin-bottom]
<input class="btn btn-block btn-verde hidden-xs hidden-sm margin-bottom" type="reset" value="Limpar informações">
</p>
<span class="text-right help-block">(*) Campos de preenchimento obrigatório</span>
</section>

</section>

<!-- Orçamento! -->

<section class="row">

<section class="col-md-3 col-md-offset-2">

<p><span class="glyphicon glyphicon-user"></span>
    [text* nome class:form-control borda-cinza margin-bottom "Nome (*)"]</p>
    
<p><span class="glyphicon glyphicon-home"></span>
    [text organzacao class:form-control borda-cinza margin-bottom "Organização"]</p>

<p><span class="glyphicon glyphicon-phone"></span>
    [tel* telefone class:form-control borda-cinza margin-bottom "Telefone (*)"]</p>

<p><span class="glyphicon glyphicon-phone"></span>
    [tel telAlternativo class:form-control borda-cinza margin-bottom "Tel. Alternativo"]</p>

<p><span class="glyphicon glyphicon-envelope"></span>
    [email* email class:form-control borda-cinza margin-bottom "E-mail (*)"]</p>        
</section>

<section class="col-md-5">

<p><span class="glyphicon glyphicon-comment"></span>
    [text* assunto class="form-control borda-cinza margin-bottom" "Assunto (*)"] </p>

<p><span class="glyphicon glyphicon-pencil" id="mensagem"></span>
    [textarea* mensagem class:form-control borda-cinza padding x8 "Mensagem (*)"] </p>

<p>[submit "Enviar" class:btn btn-block btn-verde hidden-xs hidden-lg margin-bottom]
<input class="btn btn-block btn-verde hidden-xs hidden-sm margin-bottom" type="reset" value="Limpar informações">
</p>
<span class="text-right help-block">(*) Campos de preenchimento obrigatório</span>
</section>

</section>