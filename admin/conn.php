<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "gpnweb";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);


if (!$conn) {
    echo "DB is not connected";
}

$con = mysqli_connect("localhost", "root", "", "gpnweb");


if (mysqli_connect_error()) {

    echo "cannot connect to database";
    exit();
}
