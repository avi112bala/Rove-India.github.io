<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password=$_POST['password'];

        //submit these to database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "login_register_pure_coding";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("sorry we failed to connect" . mysqli_connect_error());
        } else {
            echo "connect is successfully";
            // submit these to database

            

            $sql="INSERT INTO `register1` ( `username`, `email`, `password`, `confirmpassword`, `dt`) VALUES ( '$username', '$email', '$password', '$confirmpassword', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>success!</strong>your entry  has been submitted successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
            } else {
                echo "The table was not created successfully because this errror---->" . mysqli_error($conn);
            }
        }
    }


    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button  name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>

