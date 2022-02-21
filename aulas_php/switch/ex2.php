<!DOCTYPE html>
<html lang="pt-br"> <!-- lang determinar qual o idioma do documento em questão -->
		<head>
			<meta charset="utf-8"><!--comentario tornar nosso site disponível 
										para os principais idiomas -->
			<meta name="author" content="Autor da pagina">
			<meta name="keywords" content="HTM 5, PHP, Mysql">
			<meta name="description" content="Programação de html 5, conteúdo PHP, 
						Conceitos banco de dados Mysql">
			<title> Exemplo conversão de graus - usando formulario </title>
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
		</head>
		<body>
			<form method="post" name="Conversão" action="#" >
			<label> </label>
			<input type ="text" name="con_graus"/>
            <br>
            <label> Resposta: </label>
			<br>
            <br>
            <label> Temperatura em celsius:</label><label> Converte p/:</label>
            <br>    
			<input type = "radio" name="con_graus1" value="C" checked /> 
				<label> Celsius </label>
                <br>
			<input type = "radio" name="con_graus1" value="K" /> 
				<label>  Kelvin </label>
				<br>
            <input type = "radio" name="con_graus1" value="F"  /> 
			    <label> Fahrenheit </label>
				<br>
            <button class="w3-button w3-block w3-gray" style="width:13.7%">Converter</button>

</body>
<?php
	if(count($_POST))
	{
		$conversao = $_POST ['con_graus'];
        $graus = $_POST ['con_graus1'];

			switch ($graus)
				{
					case "F":
                        $conversaof = ($conversao*1.8)+32;
                        echo "A temperatura obtida é:".$conversaof   ;
					break;
                    case "C":
                        $conversaoc = ($conversao-32)/1.8;
                        echo "A temperatura obtida é:".$conversaoc;
                    break;
                    case "K":
                        $conversaok = $conversao+273.15;
                        echo "A temperatura obtida é:".$conversaok;
                    break;



				}	

      

	}


?>

</html>