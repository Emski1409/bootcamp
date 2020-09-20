<?php

//echo "<p>Numbers from 1 to 10 are:</p>";

$num = 0;

function IncrementNumber(){
    global $num; 
    $num = $num + 2;
    echo "<p>" . $num . "<p>";
}

//IncrementNumber();


function addNumbers($firstNum, $secondNum){
    $total = $firstNum + $secondNum;
    if( $total > 2) {
      return $total;
    }
    else{
      return 1000;
    
    }
    return "<p>" . $total. "</p>";
}

//addNumbers(6,5);
//addNumbers(64,6);
//addNumbers(62,8);
//addNumbers(8,92);




 $num1 = 1;
 $num2 = 2;
 $num3 = 3;
 $num4 = 4;

 $addedNumbers = addNumbers($num1, $num2);
  echo $addedNumbers;
  

?>