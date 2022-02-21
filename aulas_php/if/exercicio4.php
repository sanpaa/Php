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
    <form method="post" name="estoque" action="#">
        <label> Digite a quantia de estoque: </label>
        <input type="text" name="cli_estoque">
        <input type="submit" name="btn_estoque" value="Exibir">
    </form>
    
<?php

    /* Se estoque >= 100)
    "Produto com quantidade suficiente."
    Senao se (estoque < 100 && estoque > 50) 
    "Alerta: Avaliar possibilidade de novo pedido.”
    else
    "ATENÇÃO! Faça um novo pedido.*/
    if (count($_POST)){
        $estoque = ($_POST['cli_estoque']);
    
        if ($estoque >=100)
        {
         echo ("<br> Produto com quantidade suficiente");
        }
        elseif ($estoque <50 && $estoque <100)
        {
        echo("<br>Alerta: Avaliar possibilidade de novo pedido");
        }

    }


?>

</body>
</html> 