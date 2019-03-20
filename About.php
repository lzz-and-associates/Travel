<?php
	$title = "Travel Experts Website";
?>

<!DOCTYPE html>

<html>
<head>

    <title><?php print($title); ?></title>
		<style>
		.center {
			padding: 300px 0;
			text-align: center;
		}
		</style>

          <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJW4jsPlNKgv6jFm3B5Edp5ywgdqLWdmc&sensor=false">
          </script>

          <script>
          var myCenter=new google.maps.LatLng(51.065097,-114.088925);

          function initialize()
          {
          var mapProp = {
            center:myCenter,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
            };

          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

          var marker=new google.maps.Marker({
            position:myCenter,
            });

          marker.setMap(map);

          var infowindow = new google.maps.InfoWindow({
            content:"Calgary Travel Experts"
            });

          infowindow.open(map,marker);
          }

          google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>

    <div class="container TRVbackgroundWhite">
        <h3>About Us:</h3>
          <h3><p>Local professional Travel Experts company for more than 40 years experience service in Calgary​</p></h3>
          <h5><p>Contact Us: 403-271-9872</p></h5>
          <div id="googleMap" style="width:500px;height:380px;"></div>
    </div>
  </div>


</body>
</html>
