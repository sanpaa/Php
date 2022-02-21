<?php

    class Calculodoperi{
        public $base;
        public $altura;
        public $lado1;
        public $lado2;
        public $lado3;
        public $lado4;
    }
    
    
    $h = 3;
    $b = 1;
    $P = 2*($h+$b);
    echo "O perimetro do retangulo definido pelos valores:";
    echo $h ;
    echo " e ";
    echo $b ;
    echo ", É: ";
    echo $P;
    echo "<br>";


    $a = 5;
    $P1 = 4*$a;

    echo "O perimetro do quadrado é:".$P1;


    $h1 = 5;
    $b1 = 1;
    $a1 = 3;
    $P2 = 2*($a1+$b1);
    echo "<br> O perimetro do paralelograma é: ".$P2;

    $a2 = 3;
    $b2 = 3;
    $c2 = 2;
    $B2 = 5;
    $P3 = $a2+$b2+$c2+$b2;
    echo "<br> O perimetro do trapezio é: ".$P3;
    

    






?>