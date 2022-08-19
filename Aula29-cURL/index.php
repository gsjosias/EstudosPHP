<?php 
    /* cURL - permite que você se conecte e se comunique com diferentes tipos de servidores usando diferentes tipos de protocolos como https, ftp, gopher, telnet, dict, file e idap - libcurl também suporta certificados HTTPS, HTTP POST, HTTP PUT, upload via FTP e muito mais.

    Modo feio de entender: É o Ajax do PHP. Faz basicamente a mesma coisa só que com muito mais poderes.

    Pode fazer GET ou POST, mandar e receber dados diretamente a uma URL.

    //EXEMPLO cURL GET

    //SEMPRE INICIALIZAR
    $ch = curl_init();

    //APONTAR A URL DESEJADA
    curl_setopt($ch, CURLOPT_URL,"https://viacep.com.br/ws/01001000/json/");// curl_setopt() serve para fazer uma configuração das opções do curl com várias opções
    //CURLOPT_URL serve para dizer qual url será apontada, onde será pega a informação

    //ATIVAR RETORNO COM STRING DO SERVIDOR
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);//Quer dizer que queremos que o servidor nos retorne uma string/texto e sempre colocando como 'true' para receber um retorno.


    //EXECUTAR TODO O cURL
    $retorno = curl_exec($ch);//Executa todos as configurações inseridas e as aloque em uma varável chamada 'retorno' .

    //FECHAR O cURL
    curl_close($ch); //Fechando o curl após o procedimento feito. *Obrigatório*

    $dados = json_decode($retorno, true);//Recebe o arquivo json alocado em 'retorno' e o decodifica com o json_decode e transforma em uma matriz associativa com o parâmetro 'true'.
    echo $dados["ibge"];//Passa a chave do dado encontrado dentro da matriz referido para que se obetenha o retorno do mesmo.

    */

    //EXEMPLO cURL POST

    //SEMPRE INICALIZAR
    $ch = curl_init();

    //APONTAR A URL DESEJADA
    curl_setopt($ch, CURLOPT_URL, "http://localhost/PHP/Aula29-cURL/teste.php");

    //OPÇÃO PARA DIZER QUE É POST (PADRÃO É GET)
    curl_setopt($ch, CURLOPT_POST,1);

    //OS CAMPOS QUE QUEREMOS MANDAR VIA POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('valor1' => 'Josias', 'valor2' => 'Gonçalves')));

    //ATIVAR RETORNO COMO STRING DO SERVIDOR
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //EXECUTAR TODO O cURL
    $resultado = curl_exec($ch);

    //FECHAR O cURL
    curl_close($ch);

    //MOSTRAR REOTRNO VINDO
    echo "<pre>$resultado<pre>";
?>