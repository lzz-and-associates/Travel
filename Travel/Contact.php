<?php
	include ("functions.php");
	$mysqli=mysqli_connect("localhost","root","","travelexperts" );;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Information</title>
		<script>

			var req2;
			var agency;
			var ajax;
			var agent;
		// get agency and agent information based agencyid
			function getAgency(agencyId)
			{
				console.log("getAgency: " + agencyId);
				req2 = new XMLHttpRequest();
				var url2 = "/Travel/PHP/getagency.php?AgencyId="+agencyId;
				req2.open("get", url2);
				req2.onreadystatechange=handleResponse2;
				req2.send(null);
				//call ajax
				ajax= new XMLHttpRequest();
				var method="GET";
				var url = "/Travel/PHP/getagents.php?AgencyId="+agencyId;
				var asynchronous = true;
				ajax.open(method,url,asynchronous);
				ajax.onreadystatechange=handleResponse;
				// send ajax request
				ajax.send();
			}

			var handleResponse2=function()
			{
				console.log("handleResponse2");
				if(req2.readyState==4)
				{
					console.log("handleResponse2: " + req2.responseText);
					agency=JSON.parse(req2.responseText);
					document.getElementById("AgencyId").innerHTML = agency.AgencyId;
					document.getElementById("AgncyAddress").innerHTML=agency.AgncyAddress;
					document.getElementById("AgncyCity").innerHTML=agency.AgncyCity;
					document.getElementById("AgncyProv").innerHTML=agency.AgncyProv;
					document.getElementById("AgncyPostal").innerHTML=agency.AgncyPostal;
					document.getElementById("AgncyCountry").innerHTML=agency.AgncyCountry;
					document.getElementById("AgncyPhone").innerHTML=agency.AgncyPhone;
					document.getElementById("AgncyFax").innerHTML=agency.AgncyFax;
				}
			}



		// receiving response from getagents.php
			var handleResponse=function()
			{
				console.log("handleResponse: " + ajax.responseText);
				if (ajax.readyState==4 && ajax.status==200)
				{
				//converting JSON back to array
				agent=JSON.parse(ajax.responseText);
				console.log(agent);

			// html value for <tbody>
				var html="";

			// loop through the agent
				for (var a=0; a<agent.length; a++)
				{
					var firstname = agent[a].AgtFirstName;
					var middleinitial = agent[a].AgtMiddleInitial;
					var lastname = agent[a].AgtLastName;
					var phone = agent[a].AgtBusPhone;
					var email = agent[a].AgtEmail;
					var position = agent[a].AgtPosition;

					// appending at html
					html+="<tr>";
						html+="<td>" + firstname +"</td>";
						html+="<td>" + middleinitial +"</td>";
						html+="<td>" + lastname +"</td>";
						html+="<td>" + phone +"</td>";
						html+="<td>" + email +"</td>";
						html+="<td>" + position +"</td>";
					html+="</tr>";
				}
				//replacing <tbody> of table
				document.getElementById("agent").innerHTML=html;
			}

		}
		</script>
	 </head>
	<body>
		<div class="container TRVbackgroundWhite">
		<h3>Agent Contact Information:</h3>
		<form method="post">
			<table border="0" >
				<tr>
					<td><input type="hidden" name="AgencyId" id="AgencyId" /></td>
				</tr>
				<tr>
					<td>Select an agency:</td>
					<td><?php print(selectAgency($mysqli)); ?></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><div type="text" name="AgncyAddress" id="AgncyAddress"> </div></td>
				</tr>
				<tr>
					<td>City:</td>
					<td><div type="text" name="AgncyCity" id="AgncyCity"></div></td>
				</tr>
				<tr>
					<td>Province:</td>
					<td><div type="text" name="AgncyProv" id="AgncyProv"></div></td>
				</tr>
				<tr>
					<td>Country:</td>
					<td><div type="text" name="AngcyCountry" id="AgncyCountry"> </div></td>
				</tr>
				<tr>
					<td>Postal Code:</td>
					<td><div type="text" name="AgncyPostal" id="AgncyPostal"></div></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><div type="text" name="AgncyPhone" id="AgncyPhone"> </div></td>
				</tr>
				<tr>
					<td>Fax:</td>
					<td><div type="text" name="AgncyFax" id="AgncyFax"> </div></td>
				</tr>
			</table>
		<table>
			<tr>
				<th> First Name </th>
				<th> MiddleInitial </th>
				<th> Last Name </th>
				<th> Business Phone </th>
				<th> Email </th>
				<th> Position </th>
				</tr>
			<tbody id ="agent">
			</tbody>
		</table>
		</form>
	</div>
	</body>
</html>
