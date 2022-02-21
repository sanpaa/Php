
<!DOCTYPE html>
<html lang="pt-br">  
		<head>
			<meta  charset="utf-8">
			<meta name="author" content="Paulo Henrique Sanches">
			<meta name="keywords" content="Atividade">
			<meta name="description" content=" Atividade. ">	
				<title>   Atividade  </title>			

		</head>
		

<form method="post" name= "calc" action="#" />
	<label> Digite a quantidade </label>
		<br>
        <input type= "text" name = "valor" />	


        <br>
        <br>

<div class = "centro">	

<?
		if(count($_POST))	
		{
$q_1 = $_POST['valor'];
$total=1;

		for($x = 1;     $x <= $q_1;    $x++)
		{
		    $total*=$x;
			echo $total." , ";
		}
			echo"<br>";
			echo"<br>";
			echo "A quantia é : "." <b> " .$total;
		}

?>


</div>
</div>
<br>
<br>

		</body>
			</html>