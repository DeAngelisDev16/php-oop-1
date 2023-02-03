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
        $this->genre = $_genre;
    }

    //capacità condivisa:
    public function getMovieDuration()
    {
        return $this->duration;
    }
}

$batman = new Movie('batman', 125, 'action');
$toyStory = new Movie('Toy Story', 75, 'animation');

//var_dump($batman);
//var_dump($toyStory);
