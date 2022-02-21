<?php
    //CLASSE PRA CALCULAR VALORES  
    class Dividabanco{
        private $divida;
            public function setvalor ($valor){
                $this->divida = $valor;
            }
           public function getvalor()
           {
               return $this->divida;
           }
           public function calcular_juros()
           {
               return $this->divida * 1.5;
           }
        }
    //fim da classe

    $objbanco = new Dividabanco();
    $objbanco->setvalor(100);
    echo "o valor original é: ".$objbanco->getvalor();
    echo "<br> o valor do juros é: ".$objbanco->calcular_juros();




?>