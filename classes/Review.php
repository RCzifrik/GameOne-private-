<?php


class Review
{
    public $id;
    public $score;
    public $title;
    public $description;
    public $game_id;
    public $user_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->game_id, 'integer');
        settype($this->user_id, 'integer');
    }
}