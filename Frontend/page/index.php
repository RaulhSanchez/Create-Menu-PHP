<?php
require_once "../../Backend/databaseConnection.php";

$dishes = getAllDishes();
var_dump($dishes);

foreach ($dishes as $dish){
    echo $dishes['Titulo'];
}