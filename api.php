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
    }
    // Instancia de Personaje
    $skywalker = new Personaje('Luke Skywalker', 800);
    echo $skywalker->presentarse();
?>