<?php

session_start();

if( isset($_POST['email']) && !empty($_POST['email']) ) {

	$nome = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$telefone = addslashes($_POST['phone']);
	$mensagem = addslashes($_POST['message']);

	$to = "contato@vianadacruz.com.br";
	$from = "formulario@vianadacruz.com.br";

	$subject = "Contato - Site Viana";
	$body = "- Nome: ".$nome."\r\n".
	        "- Email: ".$email."\r\n".
			  "- Telefone: ".$telefone."\r\n".
			  "\r\n- Mensagem: ".$mensagem;	
	$header = "From:".$from."\r\n".
			  "Reply-To:".$email."\r\n".
			  "X=Mailer:PHP/".phpversion();

	if( mail($to,$subject,$body,$header,"-f$from") ){
		// echo '<div class="alert alert-success" role="alert">Mensagem enviada com sucesso!</div>';
		// echo "<script>alert('Mensagem enviada com sucesso!');</script>";
		echo "<script>window.location.href='http://vianadacruz.com.br';alert('Sucesso!');</script>";
		// header('Location: http://vianadacruz.com.br');
	}
	else{
		// echo '<div class="alert alert-danger" role="alert">Falha ao enviar mensagem!</div>';
		// echo "<script>alert('Falha ao enviar mensagem!');</script>";
		echo "<script>window.location.href='http://vianadacruz.com.br';alert('Falhou!');</script>";
		// header('Location: http://vianadacruz.com.br');
	}
}
?>