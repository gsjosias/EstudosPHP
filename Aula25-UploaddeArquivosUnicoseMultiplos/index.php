<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload de arquivos</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form method="post" enctype="multipart/form-data" class="m-3">
            <!-Sempre que for form de upload de arquivos usar o enctype="multipart/form-data" com o method="post" ->
                <div class="input-group">
                    <input type="file" class="form-control" name="arquivo" id="arquivo" aria-describedby="arquivo"
                        aria-label="Upload" required>
                    <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
                </div>
        </form>
    </div>
    <?php
        if(isset($_POST['enviar'])){
            //echo "<pre>"; O que estiver entre as linhas <pre> será organizado de forma que facilite a leitura
            //var_dump($_FILES); Esta função mostrará uma representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor.
            //echo "<pre>";

            //VALIDAÇÕES

            $tamanhoMax = 2097152; //valor máximo deve ser colocado em bytes(2097152 são 2MB)
            $permitido = array("jpg", "png", "jpeg", "mp4");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);//dentro da global files, no campo de input com o name="arquivo", com a constante PATHINFO_EXTESION busca a extensão do arquivo enviado no campo de input mencionado

            //VERIFICAR SE TEM TAMANHO PERMITIDO
            if($_FILES['arquivo']['size'] >= $tamanhoMax){
                echo '<div class="alert alert-danger" role="alert">
                        Erro: Tamanho máximo de 2 MB. Não foi possível fazer o upload!<br>
                    </div>';
                
            }else{
                //VERIFICAR SE A EXTENSÃO É PERMITIDA
                if(in_array($extensao, $permitido))//Verifica se dentro do array declarado em $permitido contém a extensão do arquivo selecionado para upload
                {
                    //echo "Permitido";
                    $pasta = "imagens/";//associa um nome para uma nova pasta "imagens"
                    if(!is_dir($pasta)){ //verifica se a pasta criada acima não existe
                        mkdir($pasta, 0755);//cria a pasta com o nome atribuído à variável $pasta que é "imagens" e o argumento 0755 significa "Tudo para o proprietario, leitura e execucao para o grupo do prop chmod".
                    }
                    $tmp = $_FILES['arquivo']['tmp_name'];//Atribui o nome temporário do arquivo no servidor à uma variável
                    $novoNome = uniqid().".$extensao";//gera uma variável com a concatenção de um id único obtido através da função uniqid() com a extensão do arquivo.

                    if(move_uploaded_file($tmp,$pasta.$novoNome)){
                        //verifica se o arquivo com o nome temporário e o caminho completo para onde o arquivo vai foi enviado através da função move_uploaded_file
                       echo '<div class="alert alert-success" role="alert">
                                Upload realizado com sucesso!<br>
                            </div>';
                    }else{
                        echo '<div class="alert alert-danger" role="alert">
                             Erro: Não foi possível fazer upload!<br>
                            </div>';
                    }
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                             Extensão ('.$extensao.') não permitida<br>
                            </div>';
                }
            }
        }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>