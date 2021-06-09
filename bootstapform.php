<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container mt-5">
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'priyanshu';

            // Connection to database

            $conn = mysqli_connect($servername, $username, $password, $database);

            // Sending data to table

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];

                $sql = "INSERT INTO `data` (`name`, `email`) VALUES ('$name', '$email')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registered Successfully!</strong> We will reach you with in 4 to 5 days
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Oops something went wrong!</strong> Try again later
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
            }
        ?>
        <h1>Register yourself to our community</h1><br>
        <form method="post">
            <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com" autocomplete="off">
            <label for="floatingInput">Your Name</label>
            </div>
            <div class="form-floating">
            <input type="text" class="form-control" name="email" id="floatingPassword" placeholder="Password" autocomplete="off">
            <label for="floatingPassword">Your Email</label>
            </div><br>
            <button type="submit" class="btn btn-dark btn-lg">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>