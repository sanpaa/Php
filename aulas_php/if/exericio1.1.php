<!DOCTYPE html>
<html lang="pt-br"> <!-- lang determinar qual o idioma do documento em questão -->
		<head>
			<meta charset="utf-8"><!--comentario tornar nosso site disponível 
										para os principais idiomas -->
			<meta name="author" content="Autor da pagina">
			<meta name="keywords" content="HTM 5, PHP, Mysql">
			<meta name="description" content="Programação de html 5, conteúdo PHP, 
						Conceitos banco de dados Mysql">
			<title> Exemplos de condição IF - Usando Formulário	</title>
		</head>
<!--Comentario  - corpo do HTML.      -->
<body> 
    <form method="post" name="maças" action="#">
        <label> Digite a quantia de maças: </label>
        <input type="text" name="cli_maças">
        <input type="submit" name="btn_maças" value="Exibir">
    </form>
    
<?php

    /* As maçãs custam R$ 1,30 cada, se comprar uma dúzia o valor e R$ 1,00. 
    Escreva um programa que leia o número de maçãs compradas, calcule e escreva 
    o custo total da compra. */

    if (count($_POST)){
        $maças = ($_POST['cli_maças']);
        $preço = 1.30;

        if ($maças >=12)
        {
         echo ("<br> Foram compradas: ");
         echo ($maças);
         echo(" maçãs.");
         echo("<br>Com o preço de cada unidade:");
         echo ($preço = 1.00);
         echo (" Reais.");
         echo ("<br> e o preço total de: ");
         echo($preço * $maças);
         echo (" Reais.");
        }

        if ($maças <12)
        {
         echo ("<br> Foram compradas: ");
         echo ($maças);
         echo(" maçãs.");
         echo("<br>Com o preço de cada unidade:");
         echo ($preço);
         echo (" Reais.");
         echo ("<br> e o preço total de: ");
         echo($preço * $maças);
         echo (" Reais.");
        }

    }


?>

</body>
</html> 