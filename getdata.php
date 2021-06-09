<?php

    // Connection to database

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'priyanshu';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry" . mysqli_connect_error());
    } else {
        echo 'Connection was successful!<br>';
    }

    // Getting data from database

    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        // Output data of each row

        while($row = mysqli_fetch_assoc($result)) {
            echo "" . $row["sno"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
        }
    
    } else {
        echo "0 results";
    }

?>

