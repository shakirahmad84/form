<?php
$sql = $_POST['name'];

if(mysqli_query(mysqli_connect("localhost", "root", ""), "create database $sql")){
    echo "Database Created Successfully.";
}
