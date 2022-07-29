<?php
    /* FUNÇÕES MATEMÁTICAS */
    $numeros = [1, 10, 40, 5000, -20, 15];
    echo min($numeros);//Essa função verifica o menor valor dentro do array $numeros
    echo "<br>";//Para quebra de linha na exibição dos resultados no localhost
    echo max($numeros);//Essa função verifica o maior valor dentro do array $numeros
    echo "<br>";
    echo abs(min($numeros));//A função abs mostra o valor em seu estado absoluto, ou seja, caso negativo o torna positivo
    echo "<br>";
    echo sqrt(16);//Essa função exibe a raiz quadrada de um número
    echo "<br>";
    echo round(15.5);//Essa função arredonda um valor
    echo "<br>";
    echo rand(); //Gera um número randômico(aleatório)
    echo "<br>";
    echo rand(1,10); //Gera um número randômico(espaço limitado entre os valores)


 ?>