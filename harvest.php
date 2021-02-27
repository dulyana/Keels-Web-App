<?php
require_once "Quary.php";


$Name = $_POST['name'];
$userID = $_SESSION['ID'] ;
$Address =  $_POST['location'];
$lat = $_POST['locate1'];
$lng = $_POST['locate2'];
$City = $_POST['City'];
$Type = $_POST['Type'];
$ProductName = $_POST['NameOTheProduct'];
$qty = $_POST['Quantity'];
$Price = $_POST['Price'];
$ContactNumber = $_POST['ContactNumber'];
$Report = $_POST['Report'];
$img1 = $_POST['link1'];
$img2 = $_POST['link2'];
$img3 = $_POST['link3'];
$Status = "Pending";
$flag = 0;

addHarvest($userID , $Name  , $Address , $lat , $lng , $City , $Type , $ProductName , $qty , $Price, $ContactNumber , $Report , $img1 , $img2 , $img3 , $Status , $flag)


?>