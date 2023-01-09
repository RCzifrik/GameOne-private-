<?php

function getReviews(): array
{
    global $pdo;
    try {
        $review = $pdo->query('SELECT * FROM review')->fetchAll(PDO::FETCH_CLASS, 'Review');
        return $review;
    } catch (PDOException $e) {
        die("error: " . $e->getMessage());
    }
}

function getReview(int $id): array
{

}