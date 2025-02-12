<?php
header("Content-Type: application/json");
require_once('Alunno.php');


$alunni=[
    new Alunno("Lapo","Vanni",18),
    new Alunno("Franco","Rossi",23)
];

/*foreach($alunni as $alunno){
    $alunno->stampa(); 
    echo '<br>';
}*/
echo json_encode($alunni);
?>
