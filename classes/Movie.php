<?php
class Movie {
    // attributi/proprietà
    public $title;
    public $director;
    public $cover;
    public $cast = [];

    // costruttore
    function __construct($title, $director, $cover = "path-cover-default.jpg") {
        $this->title = $title;
        $this->director = $director;
        $this->cover = $cover;
    }

    // metodi
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setCast($array) {
        if(is_array($array)) {
            // array_merge($this->cast, $array);
            $this->cast = $array;
        } else {
            $this->cast[] = $array;
        }
    }
}

$movie1 = new Movie("Titanic", "James Cameron");
$movie1->setCast(["Leonardo Di Caprio", "Kate Winslet"]);
// $movie1->setCast("Leonardo Di Caprio");
// $movie1->setCast("Kate Winslet");

echo $movie1->cover;

var_dump($movie1);

$movie2 = new Movie("Matrix", "regista", "altra-cover.jpg");
var_dump($movie2);

echo "<br>Classe: " . get_class($movie2);

echo "<br>E' un film? ";
var_dump($movie1 instanceof Movie);
