<?php

spl_autoload_register(function($class) {
    require_once  $class . '.php';
    var_dump($class);
});

$carro = new DelRey();
$carro->acelerar(80);
?>