<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Torneio Mundial</title>
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
	<img id="icone" src="imagens/iconesMenu/torneio.png" width="135" />
	<nav id="menu">
			<h1>Torneio Mundial</h1>
			<h2>LOLZINHO MACK</h2>	
			<ul type="disc">  
				<li onmouseover="mudaFoto('imagens/iconesMenu/home.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="home.php" 	   target="_self">Home</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/fotos.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="Fotos.php" 	   target="_self">Fotos do Pessoal</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/dicas.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="dicas.php" 	   target="_self">Dicas</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/torneio.png')"   onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="torneio.php"   target="_self">Torneio</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/videos.png')"    onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="videos.php"    target="_self">Videos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/quemSomos.png')" onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="quemSomos.php" target="_self">Quem Somos</a></li>
				<li onmouseover="mudaFoto('imagens/iconesMenu/sair.png')" 	   onmouseout="mudaFoto('imagens/iconesMenu/torneio.png')"><a href="index.php" 	   target="_self">Sair</a></li>				
			</ul>
		</nav>
		<hgroup>					
		</hgroup>
	</header>

	<h1>FASE DE GRUPO</h1>  <!-- Especificações Tecnicas -->	
	<table id="tabelaFaseDeGrupos">
	<caption>GRUPO A V D GRUPO B V D GRUPO C V D GRUPO D V D</caption>
	<tr><td>Samsung White</td> 	   <td>6</td> <td>0</td> <td>Star Horn Royal Club</td> <td>5</td> <td>1</td> <td>Samsung Blue</td> <td>5</td> <td>1</td> <td>NaJin White Shield</td> <td>5</td> <td>2</td></tr>
	<tr><td>Edward Gaming</td> 	   <td>4</td> <td>3</td> <td>Team SoloMid</td> 		   <td>4</td> <td>2</td> <td>OMG</td> 		   <td>3</td> <td>3</td> <td>Cloud9</td> 			 <td>4</td> <td>3</td></tr>
	<tr><td>Ahq e-Sports Club</td> <td>3</td> <td>4</td> <td>SK Gaming</td> 		   <td>2</td> <td>4</td> <td>LMQ</td> 		   <td>2</td> <td>4</td> <td>Alliance</td> 			 <td>3</td> <td>3</td></tr>
	<tr><td>Dark Passage</td> 	   <td>0</td> <td>6</td> <td>Taipei Assassins</td> 	   <td>1</td> <td>5</td> <td>Fnatic</td> 	   <td>2</td> <td>4</td> <td>KaBuM e-Sports</td> 	 <td>1</td> <td>5</td></tr>
	</table>
	
	<h1>TABELA ELIMINATORIA</h1>  <!-- Especificações Tecnicas -->	
	
	<table id="tabelaEliminatoria">
	<caption>TIMES HORÁRIO</caption>
	<tr><td>Samsung White</td> <td>5:15</td>  <td>3</td></tr>
	<tr><td>Team SoloMid</td>  <td>03/10</td> <td>1</td></tr>
	</table>
	
	<table id="tabelaEliminatoria">
	<caption>TIMES HORÁRIO</caption>
	<tr><td>Samsung Blue</td> <td>2:15</td>  <td>3</td></tr> <!-- <td colspan="2" //ocupa 2 linhas -->
	<tr><td>Cloud9</td>   	  <td>04/10</td> <td>1</td></tr> <!-- <td rowspan="2" //ocupa 2 colunas -->
	</table>
	
	<table id="tabelaEliminatoria">
	<caption>TIMES HORÁRIO</caption>
	<tr><td>Star Horn Royal Club</td> <td>2:15</td>  <td>3</td></tr>
	<tr><td>Edward Gaming</td>  	  <td>05/10</td> <td>2</td></tr>
	</table>
	
	<table id="tabelaEliminatoria">
	<caption>TIMES HORÁRIO</caption>
	<tr><td>NaJin White Shield</td>  <td>5:15</td>  <td>0</td></tr>
	<tr><td>OMG</td>  				 <td>06/10</td> <td>3</td></tr>
	</table>
	
	<footer id="rodape">
		<p><a href="http://www.mackenzie.br/portal.html" target="_blank">Mackenzie</a></p>
	</footer>
	
</div>

</body>
</html>