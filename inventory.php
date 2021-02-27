<!doctype html>
<html lang="en">
	<?php
		require_once "../PHP/Quary.php";
	?>
	
	<?php
		if (!isset($_SESSION['ID'] )) {
		   echo '<script>window.location.href = "./login.html";</script>';
		}
	
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
    	
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAooKFl5tqgK3Jav-4TKFLD2qpwsmkvUc&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
    <title>Keels</title>
  </head>
  <body class="">
   <script>
   
      function initMap() {
        const myLatLng = { lat: 7.9894958, lng: 80.7039796 };
		document.getElementById("map").style.display = "block ";
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: myLatLng,
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
      }
	   function showOnMap(lat , lng) {
        const myLatLng = { lat: lat, lng: lng };
		document.getElementById("map").style.display = "block ";
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: myLatLng,
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
        });
      }
	  
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
			  <a class="nav-link " aria-current="page" href="./DoAKeeels.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="./newRequests.php">New Requests</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="./inventory.php">Inventory</a>
			</li>			
		  </ul>
		</div>
	  </div>
	</nav>
		
	
	<div class="row mx-1 my-4">
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<form method="POST" action="../PHP/inventoryAdd.php">
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Product Name</label>
					<input type="text" class="form-control" name="ProductName" >
				</div>
				  
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Quantity</label>
					<input type="number" class="form-control" name="qty" >
				</div>
				  
				  
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Price</label>
					<input type="text" class="form-control" name="price" >
				</div>
				<button href="#" class="btn btn-success">Add Inventory</button>
			
			</form>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-6">
		<div class="card">
		  <div class="card-body">
			<form method="POST" action="../PHP/inventoryWasted.php">
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Product Name</label><br>
					<select name="products" id="items" style="width : 100%;">
						 <option value="s">--Select the product--</option>
						<?php
							$result = getBuyHarvest();
							if($result == null){
								
							}
							else {
								while($row = $result->fetch_assoc())
								{
									echo ' <option value=" ' ; echo $row["ProductName"] ; echo '">'; echo $row["ProductName"] ; echo '</option>';
									
								}
							}
						?>
					</select>
				</div>
				  
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Wasted Quantity</label>
					<input type="number" class="form-control" name="qty" >
				</div>
				<button href="#" class="btn btn-info">Save Data</button>
			
			</form>
		  </div>
		</div>
	  </div>
	</div>

	
	
	
	
	

  </body>
</html>