<?php 
    /*MANIPULAÇÃO DE PASTAS(DIRETÓRIOS) */
    
    /* CHMOD: Níveis de restrições para diretórios e arquivos
    
    <?php
    // Escrita e leitura para o proprietario, nada ninguem mais
    chmod ("/somedir/somefile", 0600);

    // Escrita e leitura para o proprietario, leitura para todos os outros
    chmod ("/somedir/somefile", 0644);

    // Tudo para o proprietario, leitura e execucao para os outros
    chmod ("/somedir/somefile", 0755);

    // Tudo para o proprietario, leitura e execucao para o grupo do prop
    chmod ("/somedir/somefile", 0750);
    ?>
     */
    $pasta = "nova_pasta/imagem";
    

    //COMANDO PARA CRIAR PASTA
    if(!is_dir($pasta)){//is_dir verifica se o diretório existe
        mkdir($pasta,0755,true);//mkdir cria uma pasta Para criar mais de uma pastar é preciso adiocinar o parâmetro true após o chmod
    }else{
        rename($pasta,'imagem');//Renomeia a pasta e caso seja passado o nome de uma pasta que está dentro de outra, essa pasta é movida para fora 

       // rmdir($pasta);//rmdir deleta a pasta, porém só funciona se a pasta estiver vazia
    }
    
    

?>