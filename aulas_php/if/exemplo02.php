<?php

        //if
    /* idade até 15 é juvenil
    idade até 17 jovem
    se a idade for maior que 18 - adulto*/

    $suaidade = 17;

    if ($suaidade <=15) {
    echo "Juvenil";
    }

    elseif($suaidade >=18){
    echo"Adulto";
    }

    else{
    echo "Jovem";
    }
?>