<?php
class Persona {

private $nome;
private $cognome;

  // Methods
 function persona($nome,$cognome) {
    $this->nome = $nome;
    $this->cognome = $cognome;
}

function set_nome($nome) {
    $this->nome = $nome;
}
function get_nome() {
    return $this->nome;
}
function set_cognome($cognome) {
    $this->cognome = $cognome;
}
function get_cognome() {
    return $this->cognome;
}
function stampa(){
    echo "{$this->nome} {$this->cognome}";
}
}
?>