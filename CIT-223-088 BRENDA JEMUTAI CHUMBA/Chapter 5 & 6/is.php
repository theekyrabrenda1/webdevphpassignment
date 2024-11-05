<?php 
// Define variables with different data types $integerVar = 42; 
$floatVar = 3.14; $stringVar = "Hello, World!"; 
$boolVar = true; $arrayVar = array(1, 2, 3); 
// Test and print the type of each variable 
echo "Variable type tests:<br/>"; 
if (is_int($integerVar)) {
     echo '$integerVar is an integer.<br/>';
     } 
     if (is_float($floatVar)) 
     { 
        echo '$floatVar is a float.<br/>'; 
    } 
    if (is_string($stringVar)) { 
        echo '$stringVar is a string.<br/>';
     } 
     if (is_bool($boolVar)) { 
        echo '$boolVar is a boolean.<br/>'; 
    } 
    if (is_array($arrayVar)) 
    { echo'$arrayVar is an array.<br/>'; } 
    ?>