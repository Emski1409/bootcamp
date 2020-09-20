<?php

    $colour = "red";
    $number = 1;

    if ( $number == "1") {
      echo "<p> Number is " . $number. "</p>";
    } 
    else {
      echo "<p> This is not number one, the number is  " . $number. "</p>";
    }

    if ( $colour == "red") {
      echo "<p> Your colour is " . $colour.  "</p>";
    } 
    else {
      echo "<p> This is not red, the colour is  " . $colour. "</p>";
    }

    if ( $number == "1" && $colour == "red") {
      echo "<p> Your Number is " . $number. " and your colour is ". $colour. "</p>";
    } 
    else {
      echo "<p> This is not your number and colour  " . "</p>";
    }

    if ( $number == "5 // 6 ") {
      echo "<p> Number is " . $number .  "</p>";
    } 
    else {
      echo "<p> This is not number five or six, the number is  " . $number. "</p>";
    }
    




?>