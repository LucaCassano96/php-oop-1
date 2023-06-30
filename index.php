<?php

class Movie{

    public $title;
    public $genre;
    public $director;

    public function __construct( $title, $genre, $director){
        $this -> title = $title;
        $this -> genre = $genre;
        $this -> director = $director;
    }

    public function getMovie(){
        return $this -> title . " " . $this -> genre. " " . $this -> director;
    }

}

$movie1 = new Movie('Inception','science fiction','Christopher Nolan');
/* $movie1 -> title = 'Inception';
$movie1 -> genre = 'science fiction';
$movie1 -> director = 'Christopher Nolan'; */


$movie2 = new Movie('The Gladiator','historical', 'Ridley Scott');
/* $movie2 -> title = 'The Gladiator';
$movie2 -> genre = 'historical';
$movie2 -> director = 'Ridley Scott'; */

echo $movie1 -> getMovie();

echo "<br></br>";

echo $movie2 -> getMovie();