<?php


//codicionais

$num = 0;

if ($num == 10):
	echo "É igual a 10";
elseif ($num <- 9):
	echo "É menor que 9";
else:
	echo "É diferente de 10";
endif;


echo "<hr>";

$media = 7;
//operador ternairo
echo ($media >= 7) ? "Aprovado" : "Reprovado";

echo "<hr>";
echo "<hr>";
echo "<hr>";


//switch and case


$cor = "vermelho";

switch ($cor) {
	case "vermelho":
		echo "sua cor é vermelha";
		break;
	case "verde":
		echo "sua cor é verde";
		break;
	
	default:
		echo "Não tem cor";
		break;
}

echo "<hr>";
echo "<hr>";
echo "<hr>";

$a = 20;
$b = 12;


echo $a * $b;
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo $a;
echo "<hr>";
echo "<hr>";
echo "<hr>";


echo ++$a;
echo "<hr>";
echo "<hr>";
echo "<hr>";

echo $a;
echo "<hr>";
echo "<hr>";
echo "<hr>";

$a1 = 10;

echo $a1 + 5;






