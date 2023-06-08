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
            return "En este instante épico, el Jedi canaliza la Fuerza, convirtiéndose en un escudo de luz en medio del caos para proteger a la galaxia.";
        }
    
        public function entrenar() {
            $fuerza = $this->getFuerza() + 10; 
            return $fuerza;
        }
    }
    
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
        }
    }

    
    
?>