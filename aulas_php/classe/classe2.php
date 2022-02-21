<?php
    //cria classe  
    class Cachorro{
        private $nome;
            public function setnome($valor){
                $this->nome = $valor;
            }
            public function getnome(){
                return$this->nome;
            }
    }//fim da classe
    $objcachorro = new Cachorro();
    $objcachorro-> setnome("Fred");
    //exibir
    echo " nome do cachorro é ".$objcachorro->getnome();






?>