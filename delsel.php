 <?php
	if( isset($_REQUEST['delregno']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		$delregnum = $_REQUEST['delregno'];

		if( !$connection )
			die("Connection error ").mysqli_error();

		$sql = "SELECT * FROM stupersonal WHERE regnum=" . $delregnum . ";" ;
		$result = mysqli_query($connection,$sql);

		if( mysqli_num_rows($result) > 0 )
		{
			$row = mysqli_fetch_assoc($result);

			echo "<table cellpadding='20' id='deltable'>";
				echo "<tr>";
					echo "<td>" . "Register Number" . "</td>";
					echo "<td>" . $row['regnum'] . "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>" . "Name" . "</td>";
					echo "<td>" . $row['sname'] . "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>" . "Roll number" . "</td>";
					echo "<td>" . $row['roll'] . "</td>";
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "DOB" . "</td>";
					echo "<td>" . $row['dob'] . "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>" . "Father's name" . "</td>";
					echo "<td>" . $row['fname'] . "</td>";
				echo "</tr>";

			echo "</table>";

			echo "<button id='delbtn' onclick='delFun()' style='display: block;margin-top: 20px;margin-left: auto;margin-right: auto;' class='btn btn-danger'>";
				echo "Delete <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
				  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
				</svg>";
			echo "</button>";
		}
		else
			echo "failure";
	}
?>