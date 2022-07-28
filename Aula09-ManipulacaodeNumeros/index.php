<?php 
    $valor = "150" + 20; //Apesar da inserção de tipos de dados diferentes, o PHP faz uma adaptação do valor de string para um valor numérico e efetua a operação.
    var_dump($valor);

    $valor1 = 4 * 2.5;
    var_dump($valor1);//Retorna um valor float
    $valor_convertido = (int) $valor; //Convertendo o valor em inteiro
    var_dump($valor_convertido);

    $valor1 = 100;
    $valor2 = 5.75;
    $valor3 = "teste";

    var_dump(is_int($valor1));//Verifica se o tipo da variável é int
    var_dump(is_numeric($valor3));//Verifica se o dado é do tipo numérico
?>