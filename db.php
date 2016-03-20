<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
// Create Connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$con){
    die("could not connect");
}
else {
    echo "Connected.";
}
