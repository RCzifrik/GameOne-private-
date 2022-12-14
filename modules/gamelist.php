<?php

function getGamelist():array
{
    $request = $_SERVER['REQUEST_URI'];
    $params = explode("/", $request);
    $chosenCategory = $params[1];
    $title = "GameOne";
    global $pdo;
    try{
        $games= $pdo->query('SELECT * FROM `game` WHERE genre_id = ' . $chosenCategory)->fetchAll(PDO::FETCH_CLASS, 'game');
        return $games;
    } catch (PDOException $e){
        die("error: " . $e->getMessage());
    }
}

function getGame(int $id):array
{

}
