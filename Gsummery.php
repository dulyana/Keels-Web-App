<!doctype html>
<html lang="en">
	<?php
		require_once "../PHP/Quary.php";
	?>
	
	

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="icon" href="../Images/img1.png" />
    <link rel="stylesheet" href="../CSS/home.css">
	<link href="../CSS/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Keels</title>
  </head>
  <body class="">
 
	<script>
		function logOut() {
			 $.ajax({
				url: '../PHP/logout.php',
				type: 'POST',
				
				success: function(data) {
					window.location.href = "./login.html";				
				} 
			});
		}	
	</script>
	
	<div class="bg-white">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="../Images/img1.png" alt="Paris" class="img3">
				</div>
				<div class="col text-right my-3">
					<i onclick="logOut()" class="lOut">
						<svg  xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
						  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
						</svg>
						LogOut
					</i>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-success p-1">
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link " href="./guestPage.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="./Gsummery.php">Summery</a>
			</li>	
		  </ul>
		</div>
	  </div>
	</nav>
		
	
	<div class="row mx-2 my-2">
		<div class="col-4  ">
			
			<div id="percentagechart" class="border border-dark text-center"></div>
		</div>
		<div class="col-4">
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th scope="col">District</th>
				  <th scope="col">No of Harvests</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
					$Anuradhapura = 0;
					$Ampara = 0;
					$Badulla = 0;
					$Batticaloa = 0;
					$Colombo = 0;
					$Galle = 0;
					$Gampaha = 0;
					$Hambantota = 0;
					$Jaffna = 0;
					$Kalutara = 0;
					$Kandy = 0;
					$Kegalle = 0;
					$Kilinochchi = 0;
					$Mannar = 0;
					$Matale = 0;
					$Matara = 0;
					$Monaragala = 0;
					$NuwaraEliya = 0;
					$Polonnaruwa = 0;
					$Puttalam = 0;
					$Ratnapura = 0;
					$Trincomalee = 0;
					$Vavuniya = 0;
					
					$result = getHarvest();
					if($result == null){
						
					}
					else {
						while($row = $result->fetch_assoc())
						{
							if($row["City"] == "Anuradhapura") {
								$Anuradhapura = $Anuradhapura + 1;
							}
							if($row["City"] == "Ampara") {
								$Ampara = $Ampara + 1;
							}
							if($row["City"] == "Badulla") {
								$Badulla = $Badulla + 1;
							}
							if($row["City"] == "Batticaloa") {
								$Batticaloa = $Batticaloa + 1;
							}
							if($row["City"] == "Colombo") {
								$Colombo = $Colombo + 1;
							}
							if($row["City"] == "Galle") {
								$Galle = $Galle + 1;
							}
							if($row["City"] == "Gampaha") {
								$Gampaha = $Gampaha + 1;
							}
							if($row["City"] == "Hambantota") {
								$Hambantota = $Hambantota + 1;
							}
							if($row["City"] == "Jaffna") {
								$Jaffna = $Jaffna + 1;
							}
							if($row["City"] == "Kalutara") {
								$Kalutara = $Kalutara + 1;
							}
							if($row["City"] == "Kandy") {
								$Kandy = $Kandy + 1;
							}
							if($row["City"] == "Kegalle") {
								$Kegalle = $Kegalle + 1;
							}
							if($row["City"] == "Kilinochchi") {
								$Kilinochchi = $Kilinochchi + 1;
							}
							if($row["City"] == "Mannar") {
								$Mannar = $Mannar + 1;
							}
							if($row["City"] == "Matale") {
								$Matale = $Matale + 1;
							}
							if($row["City"] == "Matara") {
								$Matara = $Matara + 1;
							}
							if($row["City"] == "Monaragala") {
								$Monaragala = $Monaragala + 1;
							}
							if($row["City"] == "NuwaraEliya") {
								$NuwaraEliya = $NuwaraEliya + 1;
							}
							if($row["City"] == "Polonnaruwa") {
								$Polonnaruwa = $Polonnaruwa + 1;
							}
							if($row["City"] == "Puttalam") {
								$Puttalam = $Puttalam + 1;
							}
							if($row["City"] == "Ratnapura") {
								$Ratnapura = $Ratnapura + 1;
							}
							if($row["City"] == "Trincomalee") {
								$Trincomalee = $Trincomalee + 1;
							}
							if($row["City"] == "Vavuniya") {
								$Vavuniya = $Vavuniya + 1;
							}
							
						}
						echo '<tr>
								  <td>Anuradhapura</td>
								  <td>'; echo $Anuradhapura ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Ampara</td>
								  <td>'; echo $Ampara  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Badulla </td>
								  <td>'; echo $Badulla  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Batticaloa </td>
								  <td>'; echo $Batticaloa  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Colombo </td>
								  <td>'; echo $Colombo  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Galle </td>
								  <td>'; echo $Galle  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Gampaha </td>
								  <td>'; echo $Gampaha  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Hambantota </td>
								  <td>'; echo $Hambantota  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Jaffna </td>
								  <td>'; echo $Jaffna  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Kalutara </td>
								  <td>'; echo $Kalutara  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Kandy </td>
								  <td>'; echo $Kandy  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Kegalle </td>
								  <td>'; echo $Kegalle  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Kilinochchi </td>
								  <td>'; echo $Kilinochchi  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Mannar </td>
								  <td>'; echo $Mannar  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Matale </td>
								  <td>'; echo $Matale  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Matara </td>
								  <td>'; echo $Matara  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Monaragala</td>
								  <td>'; echo $Monaragala ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>NuwaraEliya </td>
								  <td>'; echo $NuwaraEliya  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Polonnaruwa </td>
								  <td>'; echo $Polonnaruwa  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Puttalam </td>
								  <td>'; echo $Puttalam  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Ratnapura </td>
								  <td>'; echo $Ratnapura  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Trincomalee </td>
								  <td>'; echo $Trincomalee  ; echo'</td>
								</tr>';
						echo '<tr>
								  <td>Vavuniya </td>
								  <td>'; echo $Vavuniya ; echo'</td>
								</tr>';
					}
				?>
				
				
			  </tbody>
			</table>
		</div>
			
	</div>
	<div class="row mx-2 my-4">
		<div class="col-6 border border-dark my-4 p-2">
			<h6 class="text-center">Succesfull transactions</h6>
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th scope="col">Item Name</th>
				  <th scope="col">Quantity</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
					$result = getBuyHarvest();
					if($result == null){
						
					}
					else {
						while($row = $result->fetch_assoc())
						{
							echo '	<tr>
								  <td> ' ; echo $row["ProductName"]; echo '</td>
								  <td>' ; echo $row["Qty"] ; echo 'Kg</td>
								</tr>';	
							
						}
					}
				
				
				?>
			
				
			  </tbody>
			</table>
		</div>
		<div class="col-6 border border-dark my-4 p-2">
			<h6 class="text-center">Wasted Harvests</h6>
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th scope="col">District</th>
				  <th scope="col">No of Harvests</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
					$result = getWastedHarvest();
					if($result == null){
						
					}
					else {
						while($row = $result->fetch_assoc())
						{
							echo '	<tr>
								  <td> ' ; echo $row["ProductName"]; echo ' </td>
								  <td>' ; echo $row["Qty"] ;  echo 'Kg</td>
								</tr>';	
							
						}
					}
				
				
				?>
				
			  </tbody>
			</table>
		</div>	
	</div>
	
	
	
	<script>
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(showCategoryChart);

		// Draw the chart and set the chart values
		function showCategoryChart() {
			
			$.ajax({
						url: '../PHP/getCtegorys.php',
						type: 'POST',
						success: function(returns) {
							console.log(returns); // Inspect this in your console
							var word = returns.split(",");
							var data = google.visualization.arrayToDataTable([
							  ['Type', 'Percentage'],
							  ['Vegitable', parseInt(word[0])],
							  ['Fruit', parseInt(word[1])],
							]);
							
							 // Optional; add a title and set the width and height of the chart
							  var options = {'title' : 'Available Fruits and Vegitable Chart' ,  'width':450, 'height':300};

							  // Display the chart inside the <div> element with id="piechart"
							  var chart = new google.visualization.PieChart(document.getElementById('percentagechart'));
							  chart.draw(data, options);
							  
		  
						} 
					});
					
					
		 



		 
		}
	</script>

  </body>
</html>