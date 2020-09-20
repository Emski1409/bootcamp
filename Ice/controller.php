<?php
// include definitions
include once ("truck.php");
include once ("icelolly.php");
include once ("Factory.php");
// Get a factory

$factory = new factory();
// Instruct the factory to build my icecreams
$vanillaIceCreams = $factory ->buildVanilla(100);
$vchocolateIceCreams = $factory ->buildchocolate(200);
// get truck
$truck = new Truck ();
//load the truck with icecreams
$truck -> addStock($vanillaIceCreams);
$truck -> addStock($chocolateIceCreams);
//sell some icecremas
$truck ->vend("vanilla");
$truck ->vend("chocolate");

//stock take of truck
$report = $truck->getStockReport();
print_r($report);


?>