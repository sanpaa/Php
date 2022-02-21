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
    <form method="post" name="salario" action="#">
        <label> Digite a sua idade </label>
        <input type="text" name="cli_salario">
        <input type="submit" name="btn_salario" value="Exibir">
    </form>
    
<?php

    /* para salario entre 1.500,00 até salario igual a 1.750,00: aumento igual a 12% 
    para salario acima 1.751,00 até salario igual a 2.000,00: aumento igual a 10% 
    para salario acima 2.000,01 até salario igual a 3.000,00: aumento igual a 7%*/
    if (count($_POST)){
        $salario = ($_POST['cli_salario']);
    }


        if ($salario >=1500 && $salario <= 1750)
        {
         echo ("<br> O valor fica R$ ");
         $porcentagem = 12;
         $salario1 = $salario * ($porcentagem / 100);
         echo ($salario1+$salario);
        }
        elseif ($salario >=1751 && $salario == 2000)
        {
         echo ("<br> O valor fica R$ ");
         $porcentagem = 10;
         $salario1 = $salario * ($porcentagem / 100);
         echo ($salario1+$salario);
        }
        elseif ($salario >=2000.01 && $salario >= 3000.00)
        {
         echo ("<br> O valor fica R$ ");
         $porcentagem = 7;
         $salario1 = $salario * ($porcentagem / 100);
         echo ($salario1+$salario);
        }





?>

</body>
</html> 