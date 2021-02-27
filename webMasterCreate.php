<?php
require_once "Quary.php";
       
$Name = $_POST['Name'];
$Address =  $_POST['Location'];
$NIC = $_POST['Username'];
$Password =  $_POST['Password1'];
$Type = $_POST['Type'];


signUp($Name , $Address , $NIC, $Password , $Type);


?>