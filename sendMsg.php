<?php
require_once "Quary.php";
       
$userID = $_POST['idMsgSent'];
$Msg =  $_POST['msg'];


msg($userID , $Msg);

?>