<?php 
for ($i = 99; $i >= 0; $i--) {

    $bottles = $i;
    $usedBottles = $i-1;
    $beerWall = 'of beer on the wall.';
    
    if ($i == 0) {
    $action = "Go to the store and buy some more, ";
    $sBottles = "bottle";
    $bottles = "no more";
    }
    
    if ($i == 1) {
    $sBottles = "bottle";	
    }
    
    if ($i > 1) {
    $action = "Take one down and pass it around, ";	
    $sBottles = "bottles";	
    }
    
    if ($usedBottles == 0) {
    $usedBottles = "no more";
    }
    
    if ($usedBottles < 0) {
    $usedBottles = "99";
    $sBottles = "bottles";	
    }	
    
    echo ucfirst($bottles) . " ". $sBottles . " " .$beerWall. $bottles ." ". $sBottles ." of beer.";
    echo $action . $usedBottles ." ". $sBottles ." "."$beerWall<br /><br />";
    }
    
?>
