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
			  <a class="nav-link active" aria-current="page" href="./DoAKeeels.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="./newRequests.php">New Requests</a>
			</li>
			<?php 
				if($_SESSION["Type"] == "DoA") {
					echo "<li class=\"nav-item\">
						  <a class=\"nav-link\" href=\"./summery.php\">Summery</a>
						</li>";
				}
				else {
					echo "<li class=\"nav-item\">
						  <a class=\"nav-link\" href=\"./inventory.php\">Inventory</a>
						</li>";
				}
			?>
				
				
			
		  </ul>
		</div>
	  </div>
	</nav>
		<div class="col-sm-3 " style="float : left">
			<?php
				$result = getHarvest();
				$count = 0;
				if($result == null){
					
				}
				else {
					while($row = $result->fetch_assoc())
					{
						if($row["Status"] == "Accepted"){
							$count = $count + 1;
							echo "<div class=\"border-bottom\"  style=\"margin-bottom : 2%;\"  >
									<div class=\"p-2\" style=\"margin-bottom : 2%;\" type=\"submit\"  onclick=\"openDialogBox('".$row["lat"]."' , '".$row["ing"]."' , '".$row["ID"]."' )\" >
										<h5 class=\"text-primary\">"; echo $row["ProductName"] ; echo "</h5>
										<i>
											<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
											</svg>
											"; echo $row["Name"] ; echo " |
											<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z\"/>
											  <path fill-rule=\"evenodd\" d=\"M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
											</svg>
											"; echo $row["Address"] ; echo " |
											<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bag\" viewBox=\"0 0 16 16\">
											  <path fill-rule=\"evenodd\" d=\"M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z\"/>
											</svg>
											"; echo $row["qty"] ; echo "
										</i>
										<h6 class=\"text-success\">Price : "; echo $row["Price"] ; echo " LKR</h6>
										
									</div>
								</div>";
						}
						
					}
					if($count == 0) {
						echo "<div class=\"my-2 alert alert-warning\" role=\"alert\">
								  Nothing to Show.
								</div>";
					}
				}
			?>
		</div>
		<div class="col-sm-9" id="map" style="float : left">
					
		</div>
	
	
	<script>
		var val = "";
		function openDialogBox(lat , lng , id) {
			localStorage.setItem('id', id);
			showOnMap(parseFloat(lat) , parseFloat(lng));
			 $.ajax({
				url: '../PHP/getDataToDialogBox.php',
				type: 'POST',
				data: {id:id},
				success: function(data) {
					console.log(data); // Inspect this in your console
					var word = data.split(",");
					document.getElementById("title").innerHTML = word[0];
					document.getElementById("report").innerHTML = word[1];
					document.getElementById("contactNumber").innerHTML = word[2];
					document.getElementById("img1").src = word[3];
					document.getElementById("img2").src = word[4];
					document.getElementById("img3").src = word[5];
					document.getElementById("userIdSelected").innerHTML = word[6];
					document.getElementById("flagID").innerHTML = word[8];
					
					if(parseInt(word[7]) == 0){
						document.getElementById("fm1").style.display = "block";
					}
					if(parseInt(word[7]) == 1){
						document.getElementById("f1").style.display = "block";
						document.getElementById("f1").style.color = "red";
						document.getElementById("flbl").innerHTML = "Bad"
					}
					if(parseInt(word[7]) == 2){
						document.getElementById("f1").style.display = "block";
						document.getElementById("f1").style.color = "green";
						document.getElementById("flbl").innerHTML = "Good"
					}
					
					$('#detailsModel').modal('show');
				} 
			});
		}

		function close() {
			$('#detailsModel').modal('hide');
		}

		function sendMessage() {
			$('#detailsModel').modal('hide');
			$('#msg').modal('show');
			var id = document.getElementById("userIdSelected").innerHTML
			document.getElementById("idForMsg").value = id;
		}

		function showNumber() {
			$('#detailsModel').modal('hide');
			$('#call').modal('show');
			var number = document.getElementById("contactNumber").innerHTML
			document.getElementById("callNumber").innerHTML = number;
		}
		function openFlagModal() {
			$('#detailsModel').modal('hide');
			$('#flagM').modal('show');
			var id = document.getElementById("flagID").innerHTML
			document.getElementById("ifForFlagM").value = id;
		}
		
	
		
	</script>
	
		


	<div class="modal fade" id="call" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
		<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>
      </div>
      <div class="modal-body">
			<label id="callNumber"></label>
      </div>
     
    </div>
  </div>
</div>


<div class="modal fade" id="msg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
        <svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>
	  </div>
      <div class="modal-body">
		<form method="POST" action="../PHP/sendMsg.php">
			<label for="exampleInputPassword1" class="form-label">Enter your Message here</label>
			<input type="text" class="form-control" name="msg" >
			<input type="text" class="form-control" id="idForMsg" name="idMsgSent" style="display : none">
		
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-success">Send Message</button>
		  </div>
		</form>
    </div>
  </div>
</div>
	
	
	
	
<div class="modal fade" id="flagM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">set Flag</h5>
        <svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>
	  </div>
      <div class="modal-body">
		<form method="POST" action="../PHP/setFlag.php">
			<label for="exampleInputPassword1" class="form-label">select the flag color</label>
			<select name="flag" id="items" style="width : 100%;">
				<option value="s">--Select the product--</option>
				<option value="1">Red</option>
				<option value="2">Green</option>
			</select>	
			<input type="text" class="form-control" id="ifForFlagM" name="nameforSetFlag" style="display : none">
		
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-success">Save</button>
		  </div>
		</form>
    </div>
  </div>
</div>



	<div class="modal fade"  id="detailsModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-bottom" style="min-width : 400px;">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="title">Modal Title</h5>
					<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
					  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
					</svg>
			
				</div>
				
				<div class="modal-body p-3">
				   <h6 class="">Reports</h6>
					<div >
						<p id="report"></p>
						<p id="flagID" style="display : none;"></p>
						<p id="userIdSelected" style="display : none;"></p>
						<p id="contactNumber" style="display : none;"></p>
					</div>
					<div class="row row-cols-1 row-cols-md-3 g-4">
					  <div class="col">
						<div class="card">
						  <img src="" class="card-img-top" id="img1" alt="...">
						 
						</div>
					  </div>
					  <div class="col">
						<div class="card">
						 <img src="" class="card-img-top" id="img2" alt="...">
						  
						</div>
					  </div>
					  <div class="col">
						<div class="card">
						  <img src="" class="card-img-top" id="img3" alt="...">
						  
						</div>
					  </div>
					  
					</div>
					<p id="fm1" class="text-primary" style="display : none ; text-decoration : underline ; cursor : pointer" onclick="openFlagModal()">put flag now</p>
				
					<i id="f1" style="display : none">
						<svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
							<path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
						</svg> | <label id="flbl"></label>
					</i>
				
				
				
				</div>
				<div class="p-3 border-top mx-2 text-left">
					<i>
						<svg type="button" class="text-success" onclick="showNumber()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
						</svg>
						<svg type="button" class="mx-4 text-danger" onclick="sendMessage()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
						  <path fill-rule="evenodd" d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
						</svg>
					</i>
				</div>
			</div>
		</div>
	</div>

  </body>
</html>