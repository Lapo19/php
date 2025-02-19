<?php
header("Content-Type: application/json");
require_once('Alunno.php');

$voti =[
    new Voti("Matematica",9,"un errore"),
    new Voti("Storia",7,"poteva fare meglio")
];

$indirizzo = new Indirizzo("via giacomo zanella",34,50124);

$alunni=[
    new Alunno("Lapo","Vanni",18,$voti,$indirizzo,true),
    new Alunno("Franco","Rossi",23,$voti,$indirizzo,false)
];

$alunni_serializzati = json_encode("alunni.json");
$alunni2 =json_decode($alunni_serializzati, true);

$alunni = [];
foreach($alunni2 as $a)
{
    $var = new Alunno($a["nome"],$a["cognome"],$a["eta"],"","",true);
    array_push($alunni,$var);
} 

echo json_encode($alunni);

?>
