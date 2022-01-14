<?php
session_start();

// initializing variables
$username = "";
$password    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'result');


//Check connection
if ($db->connect_error){
    die("Connection failed:". $conn->connect_error);
    
}
echo "Connected successfully";
