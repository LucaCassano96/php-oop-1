<?php

class Movie{

    public $title;
    public $genres;
    public $director;

    public function __construct( $title, $genres, $director){
        $this -> title = $title;
        $this -> genres = $genres;
        $this -> director = $director;
    }

    public function getMovie(){

        $listOfGenres = implode(" ",  $this -> genres);

        return $this -> title . " " . $listOfGenres . " " . $this -> director;
    }

}

$movie1 = new Movie('Inception',["action", "sience fiction", "adventure"],'Christopher Nolan');
/* $movie1 -> title = 'Inception';
$movie1 -> genres = 'science fiction';
$movie1 -> director = 'Christopher Nolan'; */


$movie2 = new Movie('Gladiator',["action", "drama", "adventure"], 'Ridley Scott');
/* $movie2 -> title = 'The Gladiator';
$movie2 -> genres = 'historical';
$movie2 -> director = 'Ridley Scott'; */

echo $movie1 -> getMovie();

echo "<br></br>";

echo $movie2 -> getMovie();