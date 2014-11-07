<?php
   
   $formValid = TRUE;
   $email = $_POST['CAMPO_EMAIL'];
   
   if($email == "" || !isset($email))
	{
		$formValid = FALSE;
	}	
		
	$regex = 
		"/^[[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
		
		if(preg_match($regex, $email))
		{			
			$formValid = FALSE;
		}

	if($formValid){		

	}
   
	#Dados para a conexão com o banco de dados
	$servidor = 'localhost'; # Nome DNS ou IP do seu servidor HTTP
	$usuario = 'root'; 		 # Nome de usuário para acesso ao MySQL
	$senhaBanco = ''; 	 	 # Senha de acesso
	$banco = 'projeto'; 	 # Nome do banco de dados
	
	# Executa a conexão com o MySQL
	$link = mysql_connect($servidor, $usuario, $senhaBanco)
		or die('Não foi possível conectar: '.mysql_error());
	
	# Seleciona o banco de dados que deseja utilizar
	$select = mysql_select_db($banco);	   

	$sql =  "SELECT * FROM cadastro_alunos WHERE email = '".$email."'";
  
    # Executa a expressão SQL no servidor, e armazena o resultado
    $consulta = mysql_query($sql);

    $resposta = mysql_num_rows($consulta);

	if($resposta > 0 ){
		while($linha = mysql_fetch_array($resposta)){
			  $emailRecuperado = $linha["senha"];
	}

	$msg = "
              <h2 style='font-family:Verdana;'>Recuperação de Senha</h2><br/>
              <div style='Verdana; font-size:10pt;'>
                       Sua senha é: <span style='font-weight: bold;' $emailRecuperado</span>
              </div>";

$mensagem = $msg;
$destinatario = $email;
$assunto = "Recupeação de senha";
$headers = "[email]tecweb2@hotmail.com[/email];"
//$headers = "Bcc: [email]webmaster@jeantavares.co.cc[/email]";

//ini_set('sendmail_from', 'postmaster@jeantavares.co.cc');
mail($destinatario, $assunto, $mensagem, $headers);

}else{
  echo "Não Consta na base de dados";
//tecweb2@hotmail.com 12renatoebruno12
}
   }
?>