<?php

class Catalogue{

    private $movies =[];

    public function getMovies(){
      return $this->movies;
    }
    public function setMovies($movies) {
      $this->movies = $movies;
    }
    public function addMovie($movie){
      $this->movies += [$movie->getName() => $movie->getRevenue()];
    }
}


class Movie {

    private $name;
    private $revenue;

    public function setName($name) {
      $this->name = $name;
    }
    public function setRevenue($revenue) {
      $this->revenue = $revenue;
    }
    public function getName() {
      return $this->name;
    }
    public function getRevenue() {
      return $this->revenue;
    }
}


$movie = new Movie;
$movie->setName($_POST['movie']);
$movie->setRevenue($_POST['revenue']);
$catalogue = new Catalogue;

session_start();

 

if (!isset($_SESSION['film'])) {
  $catalogue->addMovie($movie);
  $_SESSION['film'] = $catalogue->getMovies();
} else {
  $catalogue->setMovies($_SESSION['film']);
  $catalogue->addMovie($movie);

  $_SESSION['film'] = $catalogue->getMovies();
}

 

?>

 

<html>

<body>

<h1>Hello </h1>

 

<h2> other movies and their revenue </h2>

 

<?php

 

foreach ($catalogue->getMovies() as $movieKey => $movieValue){

echo "<p>" ."the movie ". $movieKey . " made £ " . $movieValue . " at the cinema". "</p>";

}

 

echo array_sum($catalogue->getMovies());

echo ("<br>");

echo array_search(max($catalogue->getMovies()), $catalogue->getMovies());

?>

