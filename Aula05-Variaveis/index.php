<?php 
    //Variáveis
    /*
    $cor = "azul";
    $cor = "vermelho";
    $COR = "verde";
    #Não pode iniciaru ma variável com números
    echo $cor;
    */

    $x = 10;
    $y = 5;
    //global $x, $y, $z; A declaração fora da função para usar internamente na função não funciona. 
    function teste (){
        global $x, $y, $z; //Trazendo as variáveis para o escopo global
        $z = $x + $y;
    }
    teste();
    echo "<br>O valor de z fora: $z";
?>