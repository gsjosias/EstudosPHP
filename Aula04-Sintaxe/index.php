/* 
    // As palavras-chave do PHP não são sensitive case
    <?php //Abertura do bloco
        $cor = "Vermelho";
        $texto = "Olá mundo";
        $html = "<h1>Olá mundo</h1><p>que legal isso daqui</p>"; //Construindo html com o php
        $js = "<script>alert('Criado com PHP')</script>" //Construindo js com o php
        //echo "<p>$cor</p>";
        // echo "<p>$Cor</p>" não funcionaria pois as variáveis são sensitive case 
        //Echo "<p>Olá mundo!</p>";
        //ECHO "<p>Olá mundo!</p>";
    ?>
*/

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo $texto;
            echo $cor;
            echo $html;
            echo $js
        ?>
    </h1>
</body>
</html>