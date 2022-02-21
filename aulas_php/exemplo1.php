<!DOCTYPE html>  <!-- Versão 5.0 do HTML -->


<html lang= "pt-br">  <!-- define o idioma -->
	<head> 
		<meta charset="utf-8">
		<meta name="author" content="Autor paginas">
		<meta name="keywords" content="HTML 5, PHP, MySql">
		<meta name="description" content="Programação de Html 5,
		            	Conteúdo PHP, Conceito banco de dados">

			<title> PHP - Programação  </title>

	
	</head>
    <body>
        
<?php

    echo "Boa noite bruno";
    echo "<br>";

    //comentarios
    /*
    comentarios
    */

    //Variaveis, tem que ser declarada com o $

    $nome = "Paulo Henrique";
    $sobrenome = "Sanches";
    $nome_da_cidade = "Itu";
    $valor1 = 1250;
    $valor2 = 1250.55;
    $resultado = $valor1+$valor2;
    $media = $resultado / 2;
    echo "O meu nome é ".$nome;
    echo "<br>";
    echo "Meu sobrenome é ".$sobrenome; 
    echo "<br>";
    echo "Eu moro em ".$nome_da_cidade;                            //. ele concatena
    echo "<br>";
    echo "Valor um ".$valor1;
    echo "<br>"; 
    echo "Valor dois ".$valor2;
    echo "<br>"; 
    echo "Resultando em ".$resultado;
    echo "<br>"; 
    echo "Tendo uma media de: ".$media;
    echo "<br>";

    $formato = number_format($resultado,2,',','.'); // Notação Inglesa para br (padrão), o 2 é o numero de casa decimal
    echo "O valora da soma R$".$formato;


?>

</body>
</html>
