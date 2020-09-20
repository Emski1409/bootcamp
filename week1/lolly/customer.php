<?php
require("icelolly.php");


$lolly1 = new Lolly("vanilla", 10);


echo "<p> Lolly 1 flavour: " . $lolly1->getFlavour() . "</p>";
echo "<p> Lolly 1 bites remaining: " . $lolly1->getBitesRemaining() . "</p>";
echo "<p> Lolly 1: Taking bite " . $lolly1->takeBite() . "</p>";
echo "<p> Lolly 1 bites remaining: " . $lolly1->getBitesRemaining() . "</p>";
echo "<p> Lolly 1: Taking another bite " . $lolly1->takeBite() . "</p>";
echo "<p> Lolly 1 bites remaining: " . $lolly1->getBitesRemaining() . "</p>";




$lolly2 = new Lolly("Orange", 20);


echo "<p> Lolly 2 flavour: " . $lolly2->getFlavour() . "</p>";
echo "<p> Lolly 2 bites remaining: " . $lolly2->getBitesRemaining() . "</p>";
echo "<p> Lolly 2: Taking bite " . $lolly2->takeBite() . "</p>";
echo "<p> Lolly 2 bites remaining: " . $lolly2->getBitesRemaining() . "</p>";
echo "<p> Lolly 2: Taking another bite " . $lolly2->takeBite() . "</p>";
echo "<p> Lolly 2 bites remaining: " . $lolly2->getBitesRemaining() . "</p>";



$lollies = [];
$lollies[] = $lolly1;
$lollies[] = $lolly2;


echo "<p> Number of lollies: " . count($lollies) . "</p>";


foreach ($lollies as $lolly) {
	echo "<p> Flavour: " . $lolly->getFlavour() . "</p>";

}

?>