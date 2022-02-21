<!DOCTYPE html>
<html lang="pt-br"> <!-- reconhece o formato da pagina. -->
	<head>
		<title> Semana 01 - Exemplo 01 </title>
		<meta charset="utf-8">
		<!-- nome do autor do site   -->
		<meta name= "author" content="Sidnei">
		<meta name="keywords" content="HTML 5, banco dados, Semanticas">
		<meta name="description" content="Aulas de php com banco dados.">
<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
-->
	</head>
	<body>
	<h3>Semana 01 - Exemplo 01 - Conexão</h3>
	<?php
	//conexão com base de dados MySql
	$host = "localhost";
	$user = "root"; 
	$pass = "";
	$banco = "banco";
	$charset = "utf8";
	// criando a linha de conexão
	$conexao = @mysqli_connect($host,$user,$pass,$banco)
		or die ("Problemas com a conexão do banco de dados");
	@mysqli_set_charset($conexao,$charset) or die (@mysqli_error($conexao));
	
	//executa a query com base na conexão
	$query = mysqli_query($conexao,"select * from tabela");
	// verifica se a query está Ok
	if(!$query )
	{
	die('query invalda: '.@mysqli_error($conexao)); // mostra o erro.
	}
	// retorna uma matriz que coresponde a linha
	while ($dados = mysqli_fetch_array($query))
	{
	
	//recuperar os dados
	echo "<b> Id: </b>".$dados['id']."<br>";
	echo "<b> Codigo: </b>".$dados['codigo']."<br>";
	
	echo "<b>Produto: </b>".$dados['produto']."<br>";	
	echo "<b>Descrição: </b>".$dados['descricao']."<br>";	
	echo "<b>Valor: </b> R$ ".$dados['valor']."<br>";	
	}
	// finaliza conexão
	mysqli_close($conexao);
	
	?>
	</body>
</html>





