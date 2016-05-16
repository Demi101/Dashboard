<?php

error_reporting(E_ALL);
ini_set('display_errors',true);

// Starts the session and connects to the database.
session_start();
require 'connect.php';

// Define variables for errors.
$emptyFields = 0;
$failUsername = 0;
$failEmail = 0;
$failAlreadyExists = 0;

// If REGISTER button is clicked, register user by saving filled in data.
if(isset($_POST['register'])){

	if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])){
        $emptyFields = 1;
    }else{
    	// Define variables.
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Validate filled in data. If valid save data in database and hash password.
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z ]*$/",$username)){
			// 
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$failEmail = 1;
			}
			if(!preg_match("/^[a-zA-Z ]*$/",$username)){
				$failUsername = 1;
			}
		}else{
			$query = $con->query("SELECT * FROM users WHERE username='{$username}'");

			if (mysqli_num_rows($query) > 0) {
		        $failAlreadyExists = 1;
		    } else {
	        	$StorePassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

				$sql = $con->query("INSERT INTO users (username, password, email) VALUES ('{$username}', '{$StorePassword}', '{$email}')");

				// When data is saved go to login.php
				header('Location:login.php');
		    }

				
    	}
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

	<title>Dashboard | Daimler</title>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/modules.js"></script>

</head>
<body>
	<h1 class="titleLogIn">Daimler App</h1>
	<div class="login-page">
  		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="register-form">
				<?php

				if($emptyFields == 1){

                    echo "<div class=\"alert alert-warning\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            Vul alle velden in
                        </div>";
                }

                if($failUsername == 1){
                    echo "<div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            Ongeldige gebruikersnaam
                        </div>";
                }

                if($failEmail == 1){
                    echo "<div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            Ongeldig e-mailadres
                        </div>";
                }

                if($failAlreadyExists == 1){

                    echo "<div class=\"alert alert-danger\">
                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                            Gebruikersnaam bestaat al
                        </div>";
                }

                ?>
		      <input name="username" type="text" placeholder="Gebruikersnaam"/>
		      <input name="password" type="password" placeholder="Wachtwoord"/>
		      <input name="email" type="email" placeholder="E-mailadres"/>
		      <input name="register" type="submit" Value="Registreren" class="buttonsave">
		      <p class="message">Al geregistreerd? <a href="login.php">Log in.</a></p>
		    </form>
		</div>
	</div>
	<script>
		$(function() {
			$('.login-page').hide().fadeIn('slow');
		});
	</script>
</body>
</html>