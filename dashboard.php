<?php

$userid = $_POST["userid"];
$password = $_POST["password"];

if($userid == "Mark" && $password == "1234"){
    echo "<h1>Welcome, $userid</h1>";
}else{
    echo " incorrect Login Details";
}

?>

