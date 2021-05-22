<?php
	if( isset($_REQUEST['regnum']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");
		
		$regnum = $_REQUEST['regnum'];

		if( !$connection )
			die("Connection error ").mysqli_error();
	}
	else
		die("Unknown error ").mysqli_error();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Student panel </title>

		<style>
			* {
				font-family: sans-serif;
			}

			body {
				overflow-x: hidden;
			}

			table {
				margin-left: auto;
				margin-right: auto;
				margin-top: 30px;
			}
			
			td:nth-child(even){
				text-align: center;
			}

			tbody {
				display: block;
				padding: 20px;
				max-height: 80vh;
				overflow-y: scroll;
				border: 0.5px dashed #000;
			}

			.btnholder {
				width: 100%;
				text-align: center;
				margin-top: 30px;
			}
		</style>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<div class="btnholder">
			<button id="internalOneBtn" class="btn btn-outline-success"> Internal One </button>
			<button id="internalTwoBtn" class="btn btn-outline-success"> Internal Two </button>
			<button id="internalThreeBtn" class="btn btn-outline-success"> Internal Three </button>
			<button id="semesterBtn" class="btn btn-outline-success"> Semester </button>
		</div>
		<div id="internalOne" class="table table-responsive">

			<?php
				$sql_1 = "SELECT * FROM internal_one WHERE regnum=" . $regnum . ";" ;
				$result_1 = mysqli_query($connection,$sql_1);

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
							if( $row_1['ant'] == -1 || $row_1['ant'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['ant'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "MPMC" . "</td>" ;
							if( $row_1['mpmc'] == -1 || $row_1['mpmc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['mpmc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "OOAD" . "</td>" ;
							if( $row_1['ooad'] == -1 || $row_1['ooad'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['ooad'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "TOC" . "</td>" ;
							if( $row_1['toc'] == -1 || $row_1['toc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['toc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "CN" . "</td>" ;
							if( $row_1['cn'] == -1 || $row_1['cn'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['cn'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "ISE" . "</td>" ;
							if( $row_1['ise'] == -1 || $row_1['ise'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['ise'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Average" . "</td>" ;
							if( $row_1['avg'] == -1 || $row_1['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['avg'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Result" . "</td>" ;
							if( $row_1['avg'] == -1 || $row_1['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_1['result'] . "</td>" ;
						echo "</tr>";
					}
					echo "</table>";
				}
				else
					echo "<h4 style='color: red'>Unknown error occured in showing internal one !</h4>";
			?>
		</div>
	
		<div id="internalTwo"  class="table table-responsive">
			<?php
				$sql_2 = "SELECT * FROM internal_two WHERE regnum=" . $regnum . ";" ;
				$result_2 = mysqli_query($connection,$sql_2);

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
							echo "<td>" . $row_2['name'] . "</td>" ;
						echo "</tr>";
						
						echo "<tr>";
							echo "<td>" . "ANT" . "</td>" ;
							if( $row_2['ant'] == -1 || $row_2['ant'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['ant'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "MPMC" . "</td>" ;
							if( $row_2['mpmc'] == -1 || $row_2['mpmc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['mpmc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "OOAD" . "</td>" ;
							if( $row_2['ooad'] == -1 || $row_2['ooad'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['ooad'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "TOC" . "</td>" ;
							if( $row_2['toc'] == -1 || $row_2['toc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['toc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "CN" . "</td>" ;
							if( $row_2['cn'] == -1 || $row_2['cn'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['cn'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "ISE" . "</td>" ;
							if( $row_2['ise'] == -1 || $row_2['ise'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['ise'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Average" . "</td>" ;
							if( $row_2['avg'] == -1 || $row_2['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['avg'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Result" . "</td>" ;
							if( $row_2['avg'] == -1 || $row_2['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['result'] . "</td>" ;
						echo "</tr>";
					}
					echo "</table>";
				}
				else
					echo "<h4 style='color: red'>Unknown error occured in showing internal two !</h4>";
			?>
		</div>
			
		<div id="internalThree"  class="table table-responsive">
			<?php
				$sql_3 = "SELECT * FROM internal_three WHERE regnum=" . $regnum . ";" ;
				$result_3 = mysqli_query($connection,$sql_3);
				
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
							if( $row_3['ant'] == -1 || $row_3['ant'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['ant'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "MPMC" . "</td>" ;
							if( $row_3['mpmc'] == -1 || $row_3['mpmc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['mpmc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "OOAD" . "</td>" ;
							if( $row_3['ooad'] == -1 || $row_3['ooad'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['ooad'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "TOC" . "</td>" ;
							if( $row_3['toc'] == -1 || $row_3['toc'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['toc'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "CN" . "</td>" ;
							if( $row_3['cn'] == -1 || $row_3['cn'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['cn'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "ISE" . "</td>" ;
							if( $row_3['ise'] == -1 || $row_3['ise'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['ise'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Average" . "</td>" ;
							if( $row_3['avg'] == -1 || $row_3['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_3['avg'] . "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Result" . "</td>" ;
							if( $row_3['avg'] == -1 || $row_3['avg'] == '' )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_2['result'] . "</td>" ;
						echo "</tr>";
					}
					echo "</table>";
				}
				else
					echo "<h4 style='color: red'>Unknown error occured in showing internal three !</h4>";
			?>
		</div>
		
		<div id="semester" class="table table-responsive">
			<?php
				$sql_4 = "SELECT * FROM semester WHERE regnum=" . $regnum . ";" ;
				$result_4 = mysqli_query($connection,$sql_4);
				
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
							if(  $row_4['gpa'] == -1 )
								echo "<td>" . "nil" . "</td>" ;
							else
								echo "<td>" . $row_4['gpa'] . "</td>" ;
						echo "</tr>";

						echo "<tr>";
							echo "<td>" . "Result" . "</td>" ;
							echo "<td>" . $row_4['result'] . "</td>" ;
						echo "</tr>";
					}
					echo "</table>";
				}
				else
					echo "<h4 style='color: red'>Unknown error occured in showing semester !</h4>";
			?>
		</div>

		<script>
			// if( window.XMLHttpRequest )
				// view = new XMLHttpRequest();
			// else
				// view = new ActiveXObject();

			// if( view.readystate == 4 && view.status == 200 )
			// {
				// console.log( view.responseText );
			// }

			// var opt = "regnum=" + ;
			// view.open("POST",'prsnledit.php',true);
			// view.setRequestHeader("content-type","application/x-www-form-urlencoded");
			// view.send(opt);

			var internalOneBtn = document.getElementById("internalOneBtn");
			var internalTwoBtn = document.getElementById("internalTwoBtn");
			var internalThreeBtn = document.getElementById("internalThreeBtn");
			var semesterBtn = document.getElementById("semesterBtn");
			
			var internalOne = document.getElementById("internalOne");
			var internalTwo = document.getElementById("internalTwo");
			var internalThree = document.getElementById("internalThree");
			var semester = document.getElementById("semester");
			
			var interval = setInterval(function(){
				if( document.readyState === 'complete' )
				{
					internalOneBtn.click();
					clearInterval(interval);
				}
			});
			
			internalOneBtn.addEventListener('click',function()
			{
				internalOne.style.display="block";
				internalTwo.style.display="none";
				internalThree.style.display="none";
				semester.style.display="none";

				internalOneBtn.setAttribute("class","btn btn-success");
				internalTwoBtn.setAttribute("class","btn btn-outline-success");
				internalThreeBtn.setAttribute("class","btn btn-outline-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");
			});
			
			internalTwoBtn.addEventListener('click',function()
			{
				internalOne.style.display="none";
				internalTwo.style.display="block";
				internalThree.style.display="none";
				semester.style.display="none";
				
				internalOneBtn.setAttribute("class","btn btn-outline-success");
				internalTwoBtn.setAttribute("class","btn btn-success");
				internalThreeBtn.setAttribute("class","btn btn-outline-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");
			});
			
			internalThreeBtn.addEventListener('click',function()
			{
				internalOne.style.display="none";
				internalTwo.style.display="none";
				internalThree.style.display="block";
				semester.style.display="none";
				
				internalOneBtn.setAttribute("class","btn btn-outline-success");
				internalTwoBtn.setAttribute("class","btn btn-outline-success");
				internalThreeBtn.setAttribute("class","btn btn-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");
			});
			
			semesterBtn.addEventListener('click',function()
			{
				internalOne.style.display="none";
				internalTwo.style.display="none";
				internalThree.style.display="none";
				semester.style.display="block";
				
				internalOneBtn.setAttribute("class","btn btn-outline-success");
				internalTwoBtn.setAttribute("class","btn btn-outline-success");
				internalThreeBtn.setAttribute("class","btn btn-outline-success");
				semesterBtn.setAttribute("class","btn btn-success");
			});

		</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"></script>
	</body>
</html>