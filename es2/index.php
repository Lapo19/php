<?php
require_once('Automobile.php');

echo"<h1>Auto:</h1>";

$auto1 = new Automobile("Dacia","2012","Daster");
$auto2 = new Automobile("Fiat","2019","panda");
$automobili=array();
array_push($automobili,$auto1,$auto2);

foreach($automobili as $auto){
    $auto->stampa(); 
    echo '<br>';
}
?>