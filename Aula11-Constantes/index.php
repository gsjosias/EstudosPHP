<?php 
    /* CONSTANTES */
    define("exemplo","constante");//Primeiro parâmetro é a declaração e o segundo é a atribuição

    //Novos valores não podem ser atribuidos a uma constante anteiormente preenchida por um valor

    function teste(){
        echo exemplo;
    }

    teste();
    echo "<br>";
    define("carros", ["Gol","Fusca","Uno"]);
    echo carros[1];
?>