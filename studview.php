<?php
	if( isset( $_REQUEST['regnum'] ) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		$regnum = $_REQUEST['regnum'];

		if( !$connection )
			die("Connection error ").mysqli_error();

		$sql_1 = "SELECT * FROM internal_one WHERE regnum=" . $regnum . ";" ;
		$result_1 = mysqli_query($connection,$sql_1);

		$sql_2 = "SELECT * FROM internal_two WHERE regnum=" . $regnum . ";" ;
		$result_2 = mysqli_query($connection,$sql_2);

		$sql_3 = "SELECT * FROM internal_three WHERE regnum=" . $regnum . ";" ;
		$result_3 = mysqli_query($connection,$sql_3);

		$sql_4 = "SELECT * FROM semester WHERE regnum=" . $regnum . ";" ;
		$result_4 = mysqli_query($connection,$sql_4);

		if( mysqli_num_rows($result_1) > 0 )
		{
			echo "<table cellpadding='16'>";
			while( $row_1 = mysqli_fetch_assoc($result_1) )
			{
				echo "<tr>";
					echo "<td>" . "Reg number" . "</td>" ;
					echo "<td>" . $row_1['regnum'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Name" . "</td>" ;
					echo "<td>" . $row_1['name'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ANT" . "</td>" ;
					echo "<td>" . $row_1['ant'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "MPMC" . "</td>" ;
					echo "<td>" . $row_1['mpmc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "OOAD" . "</td>" ;
					echo "<td>" . $row_1['ooad'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "TOC" . "</td>" ;
					echo "<td>" . $row_1['toc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "CN" . "</td>" ;
					echo "<td>" . $row_1['cn'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ISE" . "</td>" ;
					echo "<td>" . $row_1['ise'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Average" . "</td>" ;
					echo "<td>" . $row_1['avg'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Result" . "</td>" ;
					echo "<td>" . $row_1['result'] . "</td>" ;
				echo "</tr>";
			}
			echo "</table>"
		}
		else
			echo "<h4 style='color: red'>Unknown error occured in showing internal one !</h4>";



		if( mysqli_num_rows($result_2) > 0 )
		{
			echo "<table cellpadding='16'>";
			while( $row_2 = mysqli_fetch_assoc($result_2) )
			{
				echo "<tr>";
					echo "<td>" . "Reg number" . "</td>" ;
					echo "<td>" . $row_2['regnum'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Name" . "</td>" ;
					echo "<td>" . $row_3['name'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ANT" . "</td>" ;
					echo "<td>" . $row_2['ant'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "MPMC" . "</td>" ;
					echo "<td>" . $row_2['mpmc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "OOAD" . "</td>" ;
					echo "<td>" . $row_2['ooad'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "TOC" . "</td>" ;
					echo "<td>" . $row_2['toc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "CN" . "</td>" ;
					echo "<td>" . $row_2['cn'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ISE" . "</td>" ;
					echo "<td>" . $row_2['ise'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Average" . "</td>" ;
					echo "<td>" . $row_2['avg'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Result" . "</td>" ;
					echo "<td>" . $row_2['result'] . "</td>" ;
				echo "</tr>";
			}
			echo "</table>"
		}
		else
			echo "<h4 style='color: red'>Unknown error occured in showing internal two !</h4>";
		
		
		
		
		if( mysqli_num_rows($result_3) > 0 )
		{
			echo "<table cellpadding='16'>";
			while( $row_3 = mysqli_fetch_assoc($result_3) )
			{
				echo "<tr>";
					echo "<td>" . "Reg number" . "</td>" ;
					echo "<td>" . $row_3['regnum'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Name" . "</td>" ;
					echo "<td>" . $row_3['name'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ANT" . "</td>" ;
					echo "<td>" . $row_3['ant'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "MPMC" . "</td>" ;
					echo "<td>" . $row_3['mpmc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "OOAD" . "</td>" ;
					echo "<td>" . $row_3['ooad'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "TOC" . "</td>" ;
					echo "<td>" . $row_3['toc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "CN" . "</td>" ;
					echo "<td>" . $row_3['cn'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ISE" . "</td>" ;
					echo "<td>" . $row_3['ise'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Average" . "</td>" ;
					echo "<td>" . $row_3['avg'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Result" . "</td>" ;
					echo "<td>" . $row_3['result'] . "</td>" ;
				echo "</tr>";
			}
			echo "</table>"
		}
		else
			echo "<h4 style='color: red'>Unknown error occured in showing internal three !</h4>";
	}
	
	
	
	
	if( mysqli_num_rows($result_4) > 0 )
		{
			echo "<table cellpadding='16'>";
			while( $row_4 = mysqli_fetch_assoc($result_4) )
			{
				echo "<tr>";
					echo "<td>" . "Reg number" . "</td>" ;
					echo "<td>" . $row_4['regnum'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Name" . "</td>" ;
					echo "<td>" . $row_4['name'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ANT" . "</td>" ;
					echo "<td>" . $row_4['ant'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "MPMC" . "</td>" ;
					echo "<td>" . $row_4['mpmc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "OOAD" . "</td>" ;
					echo "<td>" . $row_4['ooad'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "TOC" . "</td>" ;
					echo "<td>" . $row_4['toc'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "CN" . "</td>" ;
					echo "<td>" . $row_4['cn'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "ISE" . "</td>" ;
					echo "<td>" . $row_4['ise'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "MPMC LAB" . "</td>" ;
					echo "<td>" . $row_4['mpmclab'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "NET LAB" . "</td>" ;
					echo "<td>" . $row_4['netlab'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "OOAD LAB" . "</td>" ;
					echo "<td>" . $row_4['ooadlab'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "GPA" . "</td>" ;
					echo "<td>" . $row_4['gpa'] . "</td>" ;
				echo "</tr>";
				
				echo "<tr>";
					echo "<td>" . "Result" . "</td>" ;
					echo "<td>" . $row_4['result'] . "</td>" ;
				echo "</tr>";
			}
			echo "</table>"
		}
		else
			echo "<h4 style='color: red'>Unknown error occured in showing semester !</h4>";
?>