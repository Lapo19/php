<?php
require_once('Cane.php');
require_once('Gatto.php');

echo"<h1>Versi:</h1>";

$cane1 = new Cane;
$gatto = new Gatto;
$cane2 = new Cane;
echo $cane1 -> verso();
echo $gatto -> verso();
echo $cane2 -> verso();

?>