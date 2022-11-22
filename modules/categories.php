<?php

function getCategories():array
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM category')->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categories;
}

function getCategoryName(int $id):string
{

}
