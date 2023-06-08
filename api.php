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

        public function recibirDano(){
            $this->fuerza -= 5;
        }
        
        public function getNombre():string {
            return $this->nombre;
        }

        public function getFuerza():int {
            return $this->fuerza;
        }
    }

    // Creacion de la Clase Jedi
    class Jedi extends Personaje {
        public function __construct(string $nombre, int $fuerza) {
            parent::__construct($nombre, $fuerza);
        }
    
        public function usarFuerza(Personaje $oponente) {
            $oponente->recibirDano();
            return 'En el momento épico, el Jedi desata un poderoso golpe, infligiendo un daño significativo de -5 midicloriones a su oponente. Este último queda herido con '.$oponente->getFuerza().' midicloriones de fuerza, pero aún muestra resistencia, con su vida disminuida. Mientras tanto, el Jedi permanece incólume con '.$this->getFuerza().'midicloriones de fuerza, preparado para seguir protegiendo la galaxia en medio de esta intensa batalla.<br>';
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

    
    
    //Creacion de la clase Sith

    class Sith extends Personaje {
        public function __construct(string $nombre, int $fuerza) {
            parent::__construct($nombre, $fuerza);
        }
    
        public function usarFuerza(Personaje $oponente) {
            $oponente->recibirDano();
            return 'En el abismo de la maldad, el Sith desata un devastador ataque, infligiendo un daño implacable de -5 midicloriones a su oponente. Este último se encuentra debilitado, con su vida al borde del abismo con solo '.$oponente->getFuerza().' midicloriones de fuerza. Mientras tanto, el Sith se regocija en su poder, listo para continuar su marcha hacia la conquista de la galaxia, quedando con '.$this->getFuerza().' midicloriones de fuerza.<br>';
        }
    
        public function corromper() {
            $fuerza = $this->getFuerza() - 5; 
            return $fuerza;
            return '-5 midiclorianos.<br> Total '.$fuerza.'midiclorianos<br>';
        }
    }

    //Batalla

    function batalla(Personaje $personaje1, Personaje $personaje2) {
        echo "<h1>Batalla</h1>";
        echo "<h2>".$personaje1->getNombre()." vs. ".$personaje2->getNombre()."</h2>";
        
        echo "<p>".$personaje1->getNombre()." se presenta:</p>";
        echo "<p>".$personaje1->presentarse()."</p>";
        
        echo "<p>".$personaje2->getNombre()." se presenta:</p>";
        echo "<p>".$personaje2->presentarse()."</p>";
        
        echo "<p>¡Comienza la batalla!</p>";
        
        while ($personaje1->getFuerza() > 0 && $personaje2->getFuerza() > 0) {
            echo "<hr>";
            echo "<p>".$personaje1->getNombre()." ataca a ".$personaje2->getNombre()."!</p>";
            echo "<p>".$personaje1->usarFuerza($personaje2)."</p>";
            
            echo "<p>".$personaje2->getNombre()." ataca a ".$personaje1->getNombre()."!</p>";
            echo "<p>".$personaje2->usarFuerza($personaje1)."</p>";
        }
        
        echo "<h2>Resultado de la batalla</h2>";
        
        if ($personaje1->getFuerza() <= 0 && $personaje2->getFuerza() <= 0) {
            echo "<p>¡La batalla terminó en empate!</p>";
        } elseif ($personaje1->getFuerza() <= 0) {
            echo "<p>".$personaje2->getNombre()." es el ganador de la batalla.</p>";
        } else {
            echo "<p>".$personaje1->getNombre()." es el ganador de la batalla.</p>";
        }
    }
    
    $yoda = new MaestroJedi('Maestro Yoda', 180);
    $darthVader = new Sith('Darth Vader', 100);
    
    batalla($yoda, $darthVader);
    

?>