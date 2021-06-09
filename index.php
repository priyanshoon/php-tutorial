<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <?php 

        // Creating connection and Database
        
        $servername = '127.0.0.1:3306';
        $username = 'root';
        $password = '';
        $database = 'priyanshu';


        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Sorry" . mysqli_connect_error());
        } else {
            echo 'Connection was successful!<br>';
        }
        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = $_POST['name'];
            $email = $_POST['email'];
            
            // Sending data to database

            $sql = "INSERT INTO `data` (`name`, `email`) VALUES ('$name', '$email')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data Inserted";
            } else {
                echo "Oops data is uploaded due to " . mysqli_error($conn);
            }
        }
        
    ?>
    <form method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>