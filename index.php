<!DOCTYPE html>
<html>
	<head>
		<title> Student Login </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="styles.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>

	<body>
		<div id="flex">
			<fieldset>
			<legend> <button class="btn btn-primary"> Login </button> </legend>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect">Login as</label>
				  </div>

				  <select class="custom-select" id="inputGroupSelect">
					<option name="student" value="1" selected>Student</option>
					<option name="faculty" value="2">Faculty</option>
				  </select>
				</div>
				<br />

				<form name="f1" method="get" onsubmit="return checkRegnum();" action="studpage.php">
					<table id="student" cellspacing="5">
						<tr>
							<td> Register number </td>
							<td> <input type="text" name="regnum" id="regnum" required /> </td>
						</tr>

						<tr>
							<td colspan="2" align="center"> <input type="submit" class="btn btn-warning" /> </td>
						</tr>
					</table>
				</form>


				<form name="f2" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
					<table id="faculty" cellspacing="5">
						<tr>
							<td> Username </td>
							<td> <input type="text" name="username" id="username" required /> </td>
						</tr>

						<tr>
							<td> Password </td>
							<td> <input type="password" name="password" id="password" required /> <label for="password" class="fa fa-eye-slash"></label> </td>
						</tr>

						<tr>
							<td colspan="2" align="center">
								<h6 id="errorTR" style="color: red;">Invalid Details</h6>
							</td>
						</tr>

						<tr>
							<td colspan="2" align="center"> <input type="button" value="Login" onclick="loginFun()" class="btn btn-warning" /> </td>
						</tr>
					</table>
				</form>

		</fieldset>

		</div>
		
		<script>
			function loginFun()
			{
				if( window.XMLHttpRequest )
					a = new XMLHttpRequest();
				else
					a = new ActiveXObject("Microsoft.XMLHTTP");

				a.onreadystatechange = function()
				{
					if( a.readyState == 4 && a.status == 200 )
					{
						if(a.responseText == "failure" )
							document.getElementById('errorTR').style.display='block';
						else
							window.location.href='facultypnl.php';
					}
				};
				
				var username = document.getElementById("username").value;
				var password = document.getElementById("password").value;

				if( username.length > 0 && password.length > 0 )
				{
					var val = "username=" + username + "&password=" + password;
					a.open("POST",'login.php',true);
					a.setRequestHeader("content-type","application/x-www-form-urlencoded");
					a.send(val);
				}
			}
		</script>

		<script src="jscript.js"></script>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>

		<?php
			session_start();
			$uname = $_SESSION['username'];
			$pwd = $_SESSION['password'];
			if( isset($_SESSION['username']) && isset($_SESSION['password']) )
			{
				echo "<script>";
				echo "alert('" . "You are successfully logged out" . "')" ;
				echo "</script>";
			}
			session_destroy();
		?>
	</body>
</html>