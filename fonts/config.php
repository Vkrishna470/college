<?php

	$host="localhost";
	$user="root";
	$password="";
	/*$dbname="appliance and electronics devices";*/
	$dbname="gms";
	/*To check connection in xamp*/
	$connection=mysqli_connect($host,$user,$password,$dbname);
	if(!$connection)
	{
		/*echo "failed";*/
		die(mysql_error($connection));
	}
	
?>
