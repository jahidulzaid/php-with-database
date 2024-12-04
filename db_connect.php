<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection -> connect_error){
    die("Connection Failed: ".$connection -> connect_error);
}else{
    echo "Connection Successful!";
}

?>