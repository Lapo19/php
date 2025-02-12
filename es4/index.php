<?php
require_once('Studente.php');

echo"<h1>Studente:</h1>";

$studente1 = new Studente("Lapo","Vanni","01");
$studente2 = new Studente("Franco","Rossi","02");
$Studente=array();
array_push($Studente,$studente1,$studente2);

foreach($Studente as $studente){
    $studente->stampa(); 
    echo '<br>';
}
?>
