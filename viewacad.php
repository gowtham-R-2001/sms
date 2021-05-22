<?php
	if( isset($_REQUEST['viewopt']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		if( !$connection )
			die("Connection error ").mysqli_error();
		
		if( $_REQUEST['viewopt'] == 1 )
		{
			$oneSql = "SELECT * FROM internal_one WHERE 1;";
			$oneResult = mysqli_query($connection,$oneSql);

			echo "<table class='table table-hover' cellpadding='20' style='margin-top: 50px;'>";
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
					if(  $row['regnum'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['regnum'] . "</td>" ;
					
					if( $row['name'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['name'] . "</td>" ;
					
					if( $row['ant'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ant'] . "</td>" ;
					
					if( $row['cn'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['cn'] . "</td>" ;
					
					if( $row['mpmc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['mpmc'] . "</td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['toc'] . "</td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ooad'] . "</td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ise'] . "</td>" ;

					if( $row['avg'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;

				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['viewopt'] == 2)
		{
			$twoSql = "SELECT * FROM internal_two WHERE 1;";
			$twoResult = mysqli_query($connection,$twoSql);

			echo "<table class='table table-hover' cellpadding='20' style='margin-top: 50px;'>";
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
					if(  $row['regnum'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['regnum'] . "</td>" ;
					
					if( $row['name'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['name'] . "</td>" ;
					
					if( $row['ant'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ant'] . "</td>" ;
					
					if( $row['cn'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['cn'] . "</td>" ;
					
					if( $row['mpmc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['mpmc'] . "</td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['toc'] . "</td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ooad'] . "</td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ise'] . "</td>" ;

					if( $row['avg'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;

				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['viewopt'] == 3)
		{
			$threeSql = "SELECT * FROM internal_three WHERE 1;";
			$threeResult = mysqli_query($connection,$threeSql);

			echo "<table class='table table-hover' cellpadding='20' style='margin-top: 50px;'>";
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
					if(  $row['regnum'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['regnum'] . "</td>" ;
					
					if( $row['name'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['name'] . "</td>" ;
					
					if( $row['ant'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ant'] . "</td>" ;
					
					if( $row['cn'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['cn'] . "</td>" ;
					
					if( $row['mpmc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['mpmc'] . "</td>" ;
					
					if( $row['toc'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['toc'] . "</td>" ;
					
					if( $row['ooad'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ooad'] . "</td>" ;
					
					if( $row['ise'] == -1 )
						echo "<td>" . "-" . "</td>" ;
					else
						echo "<td>" . $row['ise'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['avg'] . "</td>" ;
					
					if( $row['avg'] == -1 )
						echo "<td>" . "nil" . "</td>" ;
					else
						echo "<td>" . $row['result'] . "</td>" ;
				echo "</tr>";
			}
			echo "</table>";
		}
		else if($_REQUEST['viewopt'] == 4)
		{
			$semSql = "SELECT * FROM semester WHERE 1;";
			$semResult = mysqli_query($connection,$semSql);

			echo "<table class='table table-hover' cellpadding='20' style='margin-top: 50px;'>";
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
					
					echo "<td>" . $row['regnum'] . "</td>";
					echo "<td>" . $row['name'] . "</td>";

					if( $row['ant'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" . $row['ant'] . "</td>";
					
					if( $row['cn'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" . $row['cn'] . "</td>";
					
					if(  $row['mpmc'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" .  $row['mpmc'] . "</td>";
					
					if(  $row['toc']== '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" .  $row['toc'] . "</td>";
					
					if(  $row['ooad'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" .  $row['ooad'] . "</td>";
					
					if(  $row['ise'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" .  $row['ise'] . "</td>";
					
					if( $row['mpmclab'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" . $row['mpmclab'] . "</td>";
					
					
					if( $row['ooadlab'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" . $row['ooadlab'] . "</td>";


					if( $row['netlab'] == '' )
						echo "<td>" . "null" . "</td>";
					else
						echo "<td>" . $row['netlab'] . "</td>";


					if( $row['gpa']  == '' )
						echo "<td>" . "-" . "</td>";
					else
						echo "<td>" . $row['gpa']  . "</td>";


					if( $row['result']  == '' )
						echo "<td>" . "-" . "</td>";
					else
						echo "<td>" . $row['result']  . "</td>";

				echo "</tr>";
			}
			echo "</table>";
		}
		else
			echo "<h4 style='color: red'>Unknown error occured !</h4>";
		
		mysqli_close($connection);
	}
?>