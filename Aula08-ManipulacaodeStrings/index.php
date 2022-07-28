<?php
    /* MANIPULAÇÃO DE STRINGS */
    $palavra = "Beleza";
    //strlen() = Conta quantos caracteres a variável possui 
    echo strlen('Oi pessoal');

    $frase = "Uma frase comprida para ver quantas palavras tem!";
    echo "<br>";

    //str_word_count() = Conta quantas palavras separadas por espaço a variável possui
    echo str_word_count($frase);
    echo "<br>";

    //strrev(); = Escreve o texto de forma reversa
    echo strrev('Josias');
    echo "<br>";

    //strpos(); = Aponta a posição de uma palavra numa string
    echo strpos($frase, "para");
    echo "<br>";
    //str_replace(); = Substitui um caractere dentro da string 

    echo str_replace("comprida", "curta", $frase);

    $data = "28-07-2022";
    $data_formatada = str_replace("-","/",$data);
    echo "<br>Data antiga: $data <br> Data formatada: $data_formatada"
?>