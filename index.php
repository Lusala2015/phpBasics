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

//Associative arrray
$javascriptLibraries = array(
    "React" => "facebook",
    "Angular" => "Google",
    "Vue" => " Evan You"
);

var_dump($javascriptLibraries);

echo '<h3>' . $javascriptLibraries["React"] . '</h3>';

echo '<h3>' . $javascriptLibraries["Vue"] . '</h3>';

//multi-dimensional array

$users = array(
    array(
        "userID" => "User1",
        "password" => "1234"
    ),
    array(
        "userID" => "User2",
        "password" => "4321"
    )
);

var_dump ($users);

echo '<h3>' . $users[0]["userID"] . '</h3>' ;




?>