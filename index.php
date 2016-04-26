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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

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
                    <h1>Dit is text</h1>
                    </div>

                    <section class="modules col-lg-4">
                        <input type="checkbox" id="switch1" class="switch" aria-hidden="false"><label for="switch1" class="switch-label">Checkbox Label</label><p>Zwangerschap</p><br>
                        <input type="checkbox" id="switch2" class="switch" aria-hidden="false"><label for="switch2" class="switch-label">Checkbox Label</label><p>Vakantie</p><br>
                        <input type="checkbox" id="switch3" class="switch" aria-hidden="false"><label for="switch3" class="switch-label">Checkbox Label</label><p>Verhuizen</p><br>
                        <input type="checkbox" id="switch4" class="switch" aria-hidden="false"><label for="switch4" class="switch-label">Checkbox Label</label><p>Carriere Groei</p>
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
    </script>
	</body>
</html>