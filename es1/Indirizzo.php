<?php
class Indirizzo implements JsonSerializable{

    private $indirizzo;
    private $nCiv;
    private $cap;
    
      // Methods
     function indirizzo($indirizzo,$nCiv,$cap) {
        $this->indirizzo = $indirizzo;
        $this->nCiv = $nCiv;
        $this->cap = $cap;
    }
    
    function set_indirizzo($indirizzo) {
        $this->indirizzo = $indirizzo;
    }
    function get_indirizzo() {
        return $this->indirizzo;
    }
    function set_nCiv($nCiv) {
        $this->nCiv = $nCiv;
    }
    function get_nCiv() {
        return $this->nCiv;
    }
    function set_cap($cap) {
        $this->cap = $cap;
    }
    function get_cap() {
        return $this->cap;
    }

    public function jsonSerialize(): array {
        return [
            'via' => $this->indirizzo,
            'numero civico' => $this->nCiv,
            'cap' => $this->cap
        ];
    }
}

?>