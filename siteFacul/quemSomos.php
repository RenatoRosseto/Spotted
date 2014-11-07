<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Sobre nós</title>
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
	<img id="icone" src="imagens/iconesMenu/quemSomos.png" width="135" />
		<nav id="menu">
			<h1>Menu Principal</h1>
			<ul type="disc">  
				<li onmouseover="mudaFoto('imagens/iconesMenu/home.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="home.php" 	 target="_self">Home</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/fotos.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="Fotos.php" 	 target="_self">Fotos do Pessoal</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/dicas.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="dicas.php" 	 target="_self">Dicas</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/torneio.png')"   onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="torneio.php"   target="_self">Torneio</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/videos.png')"    onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="videos.php" 	 target="_self">Videos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/quemSomos.png')" onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="quemSomos.php" target="_self">Quem Somos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/sair.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/quemSomos.png')"><a href="index.php" 	 target="_self">Sair</a></li>				
			</ul>
		</nav>
		<h1>Breve Descrição</h1>
	</header>
	
	<figure class="foto-legenda">
		<img src="imagens/eu.png" />
		<figcaption>
			<h3>Renato Rosseto Neto</h3>
			<p>Um rapaz criando um site</p>
		</figcaption>
	</figure>	
	
	<footer id="rodape">
		<p><a href="http://www.mackenzie.br/portal.html" target="_blank">Mackenzie</a></p>
	</footer>
	
</div>

</body>
</html>