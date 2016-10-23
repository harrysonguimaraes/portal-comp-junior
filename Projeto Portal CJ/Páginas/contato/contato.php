<?php
	$status =false;

	if($_POST){
		//debug($_POST);
		$recebenome = $_POST["nome"];
		$recebemail = $_POST["email"];
		$recebeorganizacao = $_POST["organizacao"];
		$recebetelefone1 = $_POST["telefone1"];
		$recebetelefone2 = $_POST["telefone2"];
		$recebeassunto = $_POST["assunto"];
		$recebemsg  = $_POST["mensagem"];

		$headers = "Content-type:text/html; charset=utf-8";

		$para = "harryson.guimaraes@gmail.com";

		$mensagem .= "<h3>Contato pelo Portal Comp Júnior</h3> ";
		$mensagem .= "<h3>Nome:</h3> ";
		$mensagem .= $recebenome;
		$mensagem .= "<h3>E-Mail:</h3> ";
		$mensagem .= $recebemail;
		$mensagem .= "<h3> Organização:</h3>";
		$mensagem .= $recebeorganizacao;
		$mensagem .= "<h3> Telefones:</h3>";					
		$mensagem .= $recebetelefone1;
		$mensagem .= "<p></p>";
		$mensagem .= $recebetelefone2;
		$mensagem .= "<h3>Assunto:</h3>";
		$mensagem .= $recebeassunto;
		$mensagem .= "<h3>Mensagem:</h3>";	
		$mensagem .= "<p>";
		$mensagem .= $recebemsg;						
		$mensagem .= "</p>";

		//Usar SMTP
		$status =  mail($para,"Contato Portal Comp Júnior",$mensagem,$headers);				
	}

?>