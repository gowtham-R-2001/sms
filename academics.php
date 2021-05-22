<?php
	if( isset($_REQUEST['academics']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		if( !$connection )
			die("Connection error ").mysqli_error();

		if($_REQUEST['academics'] == 1)
		{
			$oneSql = "SELECT * FROM internal_one WHERE 1;";
			$oneResult = mysqli_query($connection,$oneSql);

			echo "<table id='rowClick' class='table table-hover' cellpadding='15' style='margin-top: 50px;'>";
			echo "<th style='background: palegoldenrod;'>" . "Register number" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Name" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ANT" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "CN" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "MPMC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "TOC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "OOAD" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ISE" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Average" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Result" . "</th>";

			while( $row = mysqli_fetch_assoc($oneResult) )
			{
				echo "<tr style='border-bottom: 1px solid #000;'>";
					echo "<td>" . $row['regnum'] . "</td>" ;
					echo "<td>" . $row['name'] . "</td>" ;
						
					if( $row['ant'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['ant'] . "' /></td>" ;

					if( $row['cn'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['cn'] . "' /></td>" ;

					if( $row['mpmc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['mpmc'] . "' /></td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['toc'] . "' /></td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['ooad'] . "' /></td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td><input type='text' onclick='getId(this,1)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,1)' size='5' value='" .  $row['ise'] . "' /></td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;
				echo "</tr>";

				echo "<tr class='cls' style='border: 0;width: 90px; height: 70px'>";
					echo "<td>" . "<button class='btn btn-warning saveBtn'>Save</button>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['academics'] == 2)
		{
			$twoSql = "SELECT * FROM internal_two WHERE 1;";
			$twoResult = mysqli_query($connection,$twoSql);

			echo "<table id='rowClick2' class='table table-hover' cellpadding='15' style='margin-top: 50px;'>";
			echo "<th style='background: palegoldenrod;'>" . "Register number" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Name" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ANT" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "CN" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "MPMC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "TOC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "OOAD" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ISE" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Average" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Result" . "</th>";

			while( $row = mysqli_fetch_assoc($twoResult) )
			{
				echo "<tr style='border-bottom: 1px solid #000;'>";
					echo "<td>" . $row['regnum'] . "</td>" ;
					echo "<td>" . $row['name'] . "</td>" ;

					if( $row['ant'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['ant'] . "' /></td>" ;

					if( $row['cn'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['cn'] . "' /></td>" ;

					if( $row['mpmc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['mpmc'] . "' /></td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['toc'] . "' /></td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['ooad'] . "' /></td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td><input type='text' onclick='getId(this,2)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,2)' size='5' value='" .  $row['ise'] . "' /></td>" ;

					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;

				echo "</tr>";

				echo "<tr class='cls2' style='border: 0;width: 90px; height: 70px'>";
					echo "<td>" . "<button class='btn btn-warning saveBtn2'>Save</button>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['academics'] == 3)
		{
			$threeSql = "SELECT * FROM internal_three WHERE 1;";
			$threeResult = mysqli_query($connection,$threeSql);

			echo "<table id='rowClick3' class='table table-hover' cellpadding='15' style='margin-top: 50px;'>";
			echo "<th style='background: palegoldenrod;'>" . "Register number" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Name" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ANT" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "CN" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "MPMC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "TOC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "OOAD" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ISE" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Average" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Result" . "</th>";

			while( $row = mysqli_fetch_assoc($threeResult) )
			{
				echo "<tr style='border-bottom: 1px solid #000;'>";
					echo "<td>" . $row['regnum'] . "</td>" ;
					echo "<td>" . $row['name'] . "</td>" ;
					if( $row['ant'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['ant'] . "' /></td>" ;

					if( $row['cn'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['cn'] . "' /></td>" ;

					if( $row['mpmc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['mpmc'] . "' /></td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['toc'] . "' /></td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['ooad'] . "' /></td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td><input type='text' onclick='getId(this,3)' placeholder='nil' size='5' /></td>" ;
					else
						echo "<td><input type='text' onclick='getId(this,3)' size='5' value='" .  $row['ise'] . "' /></td>" ;

					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;

				echo "</tr>";

				echo "<tr class='cls3' style='border: 0;width: 90px; height: 70px'>";
					echo "<td>" . "<button class='btn btn-warning saveBtn3'>Save</button>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['academics'] == 4)
		{
			$semSql = "SELECT * FROM semester WHERE 1;";
			$semResult = mysqli_query($connection,$semSql);

			echo "<table id='rowClick4' class='table table-hover' cellpadding='20' style='margin-top: 50px;'>";
			echo "<th style='background: palegoldenrod;'>" . "Reg number" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Name" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ANT" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "CN" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "MPMC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "TOC" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "OOAD" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "ISE" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "M LAB" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "O LAB" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "N LAB" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "GPA" . "</th>";
			echo "<th style='background: palegoldenrod;'>" . "Result" . "</th>";

			while( $row = mysqli_fetch_assoc($semResult) )
			{
				echo "<tr style='border-bottom: 1px solid #000;'>";
					echo "<td>" . $row['regnum'] . "</td>" ;
					echo "<td>" . $row['name'] . "</td>" ;

					echo "<td>" . gradeSelect($row['ant']) . "</td>";
					echo "<td>" . gradeSelect($row['cn']) . "</td>";
					echo "<td>" . gradeSelect($row['mpmc']) . "</td>";
					echo "<td>" . gradeSelect($row['toc']) . "</td>";
					echo "<td>" . gradeSelect($row['ooad']) . "</td>";
					echo "<td>" . gradeSelect($row['ise']) . "</td>";
					echo "<td>" . gradeSelect($row['mpmclab']) . "</td>";
					echo "<td>" . gradeSelect($row['ooadlab']) . "</td>";
					echo "<td>" . gradeSelect($row['netlab']) . "</td>";
					
					if( $row['gpa'] == -1 )
						echo "<td>" . "nil" . "</td>";
					else
						echo "<td>" . $row['gpa'] . "</td>";
					echo "<td>" . $row['result'] . "</td>";
				echo "</tr>";

				echo "<tr class='cls4' style='border: 0;width: 90px; height: 70px'>";
					echo "<td>" . "<button class='btn btn-warning saveBtn4'>Save</button>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else
			echo "<h4 style='color: red'>Unknown error !</h4>";

		mysqli_close($connection);
	}
	
	function gradeSelect($x)
	{
		$resultEcho = "";

		$resultEcho .= "<select onclick='getId(this,4)'>";

		if( $x == null )
			$resultEcho .= "x<option value='null' selected> nil </option>";
		else
			$resultEcho .= "<option value='null'> nil </option>";

		if(  $x == 'O' )
			$resultEcho .= "<option value='O' selected> O </option>";
		else
			$resultEcho .= "<option value='O'> O </option>";

		if(  $x == 'AP' )
			$resultEcho .= "<option value='AP' selected> A+ </option>";
		else
			$resultEcho .= "<option value='AP'> A+ </option>";

		if(  $x == 'A' )
			$resultEcho .= "<option value='A' selected> A </option>";
		else
			$resultEcho .= "<option value='A'> A </option>";

		if(  $x == 'BP' )
			$resultEcho .= "<option value='BP' selected> B+ </option>";
		else
			$resultEcho .= "<option value='BP'> B+ </option>";

		if(  $x == 'B' )
			$resultEcho .= "<option value='B' selected> B </option>";
		else
			$resultEcho .= "<option value='B'> B </option>";

		if(  $x == 'RA' )
			$resultEcho .= "<option value='RA' selected> RA </option>";
		else
			$resultEcho .= "<option value='RA'> RA </option>";

		$resultEcho .= "</select>";

		return($resultEcho);
	}
?>