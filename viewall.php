<?php
		$connection = mysqli_connect("localhost","root","","sms");

		if( !$connection )
			die("Connection error ").mysqli_error();

		if( $_REQUEST['opt'] == "1" )
		{
			$sql = "SELECT * FROM stupersonal WHERE 1;";
			$result = mysqli_query($connection,$sql);

			if( mysqli_num_rows($result) > 0 )
			{
				echo "<table id='prsnltable' class='table table-hover' style='margin-top: 50px;' cellpadding='17'>";

				echo "<th>" . "Register Number" . "</th>";
				echo "<th>" . "Name" . "</th>";
				echo "<th>" . "Roll number" . "</th>";
				echo "<th>" . "DOB" . "</th>";
				echo "<th>" . "Gender" . "</th>";
				echo "<th>" . "Father's name" . "</th>";
				echo "<th>" . "HSC marks" . "</th>";
				echo "<th>" . "SSLC marks" . "</th>";
				echo "<th>" . "Father's occupation" . "</th>";
				echo "<th>" . "Aadhar number" . "</th>";

				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr class='rowData'>";
						echo "<td>" . $row['regnum'] . "</td>";
						echo "<td>" . $row['sname'] . "</td>";
						echo "<td>" . $row['roll'] . "</td>";
						echo "<td>" . $row['dob'] . "</td>";
						echo "<td>" . $row['gender'] . "</td>";
						echo "<td>" . $row['fname'] . "</td>";
						echo "<td>" . $row['hscmarks'] . "</td>";
						echo "<td>" . $row['sslcmarks'] . "</td>";						
						echo "<td>" . $row['focc'] . "</td>";
						echo "<td>" . $row['aadhar'] . "</td>";
					echo "</tr>";
				}

				echo "</table>";
			}
			else
				echo "<h4 style='color: red;margin-top: 30px;'> No data exists </h4>";
		}
?>