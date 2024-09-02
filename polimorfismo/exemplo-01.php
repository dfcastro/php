<?php

    abstract class Animal{

        public function falar()
        {
            return "Som";
        }

        public function mover()
        {
            return "Anda";
        }
    }

    class Cachorro extends Animal{

        public function falar()
        {
            return "late";
        }


    }

    class Gato extends Animal{

        public function falar()
        {
            return "mia";
        }

       
    }

    class Passaro extends Animal{

        public function falar()
        {
            return "canta";
        }

        public function mover()
        {
            return "voa e ". parent::mover();
        }
    }



    $pluto = new Cachorro();

    echo $pluto->falar(). "<br/>";

    echo $pluto->mover(). "<br/>";

    $garfield = new Gato();

    echo $garfield->falar(). "<br/>";

    echo $garfield->mover(). "<br/>";

    $p = new Passaro();

    echo $p->falar(). "<br/>";

    echo $p->mover(). "<br/>";
?>