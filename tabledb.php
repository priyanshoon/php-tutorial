<?php

    $servername = 'localhost';
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

    // Creating tables in Database

    $sql = "CREATE TABLE `data` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(16) NOT NULL , `email` VARCHAR(45) NOT NULL , PRIMARY KEY (`sno`));";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Table has created";
    } else {
        echo "failed to create table in database because of " . mysqli_error($conn);
    }


?>