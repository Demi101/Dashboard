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
			<form class="register-form">
		      <input type="text" placeholder="Gebruikersnaam"/>
		      <input type="password" placeholder="Wachtwoord"/>
		      <input type="text" placeholder="E-mailadres"/>
		      <button>Registreer</button>
		      <p class="message">Al geregistreerd? <a href="#">Log in.</a></p>
		    </form>
			<form class="login-form">
		      <input type="text" placeholder="Gebruikersnaam"/>
		      <input type="password" placeholder="Wachtwoord"/>
		      <button>Inloggen</button>
		      <p class="message">Nog niet geregistreerd? <a href="#">Maak een account.</a></p>
		    </form>

		</div>
	</div>
<script type="text/javascript">$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
</body>
</html>