<?php

//while & Do while

$cont = 1;
$cont = -1;
while ($cont <= 10):
	echo "Contador é  $cont <br>";
	$cont ++;
endwhile;

while ($cont >= -10):
	echo "Contador é  $cont <br>";
	$cont --;
endwhile;

echo "<hr>";

$cont = 1;

do {
	echo "contador é $cont <br>";
	$cont ++;
} while ($cont <= 20);
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

for ($contador = 0; $contador <=10; $contador ++):
	echo "O contador é $contador <br>";
endfor;
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
for ($contador = 0; $contador <=10; $contador ++):
	echo " 8 x $contador = ".($contador*8)." <br>";
endfor;
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

$cores = array("verde", "vermelho", "preto", "amarelo");

foreach ($cores as $indice => $valor) {
	echo $indice. " - ".$valor. "<br>";
}


