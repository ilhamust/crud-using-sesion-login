<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

$connect = mysqli_connect($server, $username, $password, $dbname);

if (!$connect) {
    die("Conection failed :" . mysqli_connect_error());
} 
