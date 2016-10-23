<!DOCTYPE html>
<html lang="pt-br">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
          <title>CompJunior</title>

          <!-- Carrega CSS do Bootstrap -->
          <link href="css/bootstrap.css" rel="stylesheet">
          <link href="css/style.css" rel="stylesheet" >
          <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>
      
      <body>
            <?php 
                  include("cabecalho.php");
            ?>
            <section class="container noticias">
                  <h1 class="col-md-offset-2 titulo">Notícias</h1>
                  
                  <section class="row">  
                        <div class="panel-group col-md-8 col-md-offset-2" id="accordion">
                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                          <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                      <h2>TÍTULO DO POST</h2>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, ea architecto corrupti 
                                                            sunt dolorem voluptatum iste et ratione saepe ab pariatur quasi eveniet 
                                                            expedita optio facilis iure id veritatis aperiam.</p>
                                                </a>
                                                <a class="seta-baixo btn btn-block"data-toggle="collapse" data-target="#collapseOne"></a>
                                          </h4>
                                    </div>
                                  
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                          <div class="panel-body">
                                                <p>
                                                      nim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                                                      3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum 
                                                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla 
                                                      assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt 
                                                      sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                      raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </p>
                                          </div>
                                    </div>
                              </div>


                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                          <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                      <h2>TÍTULO DO POST</h2>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, doloribus, id,
                                                       modi assumenda tempore porro dolorem cupiditate culpa deleniti mollitia vitae fuga
                                                        corporis sequi nulla nesciunt nisi maiores maxime quia. Lorem ipsum dolor sit amet,
                                                         consectetur adipisicing elit. Culpa, quam laudantium consectetur consequuntur. 
                                                         Quia, fuga, a, quibusdam, officiis assumenda inventore ipsum repudiandae accusantium 
                                                         eius laborum natus fugit amet rem eveniet. </p>
                                                </a>
                                                <a class="seta-baixo btn btn-block"data-toggle="collapse" data-target="#collapseTwo"></a>

                                          </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                          <div class="panel-body">
                                                <p>   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                                                      3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt 
                                                      laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin 
                                                      coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes 
                                                      anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings 
                                                      occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard 
                                                      of them accusamus labore sustainable VHS.
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              

                              <div class="panel panel-default">
                                    <div class="panel-heading">
                                          <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                      <h2>TÍTULO DO POST</h2>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, 
                                                            nisi alias amet eligendi est animi hic totam explicabo odio 
                                                            aspernatur at reiciendis molestiae dolor sit dolores quod esse.  Lorem 
                                                            ipsum dolor sit amet, consectetur adipisicing elit. Iure, facilis 
                                                            a reiciendis repellat nulla maiores velit odio ducimus voluptatem voluptatum 
                                                            placeat quia voluptatibus rem quas itaque nostrum perferendis dolorum. In. Voluptate, 
                                                            eligendi.</p>
                                                </a>
                                                <a class="seta-baixo btn btn-block"data-toggle="collapse" data-target="#collapseThree"></a>

                                          </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                          <div class="panel-body">
                                                <p>
                                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                                                      3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum 
                                                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee 
                                                      nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson 
                                                      cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat 
                                                      craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of 
                                                      them accusamus labore sustainable VHS.
                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        
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