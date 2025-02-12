<?php
require_once('Persona.php');
class Studente {

    private $matricola;
    
      // Methods
     function studente($nome,$cognome,$matricola) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->matricola = $matricola;
    }
    
    function set_matricola($matricola) {
        $this->matricola = $matricola;
    }
    function get_matricola() {
        return $this->matricola;
    }
    function stampa(){
        echo "{$this->nome} {$this->cognome} {$this->matricola}";
    }
    }

?>