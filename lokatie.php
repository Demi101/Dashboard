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
            <div id="map" style= "height: 869px; "></div>
			<script>
              // Note: This example requires that you consent to location sharing when
              // prompted by your browser. If you see the error "The Geolocation service
              // failed.", it means you probably did not give permission for the browser to
              // locate you.
        
              function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: 52.23, lng: 4.554},
                  zoom: 8
                });
                var infoWindow = new google.maps.InfoWindow({map: map});
				
				//4 static locations as a placeholder
				var location1 = new google.maps.LatLng(52.682395,6.184084);
				var location2 = new google.maps.LatLng(51.808586,5.829868);
				var location3 = new google.maps.LatLng(51.571984,5.077416);
				var location4 = new google.maps.LatLng(51.545273,5.076176);
				
				var marker1=new google.maps.Marker({
  				position:location1,
  				});

				marker1.setMap(map);
				
				var marker2=new google.maps.Marker({
  				position:location2,
  				});

				marker2.setMap(map);
				
				var marker3=new google.maps.Marker({
  				position:location3,
  				});

				marker3.setMap(map);
				
				var marker4=new google.maps.Marker({
  				position:location4,
  				});

				marker4.setMap(map);
				
                // For dynamic location: try HTML5 geolocation.
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var currentLocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
        
                    var marker5=new google.maps.Marker({
						position:currentLocation,
						});

					marker5.setMap(map);
                  }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                  });
				  
                } else {
                  // Browser doesn't support Geolocation
                  handleLocationError(false, infoWindow, map.getCenter());
                }
              }
        
              function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                                      'Error: The Geolocation service failed.' :
                                      'Error: Your browser doesn\'t support geolocation.');
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZ6f3fixfsR9P4E2g6BRBDO3Y095Kghk&callback=initMap">
            </script>
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