<?php

    $servername = '127.0.0.1:3306';
    $username = 'root';
    $password = '';
    $database = 'priyanshu';

    // Creating connection and Database

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry" . mysqli_connect_error());
    } else {
        echo 'Connection was successful!<br>';
    }
    
    // Sending data to database

    $sql = "INSERT INTO `data` (`name`, `email`) VALUES ('Pranay', 'parnaypdgupta@gmail.com')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data Inserted";
    } else {
        echo "Oops data is uploaded due to " . mysqli_error();
    }

?>