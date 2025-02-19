<?php
class Voti implements JsonSerializable{

    private $materia;
    private $voto;
    private $descrizione;
    
      // Methods
     function voti($materia,$voto,$descrizione) {
        $this->materia = $materia;
        $this->voto = $voto;
        $this->descrizione = $descrizione;
    }
    
    function set_materia($materia) {
        $this->materia = $materia;
    }
    function get_materia() {
        return $this->materia;
    }
    function set_voto($voto) {
        $this->voto = $voto;
    }
    function get_voto() {
        return $this->voto;
    }
    function set_descrizione($descrizione) {
        $this->descrizione = $descrizione;
    }
    function get_descrizione() {
        return $this->descrizione;
    }

    public function jsonSerialize(): array {
        return [
            'materia' => $this->materia,
            'voto' => $this->voto,
            'descrizione' => $this->descrizione
        ];
    }
}

?>