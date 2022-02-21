<?php

function padrao($preco = 10)
    {
        $preco = $preco * 2;
        return "O preço deste produto é:".$preco;
    }

    echo (padrao())

?>