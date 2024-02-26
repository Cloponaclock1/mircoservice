<?php

if (empty($_POST["username"])) {
    die("Username is required");
}


if (strlen($_POST["password"]) <5) {
    die("Password must be at least 5 characters");
}

$enc_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/database.php";


$sqlinfo = "INSERT IGNORE INTO user (username, email, password)
VALUES (?,?,?)";

$stmt = $mysqli -> stmt_init();

if (! $stmt ->prepare($sqlinfo)){
    die("".$mysqli->error);
};

//prep data for insert 
$stmt -> bind_param("sss",
$_POST["username"],
$_POST["email"],
$enc_password);


//perform insert into database
$result = $stmt->execute();


//check to see if a duplicate email was inserted
if ($result && $mysqli->affected_rows === 1) {
    header("Location: login.php");
    exit;
} else if ($result && $mysqli->affected_rows !== 1){
     die("email already taken");
} else {
     die($mysqli->error . " " . $mysqli->errno);
}