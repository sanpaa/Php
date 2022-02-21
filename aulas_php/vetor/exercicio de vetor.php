<?php

#Crie um Vetor utilizando a função Array que armazene 6 modelos de carros diferentes:

    $carros = array ("Gol","Uno","Palio","Fox","Siena","Celta");

#Mande para tela todos os carros do array (utilize <br> para separar cada linha);
    #com print_r
    echo "<br>";
    print_r($carros);
    echo "<br>";

    #sem print_r
    echo "<br>";
    echo"Os carros no array são: <br>";

    foreach($carros as $modelos)
    {
     print($modelos );
     print "<br>";
    }

#Mande para tela o último carro do array concatenado com o texto: “O último carro do conjunto é”:
    echo "<br>";
    echo "O ultimo carro do conjunto é: ".end($carros);

#Mande para tela o penúltimo carro do array concatenado com o texto: “O penúltimo carro do conjunto é”:
    echo "<br>";
    echo "<br>";
    echo "O penúltimo carro do conjunto é: ".prev($carros);

#Mande para tela o primeiro carro do array concatenado com o texto: “O primeiro carro do conjunto é”:
    echo "<br>";
    echo "<br>";
    echo "O primeiro carro do conjunto é: " .reset($carros);

#Coloque o conjunto em ordem alfabética e retorne para tela todos os carros agora ordenados;
    echo "<br>";
    echo "<br>";
    Sort ($carros);
    echo "Os carros em ordem crescente são: <br>".$carros[0]."<br>".$carros[1]."<br>".$carros[2],"<br>".$carros[3]."<Br>".$carros[4]."<br>".$carros[5];

# Coloque o conjunto em ordem decrescente e retorne para tela todos os carros agora ordenados;
    echo "<br>";
    echo "<br>";
    rsort ($carros);
    echo "Os carros em ordem decrescente são: <br>".$carros[0]."<br>".$carros[1]."<br>".$carros[2],"<br>".$carros[3]."<Br>".$carros[4]."<br>".$carros[5];

#Retorne para tela o índice do carro atual
    echo "<br>";
    echo "<br>";   
    echo "O índice array do carro atual é:".key($carros)


?>