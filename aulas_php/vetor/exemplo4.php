<?php

    //array tipo string

    $sigla = array ("SP"=> "São Paulo",
                    "RJ"=> "Rio de Janeiro",
                    "ES"=> "Espirito Santo");
                    #exibir os resultados

                    echo "A sigla ES é <br>", $sigla["ES"];

        //quantos elementos tem nesse array
        echo "<Br>Existem ";
        echo count($sigla);
        echo " Elementos nesse array.";        


        //ultimo elemento do array
        echo "<br>";
        echo "O ultimo elemento do array é ".end($sigla);



        //primeiro elemento do array
        echo "<br>";
        echo "O primeiro elemento do array é " .reset($sigla);

?>