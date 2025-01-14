<?php

    class Carro{

        private $modelo;
        private $motor;
        private $ano;


        public function getModelo(){

            return $this->modelo;
        }

        public function setModelo($novoModelo){

            $this->modelo = $novoModelo;
        }

        public function getMotor():float{

            return $this->motor;
        }
        public function setMotor($novoMotor){

            $this->motor = $novoMotor;
        }
        public function getAno():int{

            return $this->ano;
        }

        public function setAno($novoAno){

            $this->ano = $novoAno;
        }

        public function exibir(){

            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }
    }
$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor(1.6);
$gol->setAno(2000);

 var_dump($gol->exibir());


?>