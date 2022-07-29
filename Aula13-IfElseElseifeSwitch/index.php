<?php 
    /* IF ELSE ELSE IF 

    $hora = 22;

    if($hora<12){
        echo "Bom dia!";
    }elseif($hora <18){
        echo "Bom tarde!";
    }else{
        echo "Boa noite!";
    }
 */

 /* SWITCH */

    $cor = "vermelho";

    switch($cor){
        case "vermelho":
            echo "A cor é vermelho";
            break;
        case "azul":
            echo "A cor é azul";
            break;
        case "rosa":
            echo "A cor é rosa";
            break;
        default:
        echo "A cor ".$cor." não é conhecida";
    }
?>