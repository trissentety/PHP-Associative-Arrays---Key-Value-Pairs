<?php
//Make an associative key value pair array in PHP

//Create array
$Animal_Foods = array("Horse" => "Grass", "Bird" => "Worm");

//Find value
$Animal_Foods["Horse"];

//New value for key
$Animal_Foods["Bird"] = "Nut";

//All keys in Animal_Foods. Cycle through all keys to avoid out of index error
$keys = array_keys($Animal_Foods);
foreach ($keys as $key) {
    echo " {$key} <br>";
}

//All values in Animal_Foods
$values = array_values($Animal_Foods);
foreach ($values as $value) {
    echo " {$key} <br>";
}

//Both Keys and values
foreach ($Animal_Foods as $key => $value) {
    echo "{$key} = {$value} <br>";
}
