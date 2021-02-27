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
    	
	
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	
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
			  <a class="nav-link " aria-current="page" href="./DoAKeeels.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="./newRequests">New Requests</a>
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
		<div class="nav justify-content-center my-4">
			<?php
						$result = getHarvest();
						$count = 0;
						if($result == null){
							
						}
						else {
							while($row = $result->fetch_assoc())
							{
								if($row["Status"] == "Pending"){
									$count = $count + 1;
									echo "<div class=\"shadow-lg p-3 mb-5 bg-white rounded w-75 my-2\">
											<h5>"; echo $row["ProductName"]; echo " (" ; echo $row["qty"]; echo ")</h5>
											<h6 class=\"text-success\">"; echo $row["Price"]; echo " LKR</h5>
											<p><u>Report</u><br>
											" ; echo $row["report"]; echo "</p >
											<i>
												<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
												  <path fill-rule=\"evenodd\" d=\"M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
												</svg>
												"; echo  $row["Name"];echo " |
												<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-geo-alt\" viewBox=\"0 0 16 16\">
												  <path fill-rule=\"evenodd\" d=\"M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z\"/>
												  <path fill-rule=\"evenodd\" d=\"M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>
												</svg>
												"; echo  $row["Address"];echo " |
												<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bag\" viewBox=\"0 0 16 16\">
												  <path fill-rule=\"evenodd\" d=\"M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z\"/>
												</svg>
												" ; echo  $row["qty"];echo "
											</i><br><br>
											<button type=\"button\" class=\"btn btn-success\" onclick=\"accept("; echo $row["ID"]; echo ")\">Accept</button>
											<button type=\"button\" class=\"btn btn-danger\" onclick=\"reject("; echo $row["ID"]; echo ")\">Reject</button>
											
											
											
										</div>";
								}
								
							}
							if($count == 0) {
								echo "<div class=\"my-2 alert alert-warning w-50\" role=\"alert\">
										  No new request to show.
										</div>";
							}
						}
					?>
		</div>
		
		
		<script>
		function accept(id) {
			$('#acceptModel').modal('show');
			document.getElementById("idUpdate").value = id;
			document.getElementById("idUpdateStatus").value = "Accepted";
		}
		
		function reject(id) {
			$('#rejectModel').modal('show');
			document.getElementById("idUpdateD").value = id;
			document.getElementById("idUpdateStatusD").value = "Rejected";
		}

		
	</script>
	
	
	<!-- Modal -->
<div class="modal fade" id="acceptModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
		<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>
      </div>
      <div class="modal-body">
        Are you sure want to accept this ?
      </div>
      <div class="modal-footer">
		<form method="POST" action="../PHP/UpdateHarvestStatus.php">
			<input type="text" id="idUpdate" style="display : none" name="id">
			<input type="text" id="idUpdateStatus" style="display : none" name="Status">
			<button type="submit" class="btn btn-success">Yes</button>
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
		</form>
      </div>
    </div>
  </div>
</div>



	<!-- Modal -->
<div class="modal fade" id="rejectModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
		<svg type="button" class="btn-close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" data-bs-dismiss="modal" aria-label="Close">
			<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
		</svg>
      </div>
      <div class="modal-body">
        Are you sure want to reject this ?
      </div>
      <div class="modal-footer">
		<form method="POST" action="../PHP/UpdateHarvestStatus.php">
			<input type="text" id="idUpdateD" style="display : none" name="id">
			<input type="text" id="idUpdateStatusD" style="display : none" name="Status">
			<button type="submit" class="btn btn-danger">Yes</button>
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
		</form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>