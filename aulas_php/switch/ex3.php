<!DOCTYPE html>
<html lang="pt-br"> <!-- lang determinar qual o idioma do documento em questão -->
		<head>
			<meta charset="utf-8"><!--comentario tornar nosso site disponível 
										para os principais idiomas -->
			<meta name="author" content="Autor da pagina">
			<meta name="keywords" content="HTM 5, PHP, Mysql">
			<meta name="description" content="Programação de html 5, conteúdo PHP, 
						Conceitos banco de dados Mysql">
			<title> Exemplo menu de lanche - usando formulario </title>
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
		</head>
		<body>
			<form method="post" name="Menu" action="#" >
			<label> Digite o numero do lanche:</label>
            <br>
			<input type ="text" name="men_lanches"/>
			<br>
            <label> Lanches:</label>
            <br>    
			<input type = "radio" name="men_menu" value="1" /> 
				<label> 1 - X-Bacon </label>
                <br>
			<input type = "radio" name="men_menu" value="2" /> 
				<label> 2 - X-Salada </label>
				<br>
            <input type = "radio" name="men_menu" value="3"  /> 
			    <label> 3 - X-Picanha </label>
				<br>
            <input type = "radio" name="men_menu" value="4"  /> 
			    <label> 4 - X-Tudo </label>
				<br>
            <button class="w3-button w3-block w3-gray" style="width:13.7%">Converter</button>

</body>
<?php
	if(count($_POST))
	{
		$menu = $_POST ['men_menu'];
        $dig_lanches = $_POST ['men_lanches'];
			switch ($dig_lanches)
				{
					case "1":
                       echo "O lanche escolhido foi:".$menu." e o seu preço é : R$20.00";
                        break;
                    case "2":
                        echo "O lanche escolhido foi:".$menu." e o seu preço é : R$15.00";
                    break;
                    case "3":
                        echo "O lanche escolhido foi:".$menu." e o seu preço é : R$22.00";
                    break;
                    case "4":
                        echo "O lanche escolhido foi:".$menu." e o seu preço é : R$30.00";
                    break;
                    default:    
                        echo "Coloque o numero do lanche seu burro!";
                    break;

				}	
      

	}


?>

</html>