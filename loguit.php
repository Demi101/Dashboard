<?php

// Start de sessie, verwijdert de sessievariabelen van de user en stopt de sessie.
session_start();
unset($_SESSION['id']);
session_destroy();

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
          <h1>U bent uitgelogd.</h1>
          <p class="message">Weer inloggen? <a href="login.php">Log in.</a></p>

        </div>
    </div>
</body>
</html>