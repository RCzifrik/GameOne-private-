<?php

function getGames():array {
    global $pdo;
    $games = $pdo->query('SELECT * FROM game')->fetchAll(PDO::FETCH_CLASS, 'Game');
    return $games;
}
function getGamelist(int $id):array
{

}
