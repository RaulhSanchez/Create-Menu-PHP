<?php

require_once "../databaseConnection.php";


function getAllDishes(): array{
    $result = $GLOBALS["mysqli"]->query("SELECT * FROM Dish ");
    $platos = $result->fetch_all();
    var_dump($platos);
    return $platos;
}
getAllDishes();
?>