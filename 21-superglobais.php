<?php

//Superglobais
/*
$GLOBALS
$_SERVER
$_REQUEST
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

$x = 10;

$y = 15;
function soma(){
	echo $GLOBALS["x"] + $GLOBALS["y"];

}

soma();

echo "<hr>";


ECHO $_SERVER["PHP_SELF"]. "<br>";
echo $_SERVER["SERVER_NAME"]. "<br>";
echo $SERVER["SERVER_"]

