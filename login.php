<?php

// Starts the session and connects to the database.
session_start();
require 'connect.php';

// If REGISTER button is clicked, register user by saving filled in data.
if(isset($_POST['register'])){

}

// If LOGIN button is clicked, login user by checking data or redirect to login page and give error.
if(isset($_POST['login'])){

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

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/modules.js"></script>

</head>
<body>
	<h1 class="titleLogIn">Daimler App</h1>
	<div class="login-page">
  		<div class="form">
			<form action="" method="post" class="register-form">
		      <input name="username" type="text" placeholder="Gebruikersnaam"/>
		      <input name="password" type="password" placeholder="Wachtwoord"/>
		      <input name="email" type="email" placeholder="E-mailadres"/>
		      <input name="register" type="submit" Value="Registreren" class="buttonsave">
		      <p class="message">Al geregistreerd? <a href="#">Log in.</a></p>
		    </form>
			<form action="" method="post" class="login-form">
		      <input type="text" placeholder="Gebruikersnaam"/>
		      <input type="password" placeholder="Wachtwoord"/>
		       <input name="login" type="submit" Value="Inloggen" class="buttonsave">
		      <p class="message">Nog niet geregistreerd? <a href="#">Maak een account.</a></p>
		    </form>

		</div>
	</div>
<script type="text/javascript">$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
</body>
</html>