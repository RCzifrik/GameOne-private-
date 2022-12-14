<?php

function getDetailGames():array
{
    $request = $_SERVER['REQUEST_URI'];
    $params = explode("/", $request);
    $chosenGame = urldecode($params[1]);
    $title = "GameOne";
    echo "$chosenGame";
    global $pdo;
    try{
        $detailGame= $pdo->query('SELECT * FROM game WHERE name = "' . $chosenGame . '"')->fetchAll(PDO::FETCH_CLASS, 'game');
        return $detailGame;
    } catch (PDOException $e){
        die("error: " . $e->getMessage());
    }
}

function getDetailGame(int $id):array
{

}
