<?php
require_once "Quary.php";


$flag = $_POST['flag'];
$id = $_POST['nameforSetFlag'] ;

setFlagEdit($flag , $id);
?>