<?php
require_once "Quary.php";
       
$Name = $_POST['Name'];
$Address =  $_POST['Address'];
$NIC = $_POST['NIC'];
$Password =  $_POST['Password1'];
$Type = "farmer";


signUp($Name , $Address , $NIC, $Password , $Type);

echo ($Name );

?>