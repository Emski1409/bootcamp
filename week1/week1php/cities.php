<?php
  $cities = ["cardiff" => 33, "Newport" => 55, "Berlin" => 76, "Dublin" => 45, "London" => 98];

  foreach ($cities as $cityKey => $cityValue){
    echo "<p>" . $cityKey . " is " . $cityValue . " population </p>";
  }
    echo max($cities);
    echo ("<br>");
    
    $average= array_sum($cities) / count($cities);
    echo $average;

    $cities += ["Munich" => 600];

    foreach ($cities as $cityKey => $cityValue){
      echo "<p>" . $cityKey . " is " . $cityValue . " population </p>";
    }

?>