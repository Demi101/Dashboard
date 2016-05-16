<?php

error_reporting(E_ALL);
ini_set('display_errors',true);

// Starts the session and connects to the database.
session_start();
require 'connect.php';
	
$failLogin = 0;

// If LOGIN button is clicked, login user by checking data or redirect to login page and give error.
if(isset($_POST['login'])){

	// Save filled in data in variables and define an error variable
	$username = $_POST['username'];
	$password = $_POST['password'];

	// If email is invalid give error
	if(!preg_match("/^[a-zA-Z ]*$/",$username)){
		$failLogin = 1;
	}else{
		$result = $con->query("SELECT * FROM users WHERE username='$username' ");
		$row = $result->fetch_array(MYSQLI_BOTH);

		// Save data from database in session variables
		if(password_verify($password, $row['password'])){
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['email'] = $row['email'];

			// Redirect to index.php
			header('Location: index.php');
		}else{
			$failLogin = 1;
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
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="login-form">
			<?php

			if($failLogin == 1){
                echo "<div class=\"alert alert-danger\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Inloggen mislukt
                    </div>";
            }

            ?>
		      <input name="username" type="text" placeholder="Gebruikersnaam"/>
		      <input name="password" type="password" placeholder="Wachtwoord"/>
		       <input name="login" type="submit" Value="Inloggen" class="buttonsave">
		      <p class="message">Nog niet geregistreerd? <a href="register.php">Maak een account.</a></p>
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