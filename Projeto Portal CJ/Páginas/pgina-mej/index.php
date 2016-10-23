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
            <h1 class="col-md-offset-2 titulo">MEJ</h1><!-- Título da página -->
            <h4 class="texto margin-bottom col-md-8 col-md-offset-2 text-center"><!-- Inicio do texto da página -->
				<p class="big" align="justify">  
					O que é Empresa Júnior? 
				</p>	
				<p class="big" align="justify">
					Uma Empresa Júnior (EJ) caracteriza-se por ser uma associação civil sem fins lucrativos, constituída e gerida por alunos de curso universitário ou técnico. Presta serviços e desenvolve projetos para diversos setores da sociedade.
Por ser composta de alunos da graduação, o preço dos serviços oferecidos são menores que os do mercado. Além disso a participação de professores orientadores garante aos projetos alto nível de qualidade.
				</p>
				<p class="big" align="justify">
					O papel das Empresas Juniores é possibilitar aos estudantes a oportunidade de aprimoramento técnico através de trabalhos realizados e que dêem a eles uma visão real, possibilitando-lhes a resolução de problemas práticos e o aprimoramento pessoal/humano através do engajamento numa organização que esteja preocupada com o desenvolvimento como indivíduo.

Também, enquanto empresa de consultoria, a Empresa Júnior possui o papel de auxiliar e assistir aos clientes na melhoria de seu desempenho, nos aspectos de eficiência, tecnologia e no aprimoramento das relações interpessoais.

Em função desse papel inovador, a Empresa Júnior adquire uma grande influência sobre os clientes, sobre os alunos e as demais pessoas com as quais interage, tendo portanto uma correspondente responsabilidade profissional e social.
				</p>
            </h4><!-- Fim do texto da página -->
        </section><!-- /.container -->
			
		<?php include ("footer.php"); ?><!-- Chama o footer externamente de outro arquivo php -->
			
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>