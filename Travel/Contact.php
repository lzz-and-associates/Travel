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
	<div class="center">
		<div class="container TRVbackgroundWhite">

			<h3><p>Calgary Travel Agency: 403-686-5789</p>

					<div id="googleMap" style="width:500px;height:380px;"></div>


				<ul>
	  			<li>North America Travel Agency: +1-604-569-9876</li>
	  			<li>South America Travel Agency: +55-13-789-2164</li>
	  			<li>Europe Travel Agency: +44-20-5788-4648 </li>
			  	<li>Asia Travel Agency: +86-21-9869-6546</li>
			  	<li>Africa Travel Agency: +27-11-978-5315</li>
			  	<li>Australia Travel Agency: +61-03-7105-5486 </li>
				</ul>
		</div>
</div>

</body>
</html>
