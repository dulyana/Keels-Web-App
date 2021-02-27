<?php

	function getConnection() {
		// Create connection
		$con = new mysqli("localhost:3306","root","" , "keels" );
		// Check connection
		if ($con->connect_error)
		{
			die("Connection failed:" . $con->connect_error);
			
		} 
		else {
			return $con ;	
		}	
	}

?>