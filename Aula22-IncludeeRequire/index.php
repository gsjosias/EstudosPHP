 <!--
<?php 
    //include('teste.php');
    //include_once impede que o arquivo seja importado mais de uma vez
    //require('teste.php');//A diferença é que o require é necessário para a continuação da execução do código
?>
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- IMPORTAR MENU -->
    <?php require('conteudo/menu.php')?>
    <!-- IMPORTAR MEIO -->
    <?php require('conteudo/meio.php')?>
    <!-- IMPORTAR RODAPÉ -->
    <?php require('conteudo/rodape.php')?>    
</body>
</html>