<?php

  // TESTE 1 -- SSL
	// The message
	$to = "renato_rosseto_neto@hotmail.com";
	//$to = "renato@ydeasolutions.com.br";
	$message = "teste muito louco \n";
	$assunto = "assunto do email";
/*	
	// Send
	$deuCerto = mail($to, $assunto, $message);
*/
/*
  // TESTE 2

$to      = 'renato_rosseto_neto@hotmail.com';
$subject = 'assunto';
$message = 'hello';
$headers = 'From: tecweb2@hotmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$deuCerto = mail($to, $subject, $message, $headers);
*/
/*
  //TESTE 3
$to = "renato_rosseto_neto@hotmail.com";
$message = "teste muito louco \n";
$assunto = "assunto do email";
 $deuCerto = mail($to, $assunto, $message, null, '-ftecweb2@hotmail.com');
*/
/*
//TESTE 4

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: eu@seudominio.com\r\n"; // remetente
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail("destinatario@algum-email.com", "Assunto", "Texto", $headers);
*/

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: tecweb2@hotmail.com\r\n"; // remetente
$headers .= "Return-Path: tecweb2@hotmail.com\r\n"; // return-path

$deuCerto = mail($to, $assunto, $message, $headers);

if($deuCerto){
	echo "Deu certo aeae";
}
else{
	echo "Deu errado vsf";
}

?>