<?php

if( isset($_POST['email']) && !empty($_POST['email']) ) {

	$nome = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$telefone = addslashes($_POST['phone']);
	$mensagem = addslashes($_POST['message']);

	$to = "contato@vianadacruz.com.br";
	$from = "formulario@vianadacruz.com.br";

	$subject = "Contato - Site Viana";
	$body = "Nome: ".$nome."\r\n".
	        "Email: ".$email."\r\n".
			  "Telefone: ".$telefone."\r\n".
			  "Mensagem: ".$mensagem;	
	$header = "From:".$from."\r\n".
			  "Reply-To:".$email."\r\n".
			  "X=Mailer:PHP/".phpversion();

	if( mail($to,$subject,$body,$header,"-f$from") ){
		?>
		<div class="alert alert-success" role="alert">Mensagem enviada com sucesso!</div>
		<?php
	}
	else{
		?>
		<div class="alert alert-danger" role="alert">Falha ao enviar mensagem!</div>
		<?php
	}

	// if( mail($to,$subject,$body,$header,"-f$from") ){
	// 	echo("Mensagem enviada com sucesso!");
	// }
	// else{
	// 	echo("Falha ao enviar mensagem!");
	// }
}
?>