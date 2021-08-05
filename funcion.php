<?php

//criando

function exibirNome(){
	echo "Meu nome é JP";
}

//() para passar parametro
exibirNome();

echo"<hr>";


function exibirNomes($nome){
	echo "Meu nome é $nome";
}

exibirNomes("Lucrino");



echo"<hr>";
echo"<hr>";
echo"<hr>";


function calcularMedia( $nome, $n1, $n2, $n3){
	$media = ($n1 + $n2 + $n3)/3;
	if ($media >=7):
		echo "$nome foi aprovado com média $media.";
	else: 
		echo "Reprovado";
	endif;

}

calcularMedia("Boi", 3, 5, 1);
echo"<hr>";

calcularMedia("loy", 3, 5, 8);

