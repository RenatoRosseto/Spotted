<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>AULA 14</title>
	</head>
	<body>
	
		<?php
			//Define tamanho e tipos aceitos
			$tamanho_maximo = $_POST['MAX_SIZE_FILE'];
			$tipos_aceitos = array("image/x-png", "image/jpeg", "image/gif", "image/bmp");
			
			//Validação do arquivo recebido
			$arquivo = $_FILES['arquivo'];
			if($arquivo['error'] != 0) //diferente de zero quer dizer que teve erro
			{
				switch($arquivo['error'])
				{
				//Tamanho maior que o php suporta
					case UPLOAD_ERR_INI_SIZE:
						echo 'Erro! O Arquivo excede o tamanho máximo permitido';
					break;
				//Tamanho maior que o definido no formulario
					case UPLOAD_ERR_FORM_SIZE:
						echo 'Erro! Arquivo muito grande.';
					break;
				//Arquivo nao chegou completo
					case UPLOAD_ERR_PARTIAL:
						echo 'Erro! Envio nao concluido.';
					break;
				//Nao enviou o arquivo
					case UPLOAD_ERR_NO_FILE:
						echo 'Erro! Voce nao enviou um arquivo.';
					break;
				}
				
			}else
			{
				//Verifica se o arquivo tem o tipo permitido
				if(array_search($arquivo['type'],$tipos_aceitos)==FALSE)
				{
					echo 'Erro! Tipo de dados nao permitido.<br/>
							Utilize apenas JPG,PNG,BMP ou GIF.';
					exit;
				}
				//Verifica se o arquivo e vazio
				if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL)
				{
					echo 'Erro! Arquivo vazio.';
					exit;
				}
				//Tamanho maior que o permitido
				if($arquivo['size']>$tamanho_maximo)
				{
					echo 'Erro! Arquivo maior que permitido';
					exit;
				}
				
				if(!file_exists('img2'))
				{
					mkdir('img2',0777,true);
				}
				$destino='img2/' . $arquivo['name'];
				
				if(move_uploaded_file($arquivo['tmp_name'],$destino))
				{
					echo "Arquivo salvo som sucesso.";
					echo "<br/><img alt='imagem' src='$destino'/>";
				}else
				{
					echo "erro ao salvar o arquivo.";
				}
			}
			
		?>

	</body>
</html>