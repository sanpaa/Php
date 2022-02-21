<?php
    //cria classe
    class Cachorro{
        public $nome;
        public $peso;

    }


    echo "Manipulando os dados<br>";

    //criando ou instanciando a classe
    $objcachorro = new Cachorro();
    //atribuir valor para propriedades
    $objcachorro->nome = "Mayla";
    $objcachorro->peso = "5kg";

    #imprimir o valor da propriedade
    echo "O nome do cachorro : ".$objcachorro->nome;
    echo "<br>O peso do cachorro : ".$objcachorro->peso;

?>