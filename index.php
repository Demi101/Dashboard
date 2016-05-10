<!DOCTYPE html>
<html lang="eng">
	<head >

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

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
    <script type="text/javascript" src="js/weer.js"></script>

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
        <div class="main-bar-top">
              <form style="padding-top: 30px; float: right;">
                  <input value="Zoeken"><span class="glyphicon glyphicon-bell"></span><span class="glyphicon glyphicon-envelope" style="color:#272735"></span></input>
              </form>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <section class="kalender col-lg-4">

                    </section>

                    <section class="overzicht col-lg-4" style="height: 300px; float: right!important;">
						<div class="container">
						  <div class="GaugeMeter" id="PreviewGaugeMeter_1" data-percent="34" data-prepend="<font style='color:#26d1d3;font-size:35px;margin-left:-15px'></font>" data-size="188" data-theme="#26d1d3" data-back="white" data-animate_gauge_colors="1" data-animate_text_colors="1" data-width="2" data-label="Benzine" data-label_color="#2c94e0">
                          </div>
                          <div class="GaugeMeter" id="PreviewGaugeMeter_2" data-percent="60" data-prepend="<font style='color:#ed5a72;font-size:35px;margin-left:-15px'></font>" data-size="188" data-theme="#ed5a72" data-back="white" data-animate_gauge_colors="1" data-animate_text_colors="1" data-width="2" data-label="Kilometer" data-label_color="#ed5a72">
                          </div>
                        </div>
                    </section>

                    <section class="berichten col-lg-4">

                    </section>
                        
                </div>
                <div class="row">
                    <section class="modules col-lg-4" >
                        <input type="checkbox" id="switch1" class="switch" aria-hidden="false" onClick="Modules();"><label for="switch1" class="switch-label">Checkbox Label</label><p>Zwangerschap</p><br>
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
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
	<script src="js/jquery.AshAlom.gaugeMeter-2.0.0.min.js"></script> 
	<script>
$(".GaugeMeter").gaugeMeter();
</script>
</html>