<?php



class Gamelist
{
    public $id;
    public $genre_id;
    public $game_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->genre_id, 'integer');
        settype($this->game_id, 'integer');
    }
}