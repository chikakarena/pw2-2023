<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_kitchentools";

    $conn = mysqli_connect($hostname, $username, $password, $database) or die ('Gagal terhubung ke database');
?>