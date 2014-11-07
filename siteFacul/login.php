<?php	
	$formValid = TRUE;
	$email = $_POST['CAMPO_EMAIL'];
	$senha = $_POST['CAMPO_SENHA'];
	
	if($email == "" || !isset($email) || $senha == "" || !isset($senha))
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
		
		// Criar e executar a QUERY SQL	
		$sql  = "SELECT * FROM cadastro_alunos WHERE email = '".$email."'";
		$sql .= "and senha = '".$senha."'";				  
			
		# Executa a expressão SQL no servidor, e armazena o resultado
		$result = mysql_query($sql);
			
		// mysql_affected_rows;
		$num_rows = mysql_num_rows($result);
			
		# Verifica o sucesso da operação 
		if($num_rows == 0) //$tbl = mysql_fetch_array($result)
		{
			//die('Erro: '.mysql_error());
			header("Location: erroteste.php");
		}
		
		# Se a operação foi realizada com sucesso, informa na tela
		else
		{
			header("Location: home.php");
		}		
	}	
	else
	{	
		header("Location: erroteste.php");
	}	
	  //4.Fechar a conexao
	//	mysqli_close($conexao);
?>