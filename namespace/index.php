<?php

    require_once ("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Djalma");
    $cad->setEmail("email@gmail.com");
    $cad->setSenha("123456");

    $cad->registrarVenda();
?>