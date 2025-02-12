<?php
require_once('Alunno.php');

$alunno1 = new Alunno("Lapo","Vanni","18");
$alunno2 = new Alunno("Franco","Rossi","23");
$alunni=array();
array_push($alunni,$alunno1,$alunno2);

foreach($alunni as $alunno){
    $alunno->stampa(); 
    echo '<br>';
}
?>
