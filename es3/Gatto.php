<?php
require_once('Animale.php');

class Gatto extends Animale{
    public function verso() : string {
        return "MIAO <br>";
      }
}
?>