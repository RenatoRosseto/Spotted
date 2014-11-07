<?php
	$ytvideo = "www.youtube.com/embed/Zu15Ou-jKM0"; //// fazer um while aqui pegando todos os vídeos do banco e mostrando lá \/
	/*
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
	$sql  = "SELECT * FROM videos";				  
		
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
	*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Videos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="shortcut icon" type="image/ico" href="imagens/mackLogo.png" />
</head>
<script>
	function mudaFoto (foto)
	{
		document.getElementById("icone").src = foto;
	}
</script>
<body>
<div id="interface"> 	
	<header id="cabecalho">	
	<img id="icone" src="imagens/iconesMenu/videos.png" width="135" />
		<nav id="menu">
			<h1>Menu Principal</h1>
			<ul type="disc">  
				<li onmouseover="mudaFoto('imagens/iconesMenu/home.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="home.php" 	   target="_self">Home</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/fotos.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="Fotos.php" 	   target="_self">Fotos do Pessoal</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/dicas.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="dicas.php" 	   target="_self">Dicas</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/torneio.png')"   onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="torneio.php"    target="_self">Torneio</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/videos.png')"    onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="videos.php" 	   target="_self">Videos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/quemSomos.png')" onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="quemSomos.php"  target="_self">Quem Somos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/sair.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/videos.png')"><a href="index.php" 	   target="_self">Sair</a></li>				
			</ul>
		</nav>
		<h1>Breve Descrição</h1>
	</header>
		
		<h1>Breve Descrição</h1>
		<h3>Neste campo.. <br/>vamos postar alguns videos</h3>	
		
		<iframe width="560" height="315" src="//<?php echo $ytvideo;?>" frameborder="0" allowfullscreen></iframe>
		
	<footer id="rodape">
		<p><a href="http://www.mackenzie.br/portal.html" target="_blank">Mackenzie</a></p>
	</footer>
	
</div>

</body>
</html>