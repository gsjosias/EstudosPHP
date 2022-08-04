<?php
    /* MANIPULANDO DATA e HORA date() */
    echo date('d/m/Y');//Exibe o dia(d), mês(m) e ano(y se quiser exibir os dois últimos dígitos do ano).
    echo "<br>";
    echo date('H:i:s');//Exibe(hora(h), minutos(i), segundos(s).
    echo "<br>";
    //PADRÃO BRASILEIRO DE DATAS
    //dia/mes/ano 06/09/2011
    //PADRÃO AMERICANO DE DATAS
    //ano/mes/dia 20221/09/06

    //Calcular a diferença de dias(prazo entre datas)
    $hoje = date('Y-m-d');
    $vencimento = '2022-10-15';

    $diferenca = strtotime($vencimento) - strtotime($hoje);
    $dias = floor($diferenca /(60*60*24));//A função floor arredonda os números para baixo

    //CONVERSÃO PARA O PADRÃO BR
    $venc = explode('-',$vencimento);
    $venc_formatado = $venc[2]."/".$venc[1]."/".$venc[0];

    $data_hoje = explode('-',$hoje);
    $hoje_formatado = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

    echo "Vencimento: $venc_formatado<br>";
    echo "Hoje: $hoje_formatado<br><br>";
    echo "A diferença é de $dias dias entre as datas";
    
    //COMPARAR DUAS DATAS MAIOR OU MENOR
    echo "<br><br>";
    $data1 = date('Y-m-d');
    $data2 = '2022-09-20';

    if(strtotime($data1) > strtotime($data2)){
        echo "A data 1 é maior que a data 2";
        echo "Vencido";
    }elseif(strtotime($data1) == strtotime($data2)){
        echo "A data 1 é igual a data 2.";
        echo "Vence hoje!<br>";
    }else{
        echo "A data 1 é menor que a data 2";
        echo "<br>Ainda está na validade";
    }

 ?>