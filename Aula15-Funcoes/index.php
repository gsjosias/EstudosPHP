<?php 
    /* FUNÇÕES functions() */
    //Funções não são casesensitive 
    function Escrever($nome){
        echo "Olá, tudo bom $nome?";
    }

    Escrever("Joca");
    echo "<br>";
    function soma(int $valor1, int $valor2){
    echo $valor1+$valor2; //Tipar o valor dos dados evita a entrada de um tipo incorreto de dados
    }

    soma(10,50);
    echo "<br>";

    function fazerCafe($tipo = "cappuccino"){//Foi passado um valor padrão caso a chamada da função não passe nenhum parâmetro
        echo "Fazendo uma xícara de: $tipo<br>";
    }

    echo fazerCafe("expresso");
    echo fazerCafe();

?>