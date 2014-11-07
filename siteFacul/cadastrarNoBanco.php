<?php	
	$formValid = TRUE;
	
	$nome = 		$_POST['CAMPO_NOME'];
	$email = 		$_POST['CAMPO_EMAIL'];
	$tia = 			$_POST['CAMPO_TIA'];
	$senha = 		$_POST['CAMPO_SENHA'];
	$senhaConfirm = $_POST['CAMPO_SENHA2'];
	
	$sexo = 	$_POST['CAMPO_SEXO'];
	$elo = 		$_POST['CAMPO_ELO'];
	$curso = 	$_POST['CAMPO_CURSO'];
	$dia =      $_POST['CAMPO_DIA'];
	$mes = 		$_POST['CAMPO_MES'];
	$ano = 		$_POST['CAMPO_ANO'];
	$dataNasc = date("$ano-$mes-$dia");
	$lane = 	$_POST['CAMPO_LANE'];
		
	if($nome == "" || !isset($nome) || $email == "" || !isset($email) || $tia == "" || !isset($tia) || $senha == "" || !isset($senha) || $senhaConfirm == "" || !isset($senhaConfirm) || $senha != $senhaConfirm)
	{
		$formValid = FALSE;
	}	
		
	$regex = 
		"/^[[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
		
		if(preg_match($regex, $email))
		{			
			$formValid = FALSE;
		}				
		
	if($formValid)
	{
		#Dados para a conexão com o banco de dados
		$servidor = 'localhost'; # Nome DNS ou IP do seu servidor HTTP
		$usuario = 'root'; 		 # Nome de usuário para acesso ao MySQL
		$senhaBanco = ''; 	 # Senha de acesso
		$banco = 'projeto'; 	 # Nome do banco de dados

		# Executa a conexão com o MySQL
		$link = mysql_connect($servidor, $usuario, $senhaBanco)
			or die('Não foi possível conectar: '.mysql_error());
			
		# Seleciona o banco de dados que deseja utilizar
		$select = mysql_select_db($banco);	
		
		# Cria a expressão SQL de inserção
		$sql = "insert into cadastro_alunos values(null,'$nome','$email','$tia','$senha','$sexo','$elo','$curso','$dataNasc','$lane'); ";

		# Executa a expressão SQL no servidor, e armazena o resultado
		$result = mysql_query($sql);

		# Verifica o sucesso da operação 
		if(!$result)
		{
			die('Erro: '.mysql_error());
			header("Location: erroteste.php");
		}
		
		# Se a operação foi realizada com sucesso, informa na tela
		else
		{
			header("Location: home.php");
		}
		
	}
	else{
		header("Location: erroteste.php");
	}		
?>