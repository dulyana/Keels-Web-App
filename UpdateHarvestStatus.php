<?php
require_once "Quary.php";



$ID = $_POST['id'];
$Val =  $_POST['Status'];

editHarvestStatus($ID , $Val);

?>