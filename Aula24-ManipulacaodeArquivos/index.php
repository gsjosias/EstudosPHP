<?php 
    /* MANIPULÇÃO DE ARQUIVOS */
    //fopen() -> abrir/Criar
    //fwrite() -> escrever no arquivo
    //fclose() -> fechar o arquivo
    //feof() ->Durante a leitura avisa q
    //fgets() -> Pega uma linha do arquivo
    //file_put_contents() -> Cria arquivo
    //file_get_contents() -> Pega todo
    //unlink() -> Deleta um arquivo
    //copy() -> Copiar arquivo

    /*
    FOPEN anotações:

    'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
    'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
    'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
    'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
    'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
    'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
    'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
    'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
     */

    $pasta = "arquivos/";//Para posteriormente acrescentar arquivos dentro desta pasta através do fopen() é necessário acrescentar "/" ao nome da mesma.

    if(!is_dir($pasta)){
        mkdir($pasta, 0755);
    }

    $nome_arquivo = date('y-m-d-H-i-s').".txt";//Cria os arquivos usando a data da criação como nome

    $arquivo = fopen($pasta.$nome_arquivo,'a+');//Adicionando um arquivo dentro da pasta criada anteriormente com o mkdir
    //'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
    fwrite($arquivo, 'Um linha injetada pelo PHP'.PHP_EOL);//função para escrever no arquvo passado como parâmetro e o PHP_EOL serve para pular uma linha
    fwrite($arquivo, 'Um linha 2 injetada pelo PHP'.PHP_EOL);
    fwrite($arquivo, 'Um linha 3 injetada pelo PHP'.PHP_EOL);
    fclose($arquivo)//É sempre necessário fechar um arquivo após trabalhar com ele ou nele.
    ?>