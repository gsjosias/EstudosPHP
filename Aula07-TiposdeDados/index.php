<?php 

/*
TIPOS DE DADOS
String,[palavras]
Integer,[Inteiro qualquer n não decimal]
Float,[Decimal números decimais]
Boolean,[Booleano True e False]
Array,[Matriz]
Object,[Objeto]
NULL [Nulo]
 */

//STRING
$exemplo1 = "Dimitri";
//INTEGER
$exemplo2 = 345;
$exemplo_2 = -2;
var_dump($exemplo_2);//Revela o tipo da variável e o seu conteúdo/valor
//FLOAT
$exemplo3 = 3.5;
//BOOLEAN
$Estudando_PHP = true;
//ARRAY
$carros = array("Fusca", "Brasília", "Chevette");
var_dump($carros);
//OBJECT
class carro { //Criação de uma classe para o uso de um objeto derivado da mesma
    public $cor; //Declaração de propriedades
    public $modelo;
    public function __construct($cor, $modelo){ //Declaração do método construtor da classe com os parâmetros da classe
        $this->cor = $cor; //Atribuindo os parâmetros recebidos aos atributos
        $this->modelo = $modelo;
    }
    public function mensagem(){ //Declaração de uma função
        return "O carro é $this->cor e o modelo é $this->modelo"; 
    }
}

$carro1 = new carro("Branco", "Fusca"); //Instanciando um objeto
$carro2 = new carro("Vermelho", "Ferrari");
echo $carro1->mensagem(); //Incovando a função membro(método) da classe através do objeto
echo $carro2->mensagem();
echo $carro1->cor;
echo $carro1->modelo;
echo $carro2->cor;
echo $carro2->modelo;

?>

//NULL
$x = Null; //Ocupando variável com "nada"