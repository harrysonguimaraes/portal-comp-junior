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
	
		<?php include ("menu.php"); ?><!-- Chama o menu externamente de outro arquivo php -->
			
		<section class="container">
            <h1 class="col-md-offset-2 titulo">A Empresa</h1><!-- Título da página -->
            <h4 class="texto margin-bottom col-md-8 col-md-offset-2 text-center"><!-- Inicio do texto da página -->
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
            </h4><!-- Fim do texto da página -->
        </section><!-- /.container -->
			
		<?php include ("footer.php"); ?><!-- Chama o footer externamente de outro arquivo php -->
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>