<!DOCTYPE html>
<html lang="">
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>

    <title>Dashboard | Daimler</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

	</head>
	<body>
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
                <div class="row">
                    <div class="col-lg-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;"><i class="fa fa-car" aria-hidden="true" style="color:#57971f;"></i> Type auto</th>
                                <th style="text-align: center;"><i class="fa fa-eur" aria-hidden="true" style="color:#57971f;"></i> Bedrag per maand</th>
                                <th style="text-align: center;"><i class="fa fa-calendar" aria-hidden="true" style="color:#57971f;"></i> Start datum</th>
                                <th style="text-align: center;"> <i class="fa fa-user" aria-hidden="true" style="color:#57971f;"></i> Medewerker</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.  BMW 5    DBB-44-H</td>
                                <td>&#8364; 337.09</td>
                                <td>15.06.2016</td>
                                <td>Gorge M. Nicolson</td>
                            </tr>
                            <tr>
                                <td>2.  VW Golf    DG-543-S</td>
                                <td>&#8364; 158.26</td>
                                <td>16.06.2016</td>
                                <td>Artem N. Verovin</td>
                            </tr>
                            <tr>
                                <td>3.  Audi A4    47-FZB-1</td>
                                <td>&#8364; 209.13</td>
                                <td>16.06.2016</td>
                                <td>Gleb L. Smagin</td>
                            </tr>
                            <tr>
                                <td>4.  Tesla S    D-614-XJ</td>
                                <td>&#8364; 318.05</td>
                                <td>16.06.2016</td>
                                <td>Manish R. Zefoll</td>
                            </tr>
                            <tr>
                                <td>5.  Renault Clio    81-LNZ-8</td>
                                <td>&#8364; 180.12</td>
                                <td>17.06.2016</td>
                                <td>Jaco R. Dexer</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
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
    </script>

        <script>
    var d = new Date();
    document.getElementById("TimeDate").innerHTML = d.toUTCString();
    </script>
	</body>
</html>