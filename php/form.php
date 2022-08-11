<?php

if (isset($_POST['submit']))  {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['phone']);
    $mensagem = addslashes($_POST['message']);
    $to = "contato@vianadacruz.com.br";
    $from = "formulario@vianadacruz.com.br";

    $subject = "Contato - Site André Viana da Cruz ";
    $body = "- Nome: ".$nome."\n".
            "- Email: ".$email."\n".
            "- Telefone: ".$telefone."\n".
            "\n- Mensagem: ".$mensagem;	

    $header = "From:".$from."\n".
            "Reply-To:".$email."\n".
            "Return-Path:".$email."\n".
			"Content-Type: text/html;charset=utf-8"."\n".
            "X=Mailer:PHP/".phpversion();

    if( mail($to, $subject, $body, $header,"-f$from") ){
		$sent = "OK";
    }
    else{
		$error = "Error";
    }
}
?>