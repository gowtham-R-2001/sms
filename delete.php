<?php
	if( isset($_REQUEST['delregno']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		$delregnum = $_REQUEST['delregno'];

		if( !$connection )
			die("Connection error ").mysqli_error();

		$Delsql = "DELETE FROM `stupersonal` WHERE regnum=" . $delregnum . ";" ;

		if( mysqli_query($connection,$Delsql) )
			echo "success";
		else
			echo "failure";
	}
?>