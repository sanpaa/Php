<!DOCTYPE html>
<html lang="pt-br"> <!-- lang determinar qual o idioma do documento em questão -->
		<head>
			<meta charset="utf-8"><!--comentario tornar nosso site disponível 
										para os principais idiomas -->
			<meta name="author" content="Autor da pagina">
			<meta name="keywords" content="HTM 5, PHP, Mysql">
			<meta name="description" content="Programação de html 5, conteúdo PHP, 
						Conceitos banco de dados Mysql">
			<title> Exemplo Controle de Sexo - usando formulario </title>
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
		</head>
		<body>
			<form method="post" name="Controle" action="#" >
			<label> Digite a seu nome </label>
			<input type ="text" name="con_nome"/>
			<br>
			<input type = "radio" name="rad_sexo" value="F" /> 
				<label> Feminino </label>
			<br>
			<input type = "radio" name="rad_sexo" value="M" checked/> 
				<label> Masculino </label>
				<br>
			<button class="w3-button w3-black"> Butão </button>

			<input type = "submit" name="btn_sexo" value="Processar"/>

</body>
<?php
	if(count($_POST))
	{
		$nome = $_POST ['con_nome'];
		$sexo = $_POST ['rad_sexo'];
			switch ($sexo)
				{
					case "F":
						echo $nome." é feminino";
					break;
					default:
						echo $nome." é masculino";

				}	



	}


?>

</html>