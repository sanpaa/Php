
<!DOCTYPE html>
<html lang="pt-br">  
		<head>
			<meta  charset="utf-8">
			<meta name="author" content="Paulo">
			<meta name="keywords" content="Atividade para nota">
			<meta name="description" content="Primeira atividade para nota do segundo semestre.">	
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<title>   PHP -  Aula 19/10/21  </title>			
		</head>
		
<form method="post" name= "calc" action="#" />
	<label> Digite a quantidade </label>
		<br>
			<input type= "text" name = "valo1" />
			<br>
			<input type= "text" name = "valo2" />			
				<br>
				 <p><button class="w3-button w3-black">Somar</button></p>
<?

if(count($_POST))	
		{
$q_1 = $_POST['valo1'];
$q_2 = $_POST['valo2'];

function alo($x1,$x2)

{
	$total= $x1 + $x2;
	return " a soma disso tudo é $total <br>";
	
}
echo alo($q_1,$q_2);


		}

?>
		</body>
			</html>