<?php
    $dsn = "cakehut";
    $username = "root";
    $password = "";
    @$db = new mysqli('127.0.0.1:3325', $username, $password,$dsn);
    if (mysqli_connect_errno()) 
    {
        echo 'Connection error: ' . $db->connect_errno;
        exit;
    }
    $query =