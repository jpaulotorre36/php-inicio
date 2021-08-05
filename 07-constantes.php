<?php

//constantes LETRAS MAIUSCULAS
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.71);
define("TIMES", ['vasco', 'botafogo', 'fluminense']);


var_dump(NOME);


function exibeNome(){
	echo NOME;
}

echo NOME;
echo "<hr>";
echo IDADE , ALTURA;

echo "<br>";

echo 'Meu nome é '.NOME.' , minha idade '.IDADE.'.';

echo "<BR>";

echo TIMES[1];
echo "<BR>";
echo "<BR>";
echo "<BR>";

exibeNome();










