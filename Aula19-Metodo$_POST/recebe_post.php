<?php 
        if(isset($_POST['nome'])&& isset($_POST['idade'])){
            $nome = limpapost($_POST['nome'])
            $idade = limpapost($_POST['idade'])
            echo "<h2>Nome: $nome<br>Idade: $idade</h2>";
        }

        function limpapost($valor){
            $valor = trim($valor);//Remove espaços em branco e outros caracteres do início e do final da string
            $valor = stripslashes($valor);//Remove as barras da string
            $valor = htmlspecialchars($valor);//retira caracteres especiais do html 
            return $valor;
        }
    ?>