<?php

session_start();
$servername = "127.0.0.1";
$username   = "root";
$password   = "";
$db         = "webprog2022"; //sesuaikan dengan nama db masing-masing
        
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

$id = $_GET['id'];

$query = "UPDATE contoh_tabel SET setuju = 1 WHERE id='$id'";
//echo $query;
mysqli_query($conn, $query);
header('location: list_lapor_dimensi.php');