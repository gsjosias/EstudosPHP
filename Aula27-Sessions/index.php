<?php
    session_start();

    $_SESSION['nome'] = "Josias";
    $_SESSION['profissao'] = "Professor";

    session_unset();
    session_destroy();
    /* SESSIONS(SESSÕES) 
    
    Uma sessão é basicamente uma forma de armazenar variáveis e compartilhar elas entre todas as páginas do seu site, enquanto o navegador estiver aberto ou até o usuário ficar inativo

    Parecido com o conceito de cookies, mas ela não cria um arquivo. A sessão fica ativa apenas durante o uso.

    Fechou o navegador ou detruiu a sessão ela se encerra.

    SINTAXE 
    session_star() //Precisa sempre estar abaixo da abertura do php = <?php
    
    //criar /modificar variável de sessão
    $_SESSION["nome"] = "Dimitri";
    $_SESSION["profissão"] = "Professor";

    //remover todas as variáveis de sessão:
    session_unset(); ou $_session = array();

    //destruir a sessão
    session_destroy();
    */
?>