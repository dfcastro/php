<?php

    class Pessoa{
        
        public $nome; //cria atributo

        public function falar(){ //cria matodo

            return "meu nome é ". $this->nome;

        }

    }

    $glaucio = new Pessoa();
    $glaucio->nome = "Daniel";

    echo $glaucio->falar();




?>