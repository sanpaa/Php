<?php
    //formula p = 2*(b+h)
    class somarRetangulo{

        function retangulo($base,$altura)
        {
            return 2*($base+$altura);
        }

    }
    $objsomarRetangulo = new somarRetangulo();

    // passar o valor da classe

    echo "Somar o retangulo";
    echo $objsomarRetangulo->retangulo(1,2);







?>