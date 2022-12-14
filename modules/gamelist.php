<?php

function getGamelist():array
{
    $request = $_SERVER['REQUEST_URI'];
    $params = explode("/", $request);
    $chosenCategory = $params[1];
    $title = "GameOne";
    global $pdo;
    $games= $pdo->query('SELECT * FROM game WHERE id =' . $chosenCategory)->fetchAll(PDO::FETCH_CLASS, 'Game');
    return $games;
}

function getGame(int $id):array

{

}
