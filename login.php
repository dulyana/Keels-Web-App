<?php
require_once "Quary.php";



$Username = $_POST['NIC'];
$Password =  $_POST['Password'];

if($Username == "Admin" && $Password == "123"){
	echo '<script>window.location.href = "../UI/webMaster.html";</script>';
}
else {
	login($Username , $Password);
}

?>