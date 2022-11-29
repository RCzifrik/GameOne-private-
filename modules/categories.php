<?php

function getCategories():array
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM genre')->fetchAll(PDO::FETCH_CLASS, 'Genre');
    return $categories;
}

function getCategory(int $id):array
{

}
