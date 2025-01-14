<?php

    class Pessoa{

        public $nome ="Rasmus Lerdorf";
        protected $idade =48;
        private $senha = "123456";

        public function verDados(){
            echo $this->nome."<br/>";
            echo $this->idade."<br/>";
            echo $this->senha."<br/>";
        }
    }

    class Programador extends Pessoa{

        public function verDados(){
            echo get_class($this)."<br/>";
            echo $this->nome."<br/>";
            echo $this->idade."<br/>";
            echo $this->senha."<br/>";
        }

    }


    $pessoa1 = new Programador;
    // echo $pessoa1->senha."<br/>";

    $pessoa1->verDados();


?>