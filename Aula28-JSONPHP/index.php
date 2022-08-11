<?php 
/* JSON - "JavaScript Object Notation"

JSON é basicamente um formato leve de troca de informações/dados entre sistemas

Basicamente consiste em transformar dados como um objeto em uma matriz em texto e o contrário também, transformar um texto em um objeto ou matriz
 
É a forma mais utilizada atualmente para trocar dados entre sistemas.

Embora tenha JavaScript no nome, por que originalmente foi feito pensando em aplicações Javascript, o JSON é um padrão de transmissão de dados, aceito em praticamente TODAS as linguagens atuais, não só Javascript. Isso inclui PHP.

Trocando em miúdos, de uma forma fácil de entender: Podemos dizer que JSON é uma espécie de padrão, um conversor para transmitir dados.

Como funciona?

Toda informação enviada ou recebida entre aplicações SEMPRE precisa ser um texto.

Por isso, todo objeto ou matriz que vai ser enviado primeiro tem que ser transformado em texto.

Quem faz esse trabalho? O JSON.

Uma vez que este texto chegou no seu sistema você vai precisar transformar esse texto em um objeto ou uma matriz.   

No PHP as funções de conversão são:

json_encode()
Converte array/obj em texto, uma string JSON;

json_decode()
Converte um texto JSON em um objeto ou matriz.



$texto = '{
      "cep": "01001-000",
      "logradouro": "Praça da Sé",
      "complemento": "lado ímpar",
      "bairro": "Sé",
      "localidade": "São Paulo",
      "uf": "SP",
      "ibge": "3550308",
      "gia": "1004",
      "ddd": "11",
      "siafi": "7107"
    }';
            

$dados = json_decode($texto, true);//Ao passar o parâmetro "true", o objeto se torna um array;
$dados['Desenvolvedor'] = "Josias";//Ao trabalhar com arrays, é possível acrescentar mais coisas;
var_dump($dados);//A variável "Desenvolvedor" está no array
//echo $dados->cep; Esse método só serve enquanto objeto
echo $dados["cep"];//Essa é a forma de buscar os dados dentro do array formado pelo parâmetro true;

$json = json_encode($dados, JSON_PRETTY_PRINT| JSON_UNESCAPED_UNICODE);//Transforma tudo em um texto(string). 
//O parâmetro JSON_PRETTY_PRINT deixa a exibição do conteúdo do texto mais "organizada".
//O parâmetro JSON_UNESCAPED_UNICODE faz com o resultado da exibição contenha caracteres especiais ao invés de exibir os códigos dos mesmos

echo "<pre>$json</pre>";
 */

$texto = $_POST['texto'];//Apresentou o seguinte erro 'Undefined array key "texto" in...' Porém funcionou. É para receber o nome da chave do array contendo os dados convertidos
$dados = json_decode($texto, true); //Transforma o json em dados e passa o parâmetro true para que ele se torne uma matriz associativa
$dados['Linguagem'] = "Php";//Cria um novo valor e adiciona à chave 
$json = json_encode($dados);//Converte o arquivo novamente em json
echo $json;//Devolve o valor
?>