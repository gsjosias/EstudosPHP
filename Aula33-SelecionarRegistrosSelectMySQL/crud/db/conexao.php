 <?php
 //CONFIGURAÇÕES GERAIS
 $servidor="localhost";
 $usuario="root";
 $senha="";
 $banco="primeiro_banco";
 

 //CONEXÃO
 $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
 

 //FUNÇÃO PARA SANITIZAR (LIMPAR ENTRADAS)
 function limparPost($dado){
    $dado = trim($dado); //Remove espaços do início e do fim
    $dado = stripslashes($dado); //Remove barras invertidas de uma string.
    $dado = htmlspecialchars($dado);// Esta função é útil na prevenção de textos fornecidos pelo usuário contendo marcação HTML.
    return $dado;
 }
 ?>