<?php

ini_set('display_errors', 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$valor = rand(1, 50);

if($valor ==1 || $valor ==3 || $valor ==5){
	echo"El numero $valor es impar";
}else{
	echo "El numero $valor es par";
}


echo $valor;

?>

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>