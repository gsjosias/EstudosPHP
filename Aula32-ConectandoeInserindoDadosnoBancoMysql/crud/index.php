<?php 
    require('db/conexao.php');


//INSERIR UM DADO NO BANCO (MODO SIMPLES)
//$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,'Josias','teste@teste.com','22-08-2022')");
//$sql->execute();
//Atribui as configurações salvas em pdo a variável sql. Insere os seguintes dados na tabela através do comando "INSET INTO"; (id que é auto incrementável, por isso recebe null), nome, e-mail e a data de entrada.
//Desta maneira pessoas podem passar comandos SQL, afetando diretamente o funcionamento e estrutura do seu banco de dados

//MODO CORRETO ANTI SQL INJECTION
$nome = "Josias";
$email = "teste@teste.com";
$data = date('d-m-Y');

//QUERY PREPARADA
$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
$sql->execute(array($nome,$email,$data));
?>