<?php
	if( isset($_REQUEST['regnum']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		$regnum = $_REQUEST['regnum'];

		if( !$connection )
			die("Connection error ").mysqli_error();

		$sql = "SELECT * FROM stupersonal WHERE regnum=" . $regnum . ";" ;
		$result = mysqli_query($connection,$sql) ;

		if( mysqli_num_rows($result) > 0 )
		{
			$row = mysqli_fetch_assoc($result);

			echo "<table cellpadding='14'>";

			echo "<tr>";
				echo "<td>" . "Register number" . "</td>" ;
				echo "<td>" . "<input type='text' name='ernum' id='ernum' style='border: 0;outline: none;' readonly value=' " . $row['regnum'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Name" . "</td>" ;
				echo "<td>" . "<input type='text' name='esname' id='esname' value=' " . $row['sname'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Roll" . "</td>" ;
				echo "<td>" . "<input type='text' name='eroll' id='eroll' value=' " .  $row['roll'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "DOB" . "</td>" ;
				echo "<td>" . "<input type='date' name='edob' id='edob' value='" .  $row['dob'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Gender" . "</td>" ;
				echo "<td>" . "<input type='text' name='egender' id='egender' value=' " .  $row['gender'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Father's name" . "</td>" ;
				echo "<td>" . "<input type='text' name='efname' id='efname' value=' " .  $row['fname'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "HSC Marks" . "</td>" ;
				echo "<td>" . "<input type='text' name='ehscmarks' id='ehscmarks' value=' " .  $row['hscmarks'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "SSLC Marks" . "</td>" ;
				echo "<td>" . "<input type='text' name='esslcmarks' id='esslcmarks' value=' " .  $row['sslcmarks'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Father's Occupation" . "</td>" ;
				echo "<td>" . "<input type='text' name='efocc' id='efocc' value=' " .  $row['focc'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td>" . "Aadhar number" . "</td>" ;
				echo "<td>" . "<input type='text' name='eaadhar' id='eaadhar' value=' " .  $row['aadhar'] . "' /> </td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td colspan='2' align='center'>" . "<input type='button' id='prsnlsubmitbtn' onclick='updateFun()' value='save changes' class='btn btn-warning' >" . "</td>";
			echo "</tr>";

			echo "</table>";
		}
		else
			echo "Error !";

		mysqli_close($connection);
	}

	if( isset($_REQUEST['ernum']) && isset($_REQUEST['esname']) && isset($_REQUEST['eroll']) && isset($_REQUEST['edob']) && isset($_REQUEST['egender'])
			&& isset($_REQUEST['efname']) && isset($_REQUEST['ehscmarks']) && isset($_REQUEST['esslcmarks']) && isset($_REQUEST['efocc']) && isset($_REQUEST['eaadhar']) )
			{
				$connection = mysqli_connect("localhost","root","","sms");

				if( !$connection )
					die("Connection error ").mysqli_error();

			 	$ernum = $_REQUEST['ernum'];
			 	$esname = $_REQUEST['esname'];
			 	$eroll = $_REQUEST['eroll'];
			 	$edob = $_REQUEST['edob'];
			 	$egender = $_REQUEST['egender'];
			 	$efname = $_REQUEST['efname'];
			 	$ehscmarks = $_REQUEST['ehscmarks'];
			 	$esslcmarks = $_REQUEST['esslcmarks'];
			 	$efocc = $_REQUEST['efocc'];
			 	$eaadhar = $_REQUEST['eaadhar'];


				$sql = "SELECT * FROM stupersonal WHERE regnum='" . $ernum . "';" ;
				$result = mysqli_query($connection,$sql);

				if( mysqli_num_rows($result) > 0 )
				{
					$UpdateSQL = "UPDATE stupersonal SET sname='{$esname}',roll='{$eroll}',dob='{$edob}',gender='{$egender}',fname='{$efname}',hscmarks={$ehscmarks},sslcmarks={$esslcmarks},focc='{$efocc}',aadhar='{$eaadhar}' WHERE regnum='{$ernum}';";
					if( mysqli_query($connection,$UpdateSQL) )
					{
						$OneSqL = "UPDATE internal_one set name='{$esname}' WHERE regnum='{$ernum}';";
						$TwoSqL = "UPDATE internal_two set name='{$esname}' WHERE regnum='{$ernum}';";
						$ThreeSqL = "UPDATE internal_three set name='{$esname}' WHERE regnum='{$ernum}';";
						$SemesterSql = "UPDATE semester set name='{$esname}' WHERE regnum='{$ernum}';";
						mysqli_query($connection,$OneSqL);
						mysqli_query($connection,$TwoSqL);
						mysqli_query($connection,$ThreeSqL);
						mysqli_query($connection,$SemesterSql);
						echo "Changes Saved";
					}
					else
						echo "Error in updating data";
				}
				else
					echo "<h4 style='color: red'>Error Occured !</h4>";

				mysqli_close($connection);
			}
?>