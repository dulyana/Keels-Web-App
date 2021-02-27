<?php
require_once "Quary.php";
       
$ProductName = $_POST['ProductName'];
$qty =  $_POST['qty'];
$price = $_POST['price'];



buyHarvest($ProductName , $qty , $price);


?>