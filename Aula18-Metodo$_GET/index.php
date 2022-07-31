<?php 
    /* $_GET 
    if(isset($_GET['nome'])){ //Verifica se a variável existe e está com o valor nome
        $nome = htmlspecialchars($_GET['nome']);
    }else{
        $nome = "Mundo!";
    }

    if(isset($_GET['cor'])){//Verifica se a variável existe e está com o valor cor
        $cor = htmlspecialchars($_GET['cor']);
    }else{
        $cor = 'white';
    }
    */
    if(isset($_GET['nome'])&&isset($_GET['idade'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        echo "<h1>O nome é $nome e a idade é $idade</h1>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor;?>
        }
    </style>
</head>
<!-- <body <?php if($nome=="Lucas"){echo "style='background:red; color:white'";}?>>
    <h1>Olá <?php echo $nome;?></h1>
    <a href="index.php?nome=Pedro&cor=pink"> Ir para Pedro</a><br>
    <a href="index.php?nome=Mateus&cor=yellow"> Ir para Mateus</a><br>
    <a href="index.php?nome=Lucas&cor=green"> Ir para Lucas</a><br>
</body> -->
<body>
    <form method="get" action="recebe_get.php">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui"><br>
        <hr><button type="submite">Enviar</button>
    </form>
</body>
</html>