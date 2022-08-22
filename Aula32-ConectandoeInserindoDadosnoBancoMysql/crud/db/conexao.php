 <?php
 //CONFIGURAÇÕES GERAIS
 $servidor="localhost";
 $usuario="root";
 $senha="";
 $banco="primeiro_banco";
 

 //CONEXÃO
 $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
 
 ?>