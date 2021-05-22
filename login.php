<?php
	if( isset($_REQUEST['username']) && isset($_REQUEST['password']) )
	{
		$uname = $_REQUEST['username'];
		$pwd =  $_REQUEST['password'];
		$connection = mysqli_connect("localhost","root","","sms");

		if( !$connection )
			die("unable to connect ").mysqli_error();

		$sql_1 = "SELECT * FROM credentials WHERE username='" . $uname . "';";
		$result_1 = mysqli_query($connection,$sql_1);

		if( mysqli_num_rows($result_1) > 0 )
		{
			$sql_2 = "SELECT * FROM credentials WHERE password='" . $pwd . "';";
			$result_2 = mysqli_query($connection,$sql_2);

			if( mysqli_num_rows($result_2) > 0 )
			{
				echo "success";

				session_start();
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $pwd;

				header('Location: facultypnl.php/');
			}
			else
				echo "failure";
		}
		else
			echo "failure";

		mysqli_close($connection);
	}
?>