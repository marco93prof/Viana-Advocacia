<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require 'vendor/autoload.php';

	if (isset($_POST['submit']))  {
		$mailer = new PHPMailer(true);
		$mailer->setLanguage('br');                             // Habilita as saídas de erro em Português
		$mailer->CharSet='UTF-8'; 
		$mailer->IsSMTP();
		// $mailer->SMTPDebug = 1;
		$mailer->Port = 587; //Indica a porta de conexão 
		$mailer->Host = 'email-ssl.com.br';//Endereço do Host do SMTP 
		$mailer->SMTPAuth = true; //define se haverá ou não autenticação 
		$mailer->SMTPSecure = 'tls'; 
		$mailer->Username = 'formulario@vianadacruz.com.br'; //Login de autenticação do SMTP
		$mailer->Password = 'A4^^utBr!93*'; //Senha de autenticação do SMTP
		$mailer->FromName = 'Contato do site'; //Nome que será exibido
		$mailer->From = 'formulario@vianadacruz.com.br'; //Obrigatório ser a mesma caixa postal configurada no remetente do SMTP

		$mailer->AddAddress('contato@vianadacruz.com.br','Contato Site André Viana da Cruz');
		$mailer->isHTML(true); 
		
		$nome = addslashes($_POST['name']);
		$email = addslashes($_POST['email']);
		$telefone = addslashes($_POST['phone']);
		$mensagem = addslashes($_POST['message']);

		$mailer->Subject = "Contato Site André Viana da Cruz";
		$mailer->MsgHTML("<b> Nome: </b> ".$nome."<br> </br>".
						"<b> Email: </b>".$email."<br> </br>".
						"<b> Telefone: </b>".$telefone.
						"<p><b> Mensagem: </b>".$mensagem."</p>"	
	);
	
		
		if($mailer->Send()){
			$sent = "OK";
		}
		else{
			$error = "Error";
		}
	} 
?>