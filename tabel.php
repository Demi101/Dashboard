<!DOCTYPE html>
<html lang="">
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | Daimler</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

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
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
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
                                <td>Bedrag per maand</td>
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
	</body>
</html>