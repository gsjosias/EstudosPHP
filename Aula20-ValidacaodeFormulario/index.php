<?php
//SETTANDO AS VARIÁVEIS DE ERRO COMO "VAZIAS" PARA EVITAR QUE AS CONDICIONAIS SEJAM ACIONADAS ANTES DO PREENCHIMENTO DOS CAMPOS
$erroNome = "";
$erroEmail = "";
$erroSenha = "";
$erroRepeteSenha = "";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //VERIFICAR SE ESTÁ VAZIO
    if(empty($_POST['nome'])){
        $erroNome = "Por favor, preencha com um nome";
    }else{
      //PEGAR O VALOR VINDO DO POST E "LIMPAR"
      $nome = limpaPost($_POST['nome']);//Basicamente o que está dentro de [] está dizendo que aceita letras minúsculas e maiúsculas de A até Z, apóstofre' e espaços.
      //VERIFICAR SE TEM SOMENTE LETRAS
      if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
        $erroNome = "Apenas aceitamos letras e espaços em branco.";
      }
    }
  }
  if(empty($_POST['email'])){
    $erroEmail = "Por favor, informe um e-mail";
  }else{
    $email = limpaPost($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $erroEmail = "E-mail inválido";
    }
  }
  if(empty($_POST['senha'])){
    $erroSenha = "Por favor, informe uma senha.";
  }else{
    $senha = limpaPost($_POST['senha']);
    if(strlen($senha)<6){
      $erroSenha = "A senha precisa ter no mínimo 6 dígitos.";
    }
  }
   if(empty($_POST['repete_senha'])){
    $erroRepeteSenha = "Por favor, informe a repetição senha.";
  }else{
    $repete_senha = limpaPost($_POST['repete_senha']);
    if($repete_senha !== $senha){
      $erroRepeteSenha = "As senhas precisam ser iguais.";
    }
  }
  //APÓS TODOAS AS VERIFICAÇÕES, EFETUTAR O REDIRECIONAMENTO PARA A PÁGINA/ARQUIVO MENCIONADO
  if(($erroNome=="")&&($erroEmail=="")&&($erroSenha=="")&&($erroRepeteSenha=="")){
    header('Location: obrigado.php');
  }
  //EFETUANDO OUTRAS VERIFICAÇÕES NA VARIÁVEL
  function limpaPost($valor){
    $valor = trim($valor);
    $valor = stripcslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <main>
    <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

     <form method="post">

        <!-- NOME COMPLETO -->
        <label> Nome Completo </label>
        <input type="text" name="nome" placeholder="Digite seu nome"<?php if(!empty($erroNome)){echo "class = 'invalido'";}?> <?php if (isset($_POST['nome'])){echo "value='".$_POST['nome']."'";}?>  required> <!--Primeiro if verifica se o erro não está vazio e aplica o valor inválido à class, o segundo faz com que o valor permaneça no campo para que possa ser verificado pelo usuário.-->
        <br><span class="erro"><?php echo $erroNome;?></span>

        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" name="email" placeholder="email@provedor.com" <?php if(!empty($erroEmail)){echo "class = 'invalido'";}?><?php if (isset($_POST['email'])){echo "value='".$_POST['email']."'";}?>  required>
        <br><span class="erro"><?php echo $erroEmail;?></span>

        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" name="senha" placeholder="Digite uma senha" <?php if(!empty($erroSenha)){echo "class = 'invalido'";}?> <?php if (isset($_POST['senha'])){echo "value='".$_POST['senha']."'";}?> required>
        <br><span class="erro"><?php echo $erroSenha;?></span>

        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" name="repete_senha"  placeholder="Repita a senha" <?php if(!empty($erroRepeteSenha)){echo "class = 'invalido'";}?> <?php if (isset($_POST['repete_senha'])){echo "value='".$_POST['repete_senha']."'";}?>required  >
        <br><span class="erro"><?php echo $erroRepeteSenha;?></span>

        <button type="submit"> Enviar Formulário </button>

      </form>
    </main>
</body>
</html>