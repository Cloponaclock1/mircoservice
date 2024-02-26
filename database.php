<?php



$host="localhost";
$database = "login";
$username = "root";
$password="";



$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli -> connect_errno) {
    die("Connection error" .$mysqli->connect_errno);
}

return $mysqli;