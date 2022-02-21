<!DOCTYPE html>
<html lang="pt-br"> <!-- lang determinar qual o idioma do documento em questão -->
		<head>
			<meta charset="utf-8"><!--comentario tornar nosso site disponível 
										para os principais idiomas -->
			<meta name="author" content="Autor da pagina">
			<meta name="keywords" content="HTM 5, PHP, Mysql">
			<meta name="description" content="Programação de html 5, conteúdo PHP, 
						Conceitos banco de dados Mysql">
			<title> Exemplo Controle de temperatura - usando formulario </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		</head>
		<body>
			<form method="post" name="Controle" action="#"  />
			<label> Digite do Cliente </label>
			<input type="text"  name="con_tempo" />
			<br>
			<input type="radio" name="rad_tempo" value="C"> 
			<label> Celsius </label>
			<input type="radio"  name="rad_tempo" value="K">
			<label> Kelvin </label>

			<input type="radio"  name="rad_tempo" value="F">
			<label> Fahrenheit </label>
		<input type="submit" name="btn_tempo" value="Converter" />
<button class="w3-button w3-blue w3-border w3-border-red w3-round-large">Converter</button>
	</form>
			<?php
				if (count($_POST))
				{
					$tempo = $_POST['con_tempo'];
					$opcao = $_POST['rad_tempo'];
					switch($opcao)
					{
						case "C":
						//°C = (°F − 32) / 1,8
						$calculo = ($tempo -32) /1.8;
						echo "valor ".$calculo;
						break;
						case "K":
						//K = °C + 273,15
						$calculo = ($tempo + 273.15);
						echo "valor ".$calculo;
						break;
						case "F":
						//°F = °C × 1,8 + 32
						$calculo = ($tempo * 1.8) + 32;
						echo "valor ".$calculo;
						break;
						default:
						echo "Nao existe o valor";
					}
				}			
			?>
</body>
</html>