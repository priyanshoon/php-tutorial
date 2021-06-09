<?php

    // Sending data to database

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // Creating connection and Database

    $conn = mysqli_connect($servername, $username, $password);
    $sql = 'CREATE DATABASE priyanshu';

    $result = mysqli_query($conn, $sql);
    echo var_dump($result);
    echo "<br>";

    if (!$conn) {
        die("Sorry" . mysqli_connect_error());
    } else {
        echo 'Connection was successful!';
    }

?>