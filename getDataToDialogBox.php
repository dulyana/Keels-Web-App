<?php
require_once "Quary.php";

$ID = $_POST['id'];

$report = getHarvestOne($ID);

	echo $report;
?>