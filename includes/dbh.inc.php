<?php

# Connection to the database

$dbServername = "localhost";
$dbUsername = "root";
$dbPwd = "";
$dbName = "registrationsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPwd, $dbName);

# If it fails to connect

if(!conn) {
    die("Connection Failed: ".mysqli_connect_error());
}