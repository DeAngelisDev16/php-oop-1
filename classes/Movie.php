<?php

class Movie
{
    //attributi
    public $name;
    public $duration;
    public $genre;


    //construttore---> Inizializzo una nuova istanza di tipo Movie:
    public function __construct($_name, $_duration, $_genre)
    {
        $this->name = $_name;
        $this->duration = $_duration;
        $this->name = $_genre;
    }
}

$batman = new Movie('batman', 125, 'action');
$toyStory = new Movie('Toy Story', 75, 'animation');
