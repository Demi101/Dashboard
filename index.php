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
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js/modules.js"></script>

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

                    <section class="kalender col-lg-4">

                    </section>

                    <section class="overzicht col-lg-4">
						<div class="container" style="margin:150px auto;">
						  <div class="GaugeMeter" id="PreviewGaugeMeter_1" data-percent="60" data-prepend="<font style='color:#272735;font-size:35px;margin-left:-15px'></font>" data-size="188" data-theme="White" data-back="#272735" data-animate_gauge_colors="1" data-animate_text_colors="1" data-width="2" data-label="Years" data-label_color="#272735"></div>
                    </section>

                    <section class="modules col-lg-4">
                        <input type="checkbox" id="switch1" class="switch" aria-hidden="false" onClick="Modules();"><label for="switch1" class="switch-label">Checkbox Label</label><p>Zwangerschap</p><br>
                        <input type="checkbox" id="switch2" class="switch" aria-hidden="false"><label for="switch2" class="switch-label">Checkbox Label</label><p>Vakantie</p><br>
                        <input type="checkbox" id="switch3" class="switch" aria-hidden="false"><label for="switch3" class="switch-label">Checkbox Label</label><p>Verhuizen</p><br>
                        <input type="checkbox" id="switch4" class="switch" aria-hidden="false"><label for="switch4" class="switch-label">Checkbox Label</label><p>Carriere Groei</p>
                    </section>

                    <section class="berichten col-lg-4">

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
	</body>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
	<script src="js/jquery.AshAlom.gaugeMeter-2.0.0.min.js"></script> 
	<script>
$(".GaugeMeter").gaugeMeter();
</script>
</html>