<?php

define ("TEXT", " has been added to the system. ");

function addName($firstName, $secondName,$age = 35){
  $html = " ";
  $fullName = $firstName. " " . $secondName;
  if ($age <= 20){
      $colour = "blue";
  } 
  else if ($age > 20 && $age < 30) {
      $colour = "green";
  }
  else if ( $age >30 && $age <=40){
      $colour = "red";
  }
  else {
          $colour = "brown";
  }
  return $html ="<p><span style = 'color: " . $colour.  "'>" . $fullName. "</span>" . TEXT . "</p>";
}
  
  
  echo addName("emma", "terry", 33);
  echo addName("Dr", "Jones", 21);
  echo addName("Mr", "Bloom", 13);
  echo addName("Mr", "Jones", 45);

?>