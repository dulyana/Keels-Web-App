<?php
	
	require_once "Database.php";
	session_start();
	

	function login($Username , $Password) {
		$con = getConnection();
		$sql = "SELECT * from users WHERE NIC = '$Username' AND Password = '$Password'";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				$_SESSION['ID'] = $row["ID"];
				$_SESSION['Name'] = $row["Name"];
				$_SESSION['Address'] = $row["Address"];
				$_SESSION['Type'] = $row["Type"];
				
				if($row["Type"] == "farmer"){
					echo '<script>window.location.href = "../UI/farmer.php";</script>';
				}
				if($row["Type"] == "DoA"){
					echo '<script>window.location.href = "../UI/DoAKeeels.php";</script>';
				}
				if($row["Type"] == "Keels"){
					echo '<script>window.location.href = "../UI/DoAKeeels.php";</script>';
				}
			}
			 
		}
		else {
			echo '<script>alert("invaild username or password");</script>';
			 echo '<script>window.location.href = "../UI/login.html";</script>';
		}
				
	}
	
	
	function signUp($Name  , $Address , $NIC , $Password , $Type ) {
		$con = getConnection();
		$sql2 = "INSERT into users (ID , Name , Address , NIC , Password , Type ) 
		value(NULL , '$Name' , '$Address' ,  '$NIC' , '$Password'  , '$Type' ) ";
		if($con->query($sql2)) {
			login($NIC , $Password);		
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function msg($userID , $Msg) {
		$con = getConnection();
		$sql2 = "INSERT into msg (ID , userID , msg ) 
		value(NULL , '$userID' , '$Msg') ";
		if($con->query($sql2)) {
			echo '<script>alert("Message sent Successfully");</script>';
			echo '<script>window.location.href = "../UI/DoAKeeels.php";</script>';			
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function getMsg($userID) {
		$con = getConnection();
		$sql = "SELECT * from msg WHERE userID = '$userID'";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			return $result;			
		}
		else {
			echo "<div class=\"alert alert-warning\" role=\"alert\">
				  Nothing to Show.
				</div>";
		}
	}
	
	
	function addHarvest($userID , $Name  , $Address , $lat , $lng , $City , $Type , $ProductName , $qty , $Price, $ContactNumber , $Report , $img1 , $img2 , $img3 , $Status , $flag) {
		$con = getConnection();
		$sql2 = "INSERT into harvests (ID , userID , Name , Address ,lat , ing , City , Type , ProductName  , qty , Price , contactNumber , report ,  img1 , img2 , img3 , Status , flag) 
		value(NULL , $userID , '$Name'  , '$Address' , '$lat' , '$lng' , '$City' , '$Type' , '$ProductName' , '$qty' , '$Price' , '$ContactNumber' , '$Report' , '$img1' , '$img2' , '$img3 ' , '$Status' , '$flag') ";
		if($con->query($sql2)) {
			echo '<script>alert("Record Saved Successfully");</script>';
			echo '<script>window.location.href = "../UI/farmer.php";</script>';			
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function buyHarvest($ProductName , $qty , $price) {
		$con = getConnection();
		$sql2 = "INSERT into buyHavest (ID , ProductName , Qty , Price) 
		value(NULL , '$ProductName'  , '$qty' , '$price') ";
		if($con->query($sql2)) {
			echo '<script>alert("Record Saved Successfully");</script>';
			echo '<script>window.location.href = "../UI/inventory.php";</script>';			
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function AddHrvestWasted($ProductName , $qty ) {
		$con = getConnection();
		$sql2 = "INSERT into WastedHavest (ID , ProductName , Qty ) 
		value(NULL , '$ProductName'  , '$qty') ";
		if($con->query($sql2)) {
			echo '<script>alert("Record Saved Successfully");</script>';
			echo '<script>window.location.href = "../UI/inventory.php";</script>';			
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function getBuyHarvest() {
		$con = getConnection();
		$sql = "SELECT * from buyHavest";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			return $result;			
		}
		else {
			
		}
	}
	function getWastedHarvest() {
		$con = getConnection();
		$sql = "SELECT * from wastedhavest";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			return $result;			
		}
		else {
			
		}
	}
	
	
	function getHarvest() {
		$con = getConnection();
		$sql = "SELECT * from harvests";
		$result = $con->query($sql);
		
		if($result->num_rows > 0){
			return $result;			
		}
		else {
			echo "<div class=\"alert alert-warning\" role=\"alert\">
				  Nothing to Show.
				</div>";
		}
	}
	
	function getHarvestOne($ID) {
		unset($_SESSION['HReport']);
		$con = getConnection();
		$sql = "SELECT * from harvests WHERE ID = '$ID'";
		$result = $con->query($sql);
		$data = "";
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc())
			{
				$data = $row["ProductName"]."," .$row["report"].",".$row["contactNumber"].",".$row["img1"].",".$row["img2"].",".$row["img3"].",".$row["userID"] .",".$row["flag"] .",".$row["ID"]  ; //"'' - '$row[\"contactNumber\"]' " ;//+ "," + $row["img1"] + "," + $row["img2"] + "," + $row["img3"] '; 
				return $data;
			}		
		}
		else {
			
		}
	}
	
	
	
	function editHarvest($ID , $Val) {
		$con = getConnection();
		$sql = "UPDATE harvests SET report = '$Val'  WHERE ID = '$ID'";
		
		if($con->query($sql)){
			echo '<script>window.location.href = "../UI/farmer.php";</script>';
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function setFlagEdit($flag , $id) {
		$con = getConnection();
		$sql = "UPDATE harvests SET flag = '$flag'  WHERE ID = '$id'";
		
		if($con->query($sql)){
			echo '<script>window.location.href = "../UI/DoAKeeels.php";</script>';
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function editHarvestStatus($ID , $Val) {
		$con = getConnection();
		$sql = "UPDATE harvests SET Status = '$Val'  WHERE ID = '$ID'";
		
		if($con->query($sql)){
			echo '<script>window.location.href = "../UI/newRequests.php";</script>';
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
	
	function deleteHarvest($ID) {
		$con = getConnection();
		$sql = "DELETE from harvests WHERE ID = '$ID'";
		
		if($con->query($sql)){
			echo '<script>window.location.href = "../UI/farmer.php";</script>';
		}
		else {
			die(trigger_error(mysqli_error($con)));
		}
	}
?>