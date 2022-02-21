<?php
    //variavel global

    $ano = 2016;
    function mostrar()      //toda função tem um return hein
    {

        global $ano;
        $ano++;
        return $ano;

    }

    echo "<br> Ano inicial: ".$ano;
    echo "<br>";
        echo "<br> Novo ano".mostrar();
        echo "<br>";
            echo "<br> Novo ano".mostrar();
            echo "<br>";
                echo "<br> Novo ano".mostrar();
                echo "<br>";
                    echo "<br> Novo ano".mostrar();
                    echo "<br>";
                        echo "<br> Novo ano".mostrar();
                        echo "<br>";
?>
