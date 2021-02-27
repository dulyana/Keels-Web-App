<?php
require_once "Quary.php";

$result = getHarvest();
$friut = 0;
$vegitable = 0;

while($row = $result->fetch_assoc())
{
	if($row["Type"] == "Fruit"){
		$friut = $friut + 1;
	}
	else {
		$vegitable = $vegitable + 1;
	}

}

	$data = $vegitable."," .$friut ;
	echo $data;
?>