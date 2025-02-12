<?php
require_once('Veicolo.php');
class Automobile {

    private $modello;
    
      // Methods
     function automobile($marca,$anno,$modello) {
        $this->marca = $marca;
        $this->anno = $anno;
        $this->modello = $modello;
    }
    
    function set_modello($modello) {
        $this->modello = $modello;
    }
    function get_modello() {
        return $this->modello;
    }
    function stampa(){
        echo "{$this->marca} {$this->anno} {$this->modello}";
    }
    }

?>