<?php 
    /* MANIPULÇÃO DE ARQUIVOS */
    //fopen() -> abrir/Criar
    //fwrite() -> escrever no arquivo
    //fclose() -> fechar o arquivo
    //feof() ->Durante a leitura avisa que chegou ao final
    //fgets() -> Pega uma linha do arquivo até o máximo de 1024bytes.
    //file_put_contents() -> Cria arquivo/sobrescreve
    //file_get_contents() -> Pega todo conteúdo de uma string
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
    fwrite($arquivo, 'Primeira linha injetada pelo PHP'.PHP_EOL);//função para escrever no arquvo passado como parâmetro e o PHP_EOL serve para pular uma linha
    fwrite($arquivo, 'Segunda linha injetada pelo PHP'.PHP_EOL);
    fwrite($arquivo, 'Terceira linha injetada pelo PHP'.PHP_EOL);
    fclose($arquivo);//É sempre necessário fechar um arquivo após trabalhar com ele ou nele.

    $caminhoArquivo = $pasta.$nome_arquivo;//Atribuindo o caminho da pasta à uma variável

    if(file_exists($caminhoArquivo)&&is_file($caminhoArquivo)){//file_exists verifica se o arquivo existe e is_file verifica se é um arquivo.
        $abrirArquivo = fopen($caminhoArquivo, 'r');//fopen abre um arquivo e o arumento 'r' diz que é somente para leitura
        while(!feof($abrirArquivo)){//feof passa true quando chega ao final de um arquivo, entã a negação diz que enquanto ele não chegar ao final do arquivo é pra executar o laço while.
            echo fgets($abrirArquivo)."<br>";//fgets seleciona uma linha do arquivo até no máximo 1024 bytes.
            //echo file_get_contets($caminhoArquivo) Exibe todo o conteúdo do arquivo como se fosse uma única string
        }
        fclose($abrirArquivo);
    }
    if(is_dir($pasta)){
        //print_r(scandir($pasta));print_r — Imprime informação sobre uma variável de forma legível
        //scandir exibe os arquivos dentro de um diretório 
        foreach(scandir($pasta) as $arquivo){//percorre a pasta e dá nome de "arquivo" ao conteúdo.
            $caminho = $pasta.$arquivo; //Variável que contém o caminho da pasta mais o nome do arquivo que está dentro da pasta
            if(is_file($caminho)){//verifica se realmente é um arquivo
                unlink($caminho);//apaga o arquivo
            }
        }
        rmdir($pasta);//deleta a pasta após deletar todo o conteúdo da mesma
        copy('index.php', 'copia.php');//Cria uma cópia do arquivo passado no primeiro parâmentro, nomeando-o com o segundo parâmetro
        unlink('copia.php');
    }
    ?>