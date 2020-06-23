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

//loops
//****while loop */

echo '<h1>While loop</h1>';

$limit = 10;
$number = 0;

echo"<ul>";

while ($number <= $limit){
echo"<li>$number</li>";
$number ++;
}
echo "</ul>";

echo "<h2>For loops</h2>";

echo "<ul>";

for ($i=0; $i<=$limit;$i++){
    echo " <li> $i </li>";
}

echo "</ul>";


//Do while loop

echo "<h3>Do while loop</h3>";

$number = 0;

echo "<ul>";

do{
    echo "<li>$number</li>";
    $number++;
} while($number <= $limit);

//for each loop

echo "<h4>For each loops</h4>";

$names = array("mark","jane","wim");

echo "<ul>";

foreach ($names as $name){
    echo "<li>$name</li>";
}

echo "<br>";

echo "</ul>";

// how to access values in an associative arrays 
$languages = array(
    "php" => "laravel",
    "python" => "Django"
);

echo "<ul>";

foreach ($languages as $language => $framework){
    echo "<li>Framework for $language: $framework </li>";
}

echo "<br>";
//functions in php

function sayHi(){
    echo "<h1>hi everyone</h1>";
}

sayHi ();

function add($num1,$num2){
    return $num1 + $num2;
}

?>