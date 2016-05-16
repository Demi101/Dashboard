<?php

// // Start session and connect to database
// session_start();
// require 'connect.php';

// // If session variable id not exists go to login.php
// if(isset($_SESSION['id'])){
// }else{
//     header('Location: login.php');
// }

?>

<!DOCTYPE html>
<html lang="eng">
	<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <title>Dashboard | Daimler</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/circle.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/modules.js"></script>

	</head>
	<body style="overflow-x:hidden;">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                    	<span class="fa fa-desktop" style="color: #57971f;"></span>
                    	  Daimler App
                    </a>
                </li>
                <?php
                include "menu.php";
                ?>
                <hr>
                <p id="TimeDate"></p>
                <hr>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <?php

        include "header.php"

        ?>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            Daimler app > <strong>Dashboard</strong>
                <div class="row">

                    <section class="kalender col-lg-6">

                    </section>

                    <!-- Meters -->
                    <section class="overzicht  col-lg-6" style="display: -webkit-inline-box;height: 300px; float: right!important;">
                    <div clas="clearfix" style="margin-left: auto; margin-right: auto; margin-top: 50px;">
                        <div class="c100 p65">
                            <span>65% <br> Benzine</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <div class="c100 p35 orange" style="    margin-left: 75px;">
                            <span>35% <br> Kilometer</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                    </div>

                    </section>

                    <section class="berichten col-lg-6">

                    </section>
                        
                </div>
                <div class="row">
                    <section class="modules col-lg-6" >
                    <p>MODULES</p><br>
                        <input type="checkbox" id="switch1" class="switch" aria-hidden="false" onClick="Modules();"><label for="switch1" class="switch-label">Checkbox Label</label><p>Zwangerschap</p><br>
                        <input type="checkbox" id="switch2" class="switch" aria-hidden="false"><label for="switch2" class="switch-label">Checkbox Label</label><p>Vakantie</p><br>
                        <input type="checkbox" id="switch3" class="switch" aria-hidden="false"><label for="switch3" class="switch-label">Checkbox Label</label><p>Verhuizen</p><br>
                        <input type="checkbox" id="switch4" class="switch" aria-hidden="false"><label for="switch4" class="switch-label">Checkbox Label</label><p>Carriere Groei</p>
                    </section>
                    <section class="berichten col-lg-6">
                        <p>Berichten</p>
                    </section>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

    </script>

    <script>
    var d = new Date();
    document.getElementById("TimeDate").innerHTML = d.toUTCString();
    </script>

	</body>
</html>