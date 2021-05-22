<?php
	session_start();

	if( isset($_REQUEST['username']) && isset($_REQUEST['password']) )
	{
		if( $_REQUEST['username'] && $_REQUEST['password'] == "123456" )
		{
			$_SESSION['username'] = $_REQUEST['username'];
			$_SESSION['password'] = $_REQUEST['password'];
			header("Location: admin1.php");
		}
	}
?>

<html>
	<head>
		<title>
			Session
		</title>
	</head>
	
	<body>
		<form action="session.php">
			Username <input type="text" name="username" /> <br />
			Password <input type="text" name="password" /> <br />
				<input type="submit" value="submit" />
		</form>
	</body>
</html>