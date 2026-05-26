<?php

require_once "warisan.php";
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? <br>";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
$strawberry->message();