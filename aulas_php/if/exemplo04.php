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
    /*
    se a idade for maior que 18 - adulto
    diferente não pode entrar
    */
    
    /* 05 até 08 anos - infantil
    09 até 12 anos - juvenil
    13 até 17 anos - jovem
    acima de 18 - adulto. */
    if (count($_POST))
    {
        $idade = ($_POST['cli_idade']);

        if ($_POST['cli_idade'] >= 18)
        {
        echo("<br> Você é adulto");
        }
        elseif($idade >= 13 && $idade <=17 )
        {
        echo("<br> Você é jovem");
        }
        elseif($idade >= 9 && $idade <=12 )
        {
        echo("<br> Você é juvenil");
        }
        elseif($idade >= 5 && $idade <=8 ) 
        {
        echo("<br> Você é infantil");
        }
        else{
        echo("<br> Você é um bebe");
        }


        
    }

?>





</body>
</html> 