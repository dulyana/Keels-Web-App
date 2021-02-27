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
        const myLatlng = {  lat: 6.933754358291925, lng:  79.85000610351562 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: myLatlng,
        });
        // Create the initial InfoWindow.
        let infoWindow = new google.maps.InfoWindow({
          content: "Click the map to get Lat/Lng!",
          position: myLatlng,
        });
        infoWindow.open(map);
        // Configure the click listener.
        map.addListener("click", (mapsMouseEvent) => {
          // Close the current InfoWindow.
          infoWindow.close();
          // Create a new InfoWindow.
          infoWindow = new google.maps.InfoWindow({
            position: mapsMouseEvent.latLng,
          });
          infoWindow.setContent(
            JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
		  data = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
		  document.getElementById("loc").style.display = "none" ;
		  document.getElementById("all").style.display = "block" ;
		  
		  var word = data.split(",");
		  var lat = word[0].split(":");
		  document.getElementById("loc1").value = lat[1];
		  
		  
			var beforeGetLng = word[1].split(":");
			var lng = beforeGetLng[1].split("}");
		  document.getElementById("loc2").value = lng[0];
		  //alert(data);
          infoWindow.open(map);
			document.getElementById("map").style.display = "none";
			document.getElementById("main").style.visibility = "visible";
        });
      }
	  
	  function hide() {
			document.getElementById("map").style.display = "block";
			document.getElementById("main").style.visibility = "hidden";
		}
		
		function showGotMsg() {
			$('#gotMsg').modal('show');
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
					<i class="msg">
						<svg class="mx-4" onclick="showGotMsg()" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
						  <path fill-rule="evenodd" d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
						</svg>
					</i>
					
					<i onclick="logOut()" class="lOut">
						<svg   xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
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
	<div id="map"></div>
	<div class="row mx-1 my-1" id="main">
	  <div class="col-sm-4">
		<div class="card">
		  <div class="card-body">
			<h5 class="card-title" style="text-decoration : underline">Add New Harvest</h5>
			<p class="card-text">
				<form method="POST" action="../PHP/harvest.php">
				  <div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Your Name</label>
					<input type="text" class="form-control" name="name" value = "<?php  echo $_SESSION['Name']  ?>" aria-describedby="emailHelp" readonly>
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Your Address</label>
					<input type="text" class="form-control" name="location" value = "<?php echo $_SESSION['Address']  ?>" readonly>
				  </div>
				  
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Location of the Harvest</label><br>
					<i id="loc" >Select the location on Map. click here to <i class="click" onclick="hide()">Open Map</i></i>
					<i id="all" style="display : none">lat :  <input id="loc1"  name="locate1"></input> <br> lng :<input id="loc2"  name="locate2"></input></i>
				  </div>
				  
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Nearest City</label>
					<select name="City"  style="width : 100%;">
						 <option value="s">--Select the City--</option>
						 <option value="Ampara">Ampara</option>
						 <option value="Anuradhapura">Anuradhapura</option>
						 <option value="Badulla">Badulla</option>
						  <option value="Batticaloa">Batticaloa</option>
						 <option value="Colombo">Colombo</option>
						  <option value="Galle">Galle</option>
						  <option value="Gampaha">Gampaha</option>
						 <option value="Hambantota">Hambantota</option>
						  <option value="Jaffna">Jaffna</option>
						 <option value="Kalutara">Kalutara</option>
						  <option value="Kandy">Kandy</option>
						 <option value="Kegalle">Kegalle</option>
						 <option value="Kilinochchi">Kilinochchi</option>
						  <option value="Mannar">Mannar</option>
						 <option value="Matale">Matale</option>
						  <option value="Matara">Matara</option>
						 <option value="Monaragala">Monaragala</option>
						  <option value="Nuwara Eliya">Nuwara Eliya</option>
						 <option value="Polonnaruwa">Polonnaruwa</option>
						  <option value="Puttalam">Puttalam</option>
						 <option value="Ratnapura">Ratnapura</option>
						  <option value="Trincomalee">Trincomalee</option>
						  <option value="Vavuniya">Vavuniya</option>
						 
					</select>
				  </div>
				  
				   <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Type</label>
					<select name="Type"  style="width : 100%;">
						 <option value="s">--Select the product--</option>
						 <option value="Fruit">Fruit</option>
						 <option value="Vegitable">Vegitable</option>
					</select>
				  </div>
				  
				  
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Name of the Product</label>
					<input type="text" class="form-control" name="NameOTheProduct" >
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Quantity</label>
					<input type="text" class="form-control" name="Quantity" >
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Price</label>
					<input type="text" class="form-control" name="Price" >
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Contact Number</label>
					<input type="text" class="form-control" name="ContactNumber" >
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Your Report</label>
					<input type="text" class="form-control" name="Report" >
				  </div>
				  
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Image 1</label>
					<input type="file" class="form-control" id="file1"  onchange="fileUpload1()">
					<label for="exampleInputPassword1"id="pw1" class="form-label" style="display : none;">Please wait...</label>
					<input for="exampleInputPassword1" id="img1" name="link1" class="bordern form-label" style="display : none;" readonly></input>
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Image 2</label>
					<input type="file" class="form-control" id="file2" onchange="fileUpload2()" >
					<label for="exampleInputPassword1"id="pw2" class="form-label" style="display : none;">Please wait...</label>
					<input for="exampleInputPassword1" id="img2" name="link2" class="bordern form-label" style="display : none;" readonly></input>
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Image 3</label>
					<input type="file" class="form-control" id="file3" onchange="fileUpload3()">
					<label for="exampleInputPassword1"id="pw3" class="form-label" style="display : none;">Please wait...</label>
					<input for="exampleInputPassword1" id="img3" name="link3" class="bordern form-label" style="display : none;" readonly></input>
				  </div>
				  
				  <div class="text-center">
					<button type="submit" class="btnLogin" >Add Harvest</button>
				  </div>
				 
				</form>
			
			</p>
		  </div>
		</div>
	  </div>
	  <div class="col-sm-8">
		<div class="">
		  <div class="card-body">
			<?php
				$result = getHarvest();
				if($result == null){
					
				}
				else {
					while($row = $result->fetch_assoc())
					{
						if($row["Status"] == "Pending"){
							echo '<div class="shadow p-3 mb-5 bg-white rounded">
									<h5>'; echo $row["ProductName"]; echo '<span class="mx-2 text-white badge bg-info">Pending</span></h5>
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
										</svg>
										'; echo  $row["Name"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
										  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
										</svg>
										'; echo  $row["Address"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
										</svg>
										'; echo  $row["qty"];echo'
									</i>
									<h6 class="border-bottom my-2">Reports</h6>
									<div>
										';
									if($row["report"] == "" || $row["report"] == null) {
										echo "<i class=\"click\" onclick=\"showAddDialog('".$row["ID"]."')\">+Add Report</i></i>";
									}
									else {
										echo  $row["report"]; echo "
										
										<i>
										.	<svg class=\"text-danger\" type=\"button\" onclick=\"deleteDialogDisplay('".$row["ID"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
												<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
												<path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
											</svg>
											 | 
											<svg class=\"text-success\" type=\"button\" onclick=\"editDialogDisplay('".$row["ID"]."' , '".$row["report"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/>
											</svg>
										
										
										</i> ";
									}
									echo "</div>
									
								</div>";
						}
						else {
							if($row["Status"] == "Rejected"){
								echo '<div class="shadow p-3 mb-5 bg-white rounded">
									<h5> ' ; echo $row["ProductName"]  ; echo ' <span class="mx-2 badge bg-danger text-white">Rejected</span></h5>
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
										</svg>
										'; echo  $row["Name"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
										  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
										</svg>
										'; echo  $row["Address"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
										</svg>
										'; echo  $row["qty"];echo'
									</i>
									<h6 class="border-bottom my-2">Reports</h6>
									<div>
										';
									if($row["report"] == "" || $row["report"] == null) {
										echo "<i class=\"click\" onclick=\"showAddDialog('".$row["ID"]."')\">+Add Report</i></i>";
									}
									else {
										echo  $row["report"]; echo "
										
										<i>
										.	<svg class=\"text-danger\"  type=\"button\" onclick=\"deleteDialogDisplay('".$row["ID"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
												<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
												<path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
											</svg>
											 | 
											<svg class=\"text-success\" type=\"button\" onclick=\"editDialogDisplay('".$row["ID"]."' , '".$row["report"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/>
											</svg>
										
										
										</i> ";
									}
									echo "</div>
									
								</div>";
							}
							else {
								echo '<div class="shadow p-3 mb-5 bg-white rounded">
									<h5> ' ; echo $row["ProductName"]  ; echo '</h5>
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
										</svg>
										'; echo  $row["Name"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
										  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
										</svg>
										'; echo  $row["Address"];echo' |
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
										</svg>
										'; echo  $row["qty"];echo'
									</i>
									<h6 class="border-bottom my-2">Reports</h6>
									<div>
										';
									if($row["report"] == "" || $row["report"] == null) {
										echo "";
									}
									else {
										echo  $row["report"]; echo "
										
										<i>
										.	<svg class=\"text-danger\"  type=\"button\" onclick=\"deleteDialogDisplay('".$row["ID"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
												<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z\"/>
												<path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\"/>
											</svg>
											 | 
											<svg class=\"text-success\" type=\"button\" onclick=\"editDialogDisplay('".$row["ID"]."' , '".$row["report"]."')\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\"/>
											</svg>
										
										
										</i> ";
									}
									echo "</div>
									
								</div>";
							}
						}
					}			
				}
			
			
			?>
			
			
			
		  </div>
		</div>
	  </div>
	</div>

<!-- Modal -->
	<div class="modal fade" id="gotMsg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Messages</h5>
			<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
			
		  </div>
		  <div class="modal-body">
			<?php 
				$result = getMsg($_SESSION['ID']) ;
				$count = 1;
				if($result == null){
					
				}
				else {
					while($row = $result->fetch_assoc())
					{
						echo '<h6>Message ' ; echo $count ; echo '</h6>' ;
						$count = $count + 1;
						echo '<p> ' ; echo  $row["msg"] ; echo '</p><hr>';

					}
				}					
			
			
			?>
		  </div>
		  <div class="text-right p-1">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  </div>  
		</div>
	  </div>
	</div>

	
	
	<!-- Modal -->
	<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Updating Report</h5>
			<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
			
		  </div>
		    <form method="POST" action="../PHP/editHarvest.php">
			  <div class="modal-body">
				<input type="text" class="form-control" id="ReportDialog" name="val" >
				<input type="text" class="form-control" id="ReportDialogid" style="display : none" name="id">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save changes</button>
			  </div>
		    </form>  
		</div>
	  </div>
	</div>
	
	
	<!-- Modal -->
	<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add Report</h5>
			<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
			
		  </div>
		  <form method="POST" action="../PHP/editHarvest.php">
			  <div class="modal-body">
				<input type="text" class="form-control" id="AddReportDialog" name="val" >
				<input type="text" class="form-control" id="AddReportDialogid" style="display : none" name="id">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save changes</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	
	<!-- Modal -->
	<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete this report ...?</h5>
			<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
			
		  </div>
		  <form method="POST" action="../PHP/deleteHarvest.php">
			  <div class="modal-body">
				<input type="text" class="form-control" id="Deleteid" style="display : none" name="id">
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-danger">Yes</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>

		<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

		<!-- TODO: Add SDKs for Firebase products that you want to use
			 https://firebase.google.com/docs/web/setup#available-libraries -->
		<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

		<script>
		  // Your web app's Firebase configuration
		  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
		  var firebaseConfig = {
			apiKey: "AIzaSyBQPUCOILiSUbdEQaa7iYwrDkpxytNO8BU",
			authDomain: "images-9f28a.firebaseapp.com",
			databaseURL: "https://images-9f28a.firebaseio.com",
			projectId: "images-9f28a",
			storageBucket: "images-9f28a.appspot.com",
			messagingSenderId: "362505226905",
			appId: "1:362505226905:web:90c4df6186f969c6288608",
			measurementId: "G-XKZGYRXL2Y"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  firebase.analytics();
		</script>



		<script src="https://www.gstatic.com/firebasejs/7.22.0/firebase-storage.js"></script>
		
		
		<script>
		
			function fileUpload1() {
				 document.getElementById("pw1").style.display = "block";
				console.log("caled");
				var file = document.getElementById("file1").files[0];
				var filename = file.name;
				 var storageRef = firebase.storage().ref(filename)
				 storageRef.put(file).then(function () {
					 storageRef.getDownloadURL().then(function (result) {
						 console.log(result);
						 document.getElementById("img1").value = result;
						 document.getElementById("pw1").style.display = "none";
					 });

				 });
			}
			
			function fileUpload2() {
				 document.getElementById("pw2").style.display = "block";
				console.log("caled");
				var file = document.getElementById("file2").files[0];
				var filename = file.name;
				 var storageRef = firebase.storage().ref(filename)
				 storageRef.put(file).then(function () {
					 storageRef.getDownloadURL().then(function (result) {
						 console.log(result);
						 document.getElementById("img2").value = result;
						 document.getElementById("pw2").style.display = "none";
					 });

				 });
			}
			
			function fileUpload3() {
				 document.getElementById("pw3").style.display = "block";
				console.log("caled");
				var file = document.getElementById("file3").files[0];
				var filename = file.name;
				 var storageRef = firebase.storage().ref(filename)
				 storageRef.put(file).then(function () {
					 storageRef.getDownloadURL().then(function (result) {
						 console.log(result);
						 document.getElementById("img3").value = result;
						 document.getElementById("pw3").style.display = "none";
					 });

				 });
			}
		
		</script>
	
	
	<script>
		function editDialogDisplay(id , report) {
			$('#EditModal').modal('show');
			document.getElementById("ReportDialog").value = report;
			document.getElementById("ReportDialogid").value = id;
		}
			
		function showAddDialog(id) {
			$('#AddModal').modal('show');
			document.getElementById("AddReportDialogid").value = id;
		}
			
		function deleteDialogDisplay(id) {
			$('#DeleteModal').modal('show');
			document.getElementById("Deleteid").value = id;
		}
		

		
	</script>
  </body>
</html>