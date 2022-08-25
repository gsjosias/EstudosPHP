<?php 
    require('db/conexao.php');

//INSERIR UM DADO NO BANCO (MODO SIMPLES)
//$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,'Josias','teste@teste.com','22-08-2022')");
//$sql->execute();
//Atribui as configurações salvas em pdo a variável sql. Insere os seguintes dados na tabela através do comando "INSET INTO"; (id que é auto incrementável, por isso recebe null), nome, e-mail e a data de entrada.
//Desta maneira pessoas podem passar comandos SQL, afetando diretamente o funcionamento e estrutura do seu banco de dados
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo Dados</title>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            padding:10px;
            text-align:center;
            border: 1px solid #ccc
        }
    </style>
</head>

<body>
    <h1>Aula Inserindo Dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <button type="submit" name="salvar">Salvar</button>
    </form>
    <br>
<?php 
//MODO CORRETO ANTI SQL INJECTION

if(isset($_POST['salvar'])&& isset($_POST['nome'])&& isset($_POST['email'])){

    $nome = limparPost($_POST['nome']);
    $email = limparPost($_POST['email']);
    $data = date('d-m-Y');

    //VALIDAÇÃO DE CAMPO VAZIO
    if ($nome=="" || $nome==null){
        echo "<b style='color:red'>Insira seu nome!</b>";
        exit();
    }
    if ($email=="" || $email==null){
        echo "<b style='color:red'>Insira seu e-mail!</b>";
        exit();
    }
    //VALIDAÇÕES DE NOME E DE E-MAIL

    //VERIFICAR SE NOME ESTÁ CORRETO
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        echo "<b style='color:red'>Somente letras e espaços em branco são permitidos para o nome</b>";
        exit();
    }
    //VERIFICAR SE É UM E-MAIL VÁLIDO
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "<b style='color:red'>Formato de e-mail inválido</b>";
         exit();
    }

    //QUERY PREPARADA
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
    $sql->execute(array($nome,$email,$data));

    echo "<b style='color:green'>Cliente inserido com sucesso!</b>";
}

?>
<?php
    //SELECIONAR DADOS DA TEBELA
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();
    $dados = $sql->fetchAll();

    //EXEMPLO COM FILTRAGEM
    //$sql = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");//Comando onde seleciona na tabela clientes um usuário com um email específico
    //$email = 'josias@gongmail.com'; //Email específico para seleção na tabela
    //$sql->execute(array($email));//Passa o array para também passa a variável
    //$dados = $sql->fetchAll();

    //echo "<pre>";
    //print_r($dados);
    //echo "</pre>";
?>
<?php
if(count($dados)>0){
    echo "<br><br><table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>";

        foreach($dados as $chave => $valor){
        echo"<tr>
                <td>".$valor['id']."</td>
                <td>".$valor['nome']."</td>
                <td>".$valor['email']."</td>
            </tr>";
        }
        echo "</table>";
}else{
    echo "<p>Nenhum cliente cadastrado";
}

?>

</body>

</html>