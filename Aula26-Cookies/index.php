<?php
    /* COOKIES (BISCOITOS?🍪)
    
    Cookies são pequenos arquivos incorporados pelo servidor no computado do usuário. Servem para trocar dados entre o navegador do usuário e o servidos da página que o criou.

    Coorkies tem prazo de validade.

    O coorkie ficará disponível pelo tempo que o desenvolvedor do site definir. Portanto, se o cookie estiver válido, ou seja, disponível, ele poderá ser acessado em seu código mesmo que o cliente feche o navegador ou desligue o computador

    Ex: Itens em um carrinho, usuário logado.

    SINTAXE
    - Criar Cookie / Modificar / Deletar
    setcookie(nomechave, valor, validade)

    - Pegar valor Cookie
    $_COOKIE['nomechave']
    */
    

    //CRIAR UM COOKIE DE NOME
    setcookie('nome','Josias', time()+(86400 * 30)); //A validade é passada através da função time +(tempo em segundos) 86400 é a quantidade de segundos contidos em 24 horas/1 dia
    setcookie('nome', '' , time() -3600);//Deletar o cookie passando um valor negativo no parâmetro time
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookies🍪</h1>
    <?php 
    if(count($_COOKIE) > 0){
        echo "Tem cookies!";
    }else{
        echo "Não tem cookies!";
    }
    //Verificando se tem cookies na página
    
    
    if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo "O nome é $nome";
    }else{
        echo "Não tem nenhum cookie";
    }
    //Verificando a existência de um cookie específico
    ?>
</body>
</html>