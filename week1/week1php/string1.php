<?php
  echo strlen ("Humpty dumpty sat on the wall");

  
  echo str_word_count("Humpty dumpty sat on the wall");   

  echo strpos("Humpty dumpty sat on the wall","sat");

  //Replace the word 'wall' with 'fence' in "Humpty dumpty sat on the wall"
  echo str_replace("wall", "fence", "Humpty dumpty sat on the wall");

   //Remove all - chars from either side of the phrase "--Humpty dumpty sat on the wall---"

  echo trim("--Humpty dumpty sat on the wall---", "-");

   //Echo the phrase "Humpty dumpty sat on the wall" in all upper case letters

  echo strtoupper("Humpty dumpty sat on the wall");

  //1. Check to see if 7756 is an integer number
  
  echo is_int(7756);

  echo is_int(89.34);

  echo is_float(89.34);

  //Add together the string version of numbers "245" + "77"
    echo "245" + "77";
?>