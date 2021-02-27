<?php
require_once "Quary.php";
       
$ProductName = $_POST['products'];
$qty =  $_POST['qty'];


AddHrvestWasted($ProductName , $qty );


?>