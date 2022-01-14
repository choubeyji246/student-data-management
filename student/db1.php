<?php
session_start();

// initializing variables
$username = "";
$password = "";
$errors = array();

// connect to the database
$db1 = mysqli_connect('localhost', 'root', '', 'admin');


//Check connection
if ($db1->connect_error){
    die("Connection failed:". $conn->connect_error);
}
echo "Connected successfully";
