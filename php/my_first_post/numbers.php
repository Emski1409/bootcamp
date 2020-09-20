<?php

$numbers = array(7, 65, 22,15, 97, 44, 58, 81, 4, 9);

echo count ($numbers);
echo sort($numbers);
echo rsort($numbers);
echo array_sum($numbers[3],[6]); 

$numbers = array_filter($numbers);
if(count($numbers)) {
    echo $average = array_sum($numbers)/count($numbers);

$total = count($myarray);
<h1>Display all even numbers</h1>
<ul>
<?php for ($i=1; $i < total; $i += 2): ?>
<li>The array element value is <?php echo $myarray[$i]; ?>. </li>
<?php endfor; ?>

</ul>
?>