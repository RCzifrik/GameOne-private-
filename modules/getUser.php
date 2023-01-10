<?php

function getUsers(): array
{
    global $pdo;
    try {
        $user = $pdo->query('SELECT * FROM user')->fetchAll(PDO::FETCH_CLASS, 'User');
        return $user;
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
}

function getUser(int $id): array
{

}
