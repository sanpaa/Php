<html>
	<head>
		<title>exemplo classe
		</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	</head>
	<body>
	<!-- comentario -->
		<h3> criação classe </h3>
		<form method="post" action="#" >
		NUMERO: <INPUT type="text" name="TXT_NUMERO"/>
 <button class="w3-btn w3-white w3-border w3-border-red w3-round-large">Button</button>
		
	<input type="submit" name="btn_submit" value="exibir" />
		</form>
<?php
// html com input
//classe calcular valores
		if(count($_POST))
		{
			$x = $_POST["TXT_NUMERO"];	
	class Dividabanco{
		private $divida;
			public function setvalor($valor){
				$this->divida = $valor;
			}
			public function getvalor(){
				return $this->divida;
			}
			public function calcular_juros(){
				return $this->divida * 1.50;
			}
	}  //fim classe
	$objbanco = new	Dividabanco();
	$objbanco->setvalor($x);
echo "o valor original : ".$objbanco->getvalor();
echo "<br>o Valor do juros ".$objbanco->calcular_juros();
	}
?>
</body>
</html>