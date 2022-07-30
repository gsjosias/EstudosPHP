<?php 
    $carros = array("Fusca", "Uno", "Gol");
    $cores = ["Vermelho", "Preto", "Prata"];

    echo "$carros[2] $cores[1]";//Vai exibir o item na posição 2 do primeiro array e o item na posição 1 do segundo array
    echo "<br>";
    $carros[2] = "Palio";
    $cores [1] = "Branco";

    echo "$carros[2] $cores[1]";
    echo "<br>";
    /*
    //Varrendo o array com o laço FOR

    $quantidade = count($carros);//Conta o número de itens na array
    echo "A quantidade de carros disponíveis é: $quantidade";
    $qtd = count($carros);
    echo"<br>";
    for ($i = 0; $i < $qtd; $i++){
        echo $carros[$i];
        echo "<br>";
    }
    
    //Varrendo o array com o laço FOREACH
    foreach ($carros as $carro){
        echo $carro."<br>";
    }
    */
    //Array com valor associativo
    $idade = ["Dimitri"=>"30", "Maria"=>"15", "Pedro"=>"60"];
    echo $idade["Dimitri"];
    echo "<br>";

    foreach($idade as $chave => $valor){
        echo "A nome é $chave e a idade é $valor<br>";
    }
?>