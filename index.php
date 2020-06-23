<?php

$message = "Welcome to Mark Coding ";
$number1 = 23;
$number2 = 45;
$total = $number1 + $number2;

echo "<h3>$message</h3>";
echo" <p>The sum of $number1 and $number2 is $total</p>";

echo' <p>The sum of ' . $number1 . 'and ' . $number2 . 'is ' . $total .'.';


//conditional steps in php
echo '<br>';
$loggedIn = false;

if($loggedIn == true){
    echo'Welcome';
}else {
    echo 'please log in';
}


//Arrays 
echo '<br>';
$javascriptLibraries = array("React","Angular","Vue");

print_r($javascriptLibraries);

echo '<br>';

var_dump($javascriptLibraries);

echo '<br>';

echo "<h3>$javascriptLibraries[1]</h3>"; 

echo'<hr>';

?>