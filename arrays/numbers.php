<?php

$numbers = [7, 65, 22, 15, 97, 44, 58, 81, 4, 9];

sort($numbers);
echo (implode(", ", $numbers));

for ($counter = 0; $counter < count($numbers); $counter++) {
  echo "<p>" . $numbers[$counter] . "</p>";
}

echo array_sum($numbers);

$arr_sum = $numbers[4] + $numbers[7];
echo "<br>" . $arr_sum;

$odds = array($numbers);
$even = array($numbers);
foreach($numbers as $val) {
  if($val % 2 == 0) {
      $even[] = $val;
  } else {
      $odds[] = $val;
  }
}

sort($even);
echo (implode(",",$even));

$average = array_sum($numbers) / count($numbers);
echo $average;

//array_pop($numbers);
//echo (implode(", ", $numbers));

$numbers[] = 1000;
for ($counter = 0; $counter < count($numbers); $counter++) {
  echo "<p>" . $numbers[$counter] . "</p>";
}

$product = $numbers[0] * $numbers[9];

$numbers[7] = $product;

echo implode(", ", $numbers);
sort($numbers);

$reversed_array = array_reverse($numbers);

for ($counter = 0; $counter < count($reversed_array); $counter++) {
  echo "<p>" . $reversed_array[$counter] . "</p>";
}
// Replace the 8th number with the product of the 1st and 10th number, and echo it.
// Sort again, then reverse the order of the numbers and display them, each on a new line.

?>
