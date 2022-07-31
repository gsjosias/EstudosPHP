<?php 
    /* SUPERGLOBAIS */
    /* 
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
     */

    //$GLOBALS
    /* 
    contexto onde as variáveis comuns só podem ser utilizadas dentro do escopo onde elas estão sendo declaradas

    $a = 10;
    $b = 20;

    function soma(){
        $c = $a + $b;
    }

    soma();
    echo $c;
    
    $a = 10;
    $b = 20;

    function soma(){
       //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
       global $a,$b,$c;
    }

    soma();
    echo $c;
    
    echo $_SERVER['PHP_SELF']; //Mostra o caminho para o projeto
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];//Mostra qual o nome do servidor
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];//Mostra o cabeçalho do servidor onde a aplicação está rodando
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];//Mostra qual que é o endereço de IP de onde o servidor está sendo requisitado
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];//Fornece dados sobre o dispositivo que está fazendo requisições ao servidor
    */

    foreach ($_SERVER as $chave => $valor){
        echo "<strong>$chave</strong> : $valor<br>";
    }
?>