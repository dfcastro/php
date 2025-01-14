<?php

$nome = "Hcode";
$site= "www.hcodecom.br";

$ano = 1990;
$salario = 55000.00;
$bloqueado = false;

$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];


$nascimento = new DateTime();
echo "data ". $nascimento;
//var_dump($nascimento);

$arquivo = fopen("exemplo-02.php", "r");

//var_dump($arquivo);
?>