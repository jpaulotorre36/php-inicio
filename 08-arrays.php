<?php

//Arrays
$carro1 = array(1=>"bmw", 2=>"veloster", 3=>"hilux");

//exibir array
//print_r($carro1);

//echo $carro1[1];

$carro1[] = "amarok";

$carro1[10] = "camaro";

print_r($carro1);

echo "<hr>";

$moto = array();
$moto[] = "yamaha";
$moto[] = "honda";
print_r($moto);

echo "<hr>";

$clientes = ["rodrigo", "felipe", "bia"];

print_r($clientes);
echo "<hr>";

//count quantidae do array
//echo count($carro1);

$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";
echo "<hr>";

//foreach
//exibe cada valor do array carro1
foreach ($carro1 as $valor) {
	echo $valor. "<br><hr>";
}

echo "<hr>";
echo "<hr>";

foreach ($clientes as $valor) {
	echo $valor. "<br><hr>";
}
echo "<hr>";
echo "<hr>";

//Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
$pessoa["cidade"] = "itabuna";
echo $pessoa["nome"]; 
print_r($pessoa);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
foreach ($pessoa as $indice => $valor) {
	echo $indice. ":" .$valor. "<br>";
	
}

echo "<hr>";
echo "<hr>";

//array multidimencional 
$times = array("cariocas"=> array("campeão"=>"vasco", "vice"=> "botafogo"), "paulistas"=> array("são paulo", "palmeiras"));
print_r($times);

echo "<hr>";
echo "<hr>";
//echo $times["cariocas"][0];
echo "<hr>";
echo "<hr>";
foreach($times["cariocas"] as $indice => $valor){
	echo $indice. " : " .$valor. "<br>";
}




















