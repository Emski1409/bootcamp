<?php
  session_start();

  $movie = $_POST['movie'];
  $revenue = $_POST['revenue'];

  if (!isset($_SESSION['film'])) {
    $movies = [$movie => $revenue];
    $_SESSION['film'] = $movies;

  }
  else {
      $movies =$_SESSION['film'];
      $movies += [$movie => $revenue];
      $_SESSION['film'] = $movies;
  }

?>

<html>
    <body>
      <h1>Hello </h1>

    
      <h2> other movies and their revenue </h2>

      <?php

    foreach ($movies as $movieKey => $movieValue){
      echo "<p>" ."the movie ". $movieKey . " made £ " . $movieValue . " at the cinema". "</p>";
    }

   echo array_sum($movies);
   echo ("<br>");
   echo array_search(max($movies), $movies);
   
?>