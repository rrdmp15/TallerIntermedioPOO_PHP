<?php
    // Creacion de la clase personaje
    class Personaje{
        private $nombre;
        private $fuerza;

        public function __construct(string $nombre, int $fuerza){
            $this->nombre = $nombre;
            $this->fuerza = $fuerza;
        }

        public function presentarse(){
            return '¡Hola a todos! Soy '.$this->nombre.'.<br> Mi nivel de fuerza es de '.$this->fuerza.' midiclorianos. ¡Que la Fuerza esté con ustedes!<br>';
        }

        
        public function getNombre():string {
            return $this->nombre;
        }

        public function getFuerza():int {
            return $this->fuerza;
        }
    }
    // Instancia de Personaje
    // $skywalker = new Personaje('Luke Skywalker', 800);
    // echo $skywalker->presentarse();

    // Creacion de la Clase Jedi
    class Jedi extends Personaje {
        public function __construct(string $nombre, int $fuerza) {
            parent::__construct($nombre, $fuerza);
        }
    
        public function usarFuerza() {
            return "En este instante épico, el Jedi canaliza la Fuerza, convirtiéndose en un escudo de luz en medio del caos para proteger a la galaxia.<br>";
        }
    
        public function entrenar() {
            $fuerza = $this->getFuerza() + 10;
            return '+10 midiclorianos.<br> Total '.$fuerza.'midiclorianos<br>';
        }
    }

    //Creacion de la clase maestro jedi
    class MaestroJedi extends Jedi 
    {
       public function __construct(string $nombre, int $fuerza) {
           parent::__construct($nombre, $fuerza);
       }

       public function enseñar(){
           $fuerza = $this->getFuerza() + 20; 
           return '+20 midiclorianos.<br> Total '.$fuerza.'midiclorianos<br>';
       }
    }

    $maestro_yoda = new MaestroJedi('Maestro Yoda', 18000);
    echo $maestro_yoda->presentarse();
    echo $maestro_yoda->usarFuerza();
    echo $maestro_yoda->enseñar();

    
    
    //Creacion de la clase Sith

    class Sith extends Personaje {
        public function __construct(string $nombre, int $fuerza) {
            parent::__construct($nombre, $fuerza);
        }
    
        public function usarFuerza() {
            return "En el abismo de la maldad, el Sith desata la Fuerza para conquistar la galaxia.";
        }
    
        public function corromper() {
            $fuerza = $this->getFuerza() - 5; 
            return $fuerza;
            return '-5 midiclorianos.<br> Total '.$fuerza.'midiclorianos<br>';
        }
    }


    
?>