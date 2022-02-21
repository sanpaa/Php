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
    <form method="post" name="cliente" action="#">
        <label> Digite a sua idade </label>
        <input type="text" name="cli_idade">
        <input type="submit" name="btn_idade" value="Exibir">
    </form>
    
<?php

    /* Menor que 17 e acima de 60 anos paga meia (R$8,00)
    Maior que 18 e menor 59 anos paga inteira(R$16,00*/
    if (count($_POST)){
        $idade = ($_POST['cli_idade']);

        if ($idade <= 17)
        {
         echo ("<br> O valor fica R$ 8,00 ");
        }
        elseif ($idade >= 60)
        {
            echo ("<br> O valor fica R$ 8,00 ");       
        }

        elseif($idade >=18 && $idade <=59)
        {
        echo ("<br> O valor fica R$ 16,00 ");
        }
    }
?>