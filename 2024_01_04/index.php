<?php

//require_once 'Dog.php';
//
//$dog = new Dog('Buddy', 'Golden Retriever', 5);
//
//var_dump($dog);
//
//$dog->name = 'Max';
//
//echo "<br>";
//
//var_dump($dog);
//
////$dog->breed = 'Poodle';
////
////var_dump($dog);
//
//echo "<br>";
//
////$dog->age = 6;
////
////var_dump($dog);
//
//$dog->growOlder();
//var_dump($dog);

require_once 'Database.php';

$database = new Database('127.0.0.1', 'sprawdzian_node_v5', 'root', 'root');

//var_dump($database->getCars());

//var_dump($database->getCar(1));

$car1 = $database->getCar(1);

if ($car1) {
    echo $car1->getManufacturer() . ' ' . $car1->getModel();
} else {
    echo 'Car not found';
}