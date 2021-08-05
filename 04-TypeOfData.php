<?php
//dados escalares

$nome = "Olá Mundo 1233dadvfvb";
var_dump($nome);

echo "<br> <br>";
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";

endif;
echo "<hr>";

$idade = 27;
var_dump($idade);

echo " <br> <br>";

if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é ";

endif;
echo "<hr>";

$admin = true;
var_dump($admin);

echo "<hr>";

/////compostos

$car = array("gol", "uno", "camaro", 12, 20.6, true);
var_dump($car);
echo " <br> <br>";
if(is_array($car)):
	echo "É um array";
else:
	echo "Não é ";
endif;

echo "<hr>";

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this ->$nome = $nome;
	}
}

$Cliente = new Cliente();
$Cliente->atribuirNome("João Paulo");
var_dump($Cliente);

echo " <br> <br>";

if(is_object($Cliente)):
	echo "É um object";
else:
	echo "Não é ";
endif;
echo "<hr>";

//Null
$cidade = Null;
var_dump($cidade);

//resource












