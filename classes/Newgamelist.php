<?php

class Newgamelist
{
    public $id;
    public $genre_id;
    public $game_id;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}