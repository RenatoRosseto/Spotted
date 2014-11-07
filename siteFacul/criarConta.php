<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Criando Conta</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="shortcut icon" type="image/ico" href="imagens/mackLogo.png" />
</head>

<body>
<div id="interface"> 
	
	<header id="cabecalho">
		<h1>Criar uma conta</h1>
	</header>
		<FORM action="cadastrarNoBanco.php" method="POST" >
			<BR>Nome: 	<INPUT type=TEXT name=CAMPO_NOME><BR>				
			<BR>E-mail: <INPUT type=EMAIL name=CAMPO_EMAIL><BR>
			<BR>TIA:  	<INPUT type=TEXT name=CAMPO_TIA><BR>
			<BR>Criar senha:  	   <INPUT type=PASSWORD name=CAMPO_SENHA><BR>
			<BR>Redigitar a senha: <INPUT type=PASSWORD name=CAMPO_SENHA2><BR>

			<BR>Sexo:  <INPUT type=RADIO name=CAMPO_SEXO value="M" checked>Masculino
					   <INPUT type=RADIO name=CAMPO_SEXO value="F">Feminino<BR>
					   
			<BR>ELO:  <INPUT type=RADIO name=CAMPO_ELO value="Desafiante">Desafiante
					  <INPUT type=RADIO name=CAMPO_ELO value="Diamente">Diamente
					  <INPUT type=RADIO name=CAMPO_ELO value="Platina">Platina
					  <INPUT type=RADIO name=CAMPO_ELO value="Ouro">Ouro
					  <INPUT type=RADIO name=CAMPO_ELO value="Prata">Prata
					  <INPUT type=RADIO name=CAMPO_ELO value="Bronze" checked>Bronze<BR>
					   
			<BR>Curso: <SELECT name=CAMPO_CURSO>							
							<OPTION selected>Ciência da Computação</OPTION>
							<OPTION>Sistemas de informação</OPTION>
							<OPTION>Outros..</OPTION>
						</SELECT>				
						
			<p>Data de Nascimento:<br/>
				<select name="CAMPO_DIA">
					<?php
						for($i = 1; $i <= 31; $i++){
							echo "<option value=\"$i\">$i</option>";
						}
					?>
				</select>/
				<select name="CAMPO_MES">
					<?php
						$m = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
						for($i = 1; $i <= 12; $i++){
							echo "<option value=\"$i\">$m[$i]</option>";
						}
					?>
				</select>/
				<select name="CAMPO_ANO">
					<?php
						for($i = date("Y"); $i >= date("Y")-150; $i--){
							echo "<option value=\"$i\">$i</option>";
						}
					?>
				</select>
			</p>
						
			Main lane:<BR>
			<INPUT type=RADIO name=CAMPO_LANE value="TOP" checked>TOP
			<INPUT type=RADIO name=CAMPO_LANE value="JUNGLE">JUNGLE
			<INPUT type=RADIO name=CAMPO_LANE value="MID">MID
			<INPUT type=RADIO name=CAMPO_LANE value="ADC">ADC
			<INPUT type=RADIO name=CAMPO_LANE value="SUP">SUP<BR>

			<BR>				
			<INPUT type=SUBMIT >
		</FORM>			
</div>

</body>
</html>