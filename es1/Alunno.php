<?php
require_once('Voti.php');
require_once('Indirizzo.php');
class Alunno implements JsonSerializable{

private $nome;
private $cognome;
private $eta;
private $voti =[];
private $indirizzo;
private $promosso;

  // Methods
 function alunno($nome,$cognome,$eta,$voti,$indirizzo,$promosso) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->eta = $eta;
    $this->voti = $voti;
    $this->indirizzo = $indirizzo;
    $this->promosso = $promosso;

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
function set_eta($eta) {
    $this->eta = $eta;
}
function get_eta() {
    return $this->eta;
}

public function jsonSerialize(): array {
    return [
        'nome' => $this->nome,
        'cognome' => $this->cognome,
        'eta' => $this->eta,
        'mat'=> $this->voti,
        'ind'=> $this->indirizzo,
        'esito'=> $this->promosso
    ];
}

function stampa(){
    echo "{$this->nome} {$this->cognome} {$this->eta}";
}
}
?>