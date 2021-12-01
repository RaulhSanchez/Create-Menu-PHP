<?php

require_once "../databaseConnection.php";


function getAllDishes(): array{
    $result = $GLOBALS["mysqli"]->query("SELECT * FROM Dish ");
    $fila = $result->fetch_all();
    return $fila;
}