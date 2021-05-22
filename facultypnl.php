<?php
	session_start();

	if( isset($_SESSION['username']) && isset($_SESSION['password']) )
	{
		$uname = $_SESSION['username'];
		$pwd = $_SESSION['password'];

		echo "<script>";
		echo "document.title='Admin panel';";
		echo "</script>";
	}
	else 
	{
		die("403 Access Forbidden !");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Faculty login </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="panelstyles.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<style>
			body{
				overflow-x: hidden;
			}

			.fullWidth {
				height: 97.5vh;
			}

			.center {
				display: grid;
				grid-template-columns: 1fr;
				grid-rows: auto;
				position: relative;
				z-index: 1;
			}

			.btn-warning, .btn-success{
				border: 1.5px solid #000;
				border-radius: 10px;
				margin-top: 10px;
			}

			.btn-warning:focus, .btn-success:focus, .btn-primary:focus  {
				box-shadow: 0 0 0 0 transparent;
				text-shadow: 0 0 0 0 transparent;
			}

			.col-9 {
				overflow-y: scroll;
				max-height: 100vh;
			}

			#data_2, #data_3, #data_4, #data_5{
				display: none;
			}

			form, table {
				width: fit-content;
				margin-left: auto;
				margin-right: auto;
			}

			#submit, #prsnlsubmitbtn, #internalOneBtn, #internalTwoBtn, #internalThreeBtn, #semesterBtn, .saveBtn, .saveBtn2, .saveBtn3, .saveBtn4 {
				
				border-radius: 5px;
			}

			.alert-success, .alert-danger {
				width: 100vw;
				position: absolute;
				z-index: 2;
				display: none;
			}

			#deltable{
				border: 1.5px solid #000;
				margin-top: 30px;
			}

			#deltable td{
				border-right: 1px solid #000;
			}

			svg{
				margin-top: 5px;
			}
			
			#delbtn {
				margin-top: 50px;
			}

			#delDiv {
				width: 100%;
				margin-top: 30px;
				text-align: center;
			}

			.btnholder{
				width: 100%;
				text-align: center;
				margin-top: 30px;
			}

			#prsnltable{
				border: 2px solid #fff;
			}

			#arrow_left{
				background: silver;
				padding: 10px;
				border-radius: 50%;
				margin-top: 20px;
			}

			#editRecord{
				display: none;
			}
			
			.cls, .cls2, .cls3, .cls4 {
				display: none;
				border: 0;
			}
			
			th, td {
				text-align: center;
			}
			
			#logout{
				border: 2px solid #cc0000;
				background: transparent;
				margin-top: 10px;
				border-radius: 5px;
				float:right;
			}

			#logout{
				color: white;
				background: #cc0000;
			}
			
			#data_1_button , #data_2_button , #data_3_button, #data_4_button
			{
				font-size: 19px;
			}
		</style>
	</head>

	<body>
		<div class="alert alert-danger" id="stu-failure">
			<center>
				<strong>Failure! </strong>&nbsp;&nbsp;&nbsp; Cannot add student
			</center>
		</div>

		<div class="alert alert-success" id="stu-success">
			<center>
				<strong>Success! </strong>&nbsp;&nbsp;&nbsp; Student added to database
			</center>
		</div>

		<div class="row fullWidth">
			<div class="col-3 center">
				<button id="data_1_button" class="btn btn-success"> Add new student </button>
				<button id="data_2_button" class="btn btn-warning"> Edit existing student </button>
				<button id="data_3_button" class="btn btn-warning"> Delete student record </button>
				<button id="data_4_button" class="btn btn-warning"> View All Details </button>
			</div>

			<div class="col-9">
				<button id="logout">Logout</button>
				<section id="data_1" style="display: flex; align-items: center; height: 100vh;">
					<form method="post">
						<table cellpadding="20">
							<tr>
								<td> Register<br /> number </td>
								<td> <input type="text" value="713318104" name="regnum" id="regnum" required /> </td>

								<td> Name </td>
								<td> <input type="text" name="sname" id="sname" required /> </td>
							</tr>

							<tr>
								<td> Roll<br /> number </td>
								<td> <input type="text" value="18CS" name="roll" id="roll" required /> </td>

								<td> DOB </td>
								<td> <input type="date" name="dob" id="dob" required /> </td>
							</tr>

							<tr>
								<td> Gender </td>
								<td>
									<select class="custom-select" name="gender" id="gender" id="inputGroupSelect" required>
										<option value="m" selected>Male</option>
										<option value="f">Female</option>
										<option value="t">Transgender</option>
									</select>
								</td>

								<td> Father's<br /> name </td>
								<td> <input type="text" name="fname" id="fname" required /> </td>
							</tr>

							<tr>
								<td> HSC<br /> marks </td>
								<td> <input type="text" name="hscmarks" id="hscmarks" required /> </td>

								<td> SSLC<br /> marks </td>
								<td>  <input type="text" name="sslcmarks" id="sslcmarks" required />  </td>
							</tr>

							<tr>
								<td> Father's <br />Occupation </td>
								<td> <input type="text" name="fatherocc" id="fatherocc" required /> </td>

								<td> Aadhar<br /> number </td>
								<td> <input type="text" name="aadhar" id="aadhar" required /> </td>
							</tr>

							<tr align="center">
								<td colspan="4"> <input class="btn btn-warning" id="submit" onclick="addstudent()" type="button" value="Add" /> </td>
							</tr>

						</table>
					</form>

				</section>




				<section id="data_2" style="display: flex; align-items: center; height: 100vh;">
					<div class="btnholder">
						<button class="btn btn-primary" id="prsndetailsedit"> Personal details </button> <button id="academicsedit" class="btn btn-primary"> Academics </button>

						<div id="prsndetailsedit_section" class="table-responsive">

						</div>

						<div id="academicsedit_section">
							<div>
								<div class="btnholder">
									<button id="internalOneBtn" class="btn btn-outline-success"> Internal One </button>
									<button id="internalTwoBtn" class="btn btn-outline-success"> Internal Two </button>
									<button id="internalThreeBtn" class="btn btn-outline-success"> Internal Three </button>
									<button id="semesterBtn" class="btn btn-outline-success"> Semester </button>
								</div>

								<div id="internalOne" class="table-responsive">

								</div>

								<div id="internalTwo" class="table-responsive">

								</div>

								<div id="internalThree" class="table-responsive">

								</div>

								<div id="semester" class="table-responsive">

								</div>
							</div>
						</div>
					</div>

					<div id="editRecord">
						<label id="arrow_left" class="fa fa-arrow-left btn-"></label>

						<div id="editRecordView" class="table-responsive">

						</div>
						
						<span id="editResult">
						</span>
					</div>
				</section>




				<section id="data_3" style="display: flex; align-items: center; height: 100vh;">

						<table cellpadding="20">
							<tr>
								<td> Register number </td>
								<td> <input type="text" name="delregno" id="delregno" required /> </td>
							</tr>

							<tr>
								<td colspan="2" align="center"> 
									<button onclick="delViewFun()" class="btn btn-outline-danger" >
										Find &nbsp;<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
										  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
										</svg> 
									</button>
								</td>
							</tr>
						</table>

					<div id="delDiv">
						<span id="delrec" name="delrec">

						</span>
					</div>

				</section>


				<section id="data_4">
					<div class="btnholder">
						<button class="btn btn-primary" id="prsndetails"> Personal details </button> <button id="academics" class="btn btn-primary"> Academics </button>

						<div id="prsndetails_section" class="table-responsive">
							
						</div>

						<div id="academics_section">
							<div class="btnholder">
									<button id="ViewInternalOneBtn" class="btn btn-outline-success"> Internal One </button>
									<button id="ViewInternalTwoBtn" class="btn btn-outline-success"> Internal Two </button>
									<button id="ViewInternalThreeBtn" class="btn btn-outline-success"> Internal Three </button>
									<button id="ViewSemesterBtn" class="btn btn-outline-success"> Semester </button>
							</div>
								<div id="ViewInternalOne" class="table-responsive">

								</div>

								<div id="ViewInternalTwo" class="table-responsive">

								</div>

								<div id="ViewInternalThree" class="table-responsive">

								</div>

								<div id="ViewSemester" class="table-responsive">

								</div>
						</div>
					</div>
				</section>

	




				<section id="data_5">

				</section>
			</div>
		</div>

		<script>
			var btn = document.getElementsByClassName("btn");
			var data_1 = document.getElementById("data_1");
			var data_2 = document.getElementById("data_2");
			var data_3 = document.getElementById("data_3");
			var data_4 = document.getElementById("data_4");
			var aadhar = document.getElementById("aadhar");
			var prsndetails = document.getElementById("prsndetails");
			var academics = document.getElementById("academics");
			var prsndetailsedit = document.getElementById("prsndetailsedit");
			var academicsedit = document.getElementById("academicsedit");
			var editRecord = document.getElementById("editRecord");
			var editRecordView = document.getElementById("editRecordView");
			var arrow_left = document.getElementById("arrow_left");

			var prsndetails_section = document.getElementById("prsndetails_section");
			var academics_section = document.getElementById("academics_section");
			var prsndetailsedit_section = document.getElementById("prsndetailsedit_section");
			var academicsedit_section = document.getElementById("academicsedit_section");


			var internalOneBtn = document.getElementById("internalOneBtn");
			var internalTwoBtn = document.getElementById("internalTwoBtn");
			var internalThreeBtn = document.getElementById("internalThreeBtn");
			var semesterBtn = document.getElementById("semesterBtn");

			var internalOne = document.getElementById("internalOne");
			var internalTwo = document.getElementById("internalTwo");
			var internalThree = document.getElementById("internalThree");
			var semester = document.getElementById("semester");



			var ViewInternalOneBtn = document.getElementById("ViewInternalOneBtn");
			var ViewInternalTwoBtn = document.getElementById("ViewInternalTwoBtn");
			var ViewInternalThreeBtn = document.getElementById("ViewInternalThreeBtn");
			var ViewSemesterBtn = document.getElementById("ViewSemesterBtn");

			var ViewInternalOne = document.getElementById("ViewInternalOne");
			var ViewInternalTwo = document.getElementById("ViewInternalTwo");
			var ViewInternalThree = document.getElementById("ViewInternalThree");
			var ViewSemester = document.getElementById("ViewSemester");

			var logout = document.getElementById("logout");

			logout.addEventListener('click',function(){
				document.location.href = "index.php";
			});
			
			
			var pre_clicked = 0;
			var curr_clicked = 0;
			
			function getId(element,x) 
			{
				// alert("row" + element.parentNode.parentNode.rowIndex + 
				// " - column" + element.parentNode.cellIndex);

				var index = element.parentNode.parentNode.rowIndex;
				index -= 1;

				if( x == 1 )
				{
					pre_clicked = curr_clicked;
					curr_clicked = index;


					if( pre_clicked != 0 )
						document.getElementsByClassName("cls")[pre_clicked/2].style.display='none';
					else
						document.getElementsByClassName("cls")[pre_clicked].style.display='none';

					if( curr_clicked != 0 )
						document.getElementsByClassName("cls")[curr_clicked/2].style.display='block';
					else
						document.getElementsByClassName("cls")[curr_clicked].style.display='block';
				}
				else if( x == 2 )
				{
					pre_clicked = curr_clicked;
					curr_clicked = index;


					if( pre_clicked != 0 )
						document.getElementsByClassName("cls2")[pre_clicked/2].style.display='none';
					else
						document.getElementsByClassName("cls2")[pre_clicked].style.display='none';

					if( curr_clicked != 0 )
						document.getElementsByClassName("cls2")[curr_clicked/2].style.display='block';
					else
						document.getElementsByClassName("cls2")[curr_clicked].style.display='block';
				}
				else if(x == 3)
				{
					pre_clicked = curr_clicked;
					curr_clicked = index;

					if( pre_clicked != 0 )
						document.getElementsByClassName("cls3")[pre_clicked/2].style.display='none';
					else
						document.getElementsByClassName("cls3")[pre_clicked].style.display='none';

					if( curr_clicked != 0 )
						document.getElementsByClassName("cls3")[curr_clicked/2].style.display='block';
					else
						document.getElementsByClassName("cls3")[curr_clicked].style.display='block';
				}
				else if( x == 4 )
				{
					pre_clicked = curr_clicked;
					curr_clicked = index;

					if( pre_clicked != 0 )
						document.getElementsByClassName("cls4")[pre_clicked/2].style.display='none';
					else
						document.getElementsByClassName("cls4")[pre_clicked].style.display='none';

					if( curr_clicked != 0 )
						document.getElementsByClassName("cls4")[curr_clicked/2].style.display='block';
					else
						document.getElementsByClassName("cls4")[curr_clicked].style.display='block';
				}
			}


			internalOneBtn.addEventListener('click',function()
			{
				// internalOneBtn.style.padding = "10px";
				// internalTwoBtn.style.padding = "8px";
				// internalThreeBtn.style.padding = "8px";
				// semesterBtn.style.padding = "8px";

				internalOne.style.display="block";
				internalTwo.style.display="none";
				internalThree.style.display="none";
				semester.style.display="none";

				internalOneBtn.setAttribute("class","btn btn-success");
				internalTwoBtn.setAttribute("class","btn btn-outline-success");
				internalThreeBtn.setAttribute("class","btn btn-outline-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");

				if( window.XMLHttpRequest )
					i_one = new XMLHttpRequest();
				else
					i_one = new ActiveXObject("Microsoft.XMLHTTP");

				i_one.onreadystatechange = function()
				{
					if( i_one.readyState == 4 && i_one.status == 200 )
					{
						var cnt = 0;

						internalOne.innerHTML = i_one.responseText;
						console.log(i_one.responseText);

						var saveBtn = document.getElementsByClassName("saveBtn");

						for(let i = 0 ; i < saveBtn.length; i++)
						{
							saveBtn[i].addEventListener('click',function(){
								internalOneBtn.click();

								var cell = document.getElementById("rowClick").rows[(i*2)+1].cells;

								if( window.XMLHttpRequest )
									ione_edit = new XMLHttpRequest();
								else
									ione_edit = new ActiveXObject("Microsoft.XMLHTTP");

								ione_edit.onreadystatechange = function()
								{
									if( ione_edit.readyState == 4 && ione_edit.status == 200 )
									{
										console.log(ione_edit.responseText);
										internalOneBtn.click();
									}
								};

								var oneEdit = "opt=" + "1" + "&regnum=" + cell[0].innerHTML + "&ant=" + cell[2].children[0].value +
									"&cn=" + cell[3].children[0].value + "&mpmc=" + cell[4].children[0].value + "&toc=" + cell[5].children[0].value +
									"&ooad=" + cell[6].children[0].value + "&ise=" + cell[7].children[0].value;
								ione_edit.open("POST",'acadedit.php',true);
								ione_edit.setRequestHeader("content-type","application/x-www-form-urlencoded");
								ione_edit.send(oneEdit);
							});
						}
					}
				};

				var academics = "academics=" + "1";
				i_one.open("POST",'academics.php',true);
				i_one.setRequestHeader("content-type","application/x-www-form-urlencoded");
				i_one.send(academics);
			});
			
			internalTwoBtn.addEventListener('click',function(){
				// internalOneBtn.style.padding = "8px";
				// internalTwoBtn.style.padding = "10px";
				// internalThreeBtn.style.padding = "8px";
				// semesterBtn.style.padding = "8px";
				
				internalOne.style.display="none";
				internalTwo.style.display="block";
				internalThree.style.display="none";
				semester.style.display="none";
				
				internalOneBtn.setAttribute("class","btn btn-outline-success");
				internalTwoBtn.setAttribute("class","btn btn-success");
				internalThreeBtn.setAttribute("class","btn btn-outline-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");
				
				if( window.XMLHttpRequest )
					i_two = new XMLHttpRequest();
				else
					i_two = new ActiveXObject("Microsoft.XMLHTTP");

				i_two.onreadystatechange = function()
				{
					if( i_two.readyState == 4 && i_two.status == 200 )
					{
						internalTwo.innerHTML = i_two.responseText;
						console.log(i_two.responseText);

						var saveBtn2 = document.getElementsByClassName("saveBtn2");

						for(let i = 0 ; i < saveBtn2.length; i++)
						{
							saveBtn2[i].addEventListener('click',function(){
								internalTwoBtn.click();

								var cell = document.getElementById("rowClick2").rows[(i*2)+1].cells;

								if( window.XMLHttpRequest )
									itwo_edit = new XMLHttpRequest();
								else
									itwo_edit = new ActiveXObject("Microsoft.XMLHTTP");

								itwo_edit.onreadystatechange = function()
								{
									if( itwo_edit.readyState == 4 && itwo_edit.status == 200 )
									{
										console.log(itwo_edit.responseText);
										internalTwoBtn.click();
									}
								};

								var twoEdit = "opt=" + "2" + "&regnum=" + cell[0].innerHTML + "&ant=" + cell[2].children[0].value +
									"&cn=" + cell[3].children[0].value + "&mpmc=" + cell[4].children[0].value + "&toc=" + cell[5].children[0].value +
									"&ooad=" + cell[6].children[0].value + "&ise=" + cell[7].children[0].value;
								itwo_edit.open("POST",'acadedit.php',true);
								itwo_edit.setRequestHeader("content-type","application/x-www-form-urlencoded");
								itwo_edit.send(twoEdit);
							});
						}
					}
				};

				var academics = "academics=" + "2";
				i_two.open("POST",'academics.php',true);
				i_two.setRequestHeader("content-type","application/x-www-form-urlencoded");
				i_two.send(academics);
			});
			
			internalThreeBtn.addEventListener('click',function(){
				// internalOneBtn.style.padding = "8px";
				// internalTwoBtn.style.padding = "8px";
				// internalThreeBtn.style.padding = "10px";
				// semesterBtn.style.padding = "8px";
				
				internalOne.style.display="none";
				internalTwo.style.display="none";
				internalThree.style.display="block";
				semester.style.display="none";
				
				internalOneBtn.setAttribute("class","btn btn-outline-success");
				internalTwoBtn.setAttribute("class","btn btn-outline-success");
				internalThreeBtn.setAttribute("class","btn btn-success");
				semesterBtn.setAttribute("class","btn btn-outline-success");
				
				if( window.XMLHttpRequest )
					i_three = new XMLHttpRequest();
				else
					i_three = new ActiveXObject("Microsoft.XMLHTTP");

				i_three.onreadystatechange = function()
				{
					if( i_three.readyState == 4 && i_three.status == 200 )
					{
						internalThree.innerHTML = i_three.responseText;
						console.log(i_three.responseText);

						var saveBtn3 = document.getElementsByClassName("saveBtn3");

						for(let i = 0 ; i < saveBtn3.length; i++)
						{
							saveBtn3[i].addEventListener('click',function(){
								internalThreeBtn.click();

								var cell = document.getElementById("rowClick3").rows[(i*2)+1].cells;

								if( window.XMLHttpRequest )
									ithree_edit = new XMLHttpRequest();
								else
									ithree_edit = new ActiveXObject("Microsoft.XMLHTTP");

								ithree_edit.onreadystatechange = function()
								{
									if( ithree_edit.readyState == 4 && ithree_edit.status == 200 )
									{
										console.log(ithree_edit.responseText);
										internalThreeBtn.click();
									}
								};

								var threeEdit = "opt=" + "3" + "&regnum=" + cell[0].innerHTML + "&ant=" + cell[2].children[0].value +
									"&cn=" + cell[3].children[0].value + "&mpmc=" + cell[4].children[0].value + "&toc=" + cell[5].children[0].value +
									"&ooad=" + cell[6].children[0].value + "&ise=" + cell[7].children[0].value;
								ithree_edit.open("POST",'acadedit.php',true);
								ithree_edit.setRequestHeader("content-type","application/x-www-form-urlencoded");
								ithree_edit.send(threeEdit);
							});
						}
					}
				};

				var academics = "academics=" + "3";
				i_three.open("POST",'academics.php',true);
				i_three.setRequestHeader("content-type","application/x-www-form-urlencoded");
				i_three.send(academics);
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

				if( window.XMLHttpRequest )
					sem = new XMLHttpRequest();
				else
					sem = new ActiveXObject("Microsoft.XMLHTTP");

				sem.onreadystatechange = function()
				{
					if( sem.readyState == 4 && sem.status == 200 )
					{
						semester.innerHTML = sem.responseText;
						console.log(sem.responseText);

						var saveBtn4 = document.getElementsByClassName("saveBtn4");

						for(let i = 0 ; i < saveBtn4.length; i++)
						{
							saveBtn4[i].addEventListener('click',function()
							{
								semesterBtn.click();

								var cell = document.getElementById("rowClick4").rows[(i*2)+1].cells;

								if( window.XMLHttpRequest )
									sem_edit = new XMLHttpRequest();
								else
									sem_edit = new ActiveXObject("Microsoft.XMLHTTP");

								sem_edit.onreadystatechange = function()
								{
									if( sem_edit.readyState == 4 && sem_edit.status == 200 )
									{
										console.log(sem_edit.responseText);
										semesterBtn.click();
									}
								};

								var semEdit = "opt=" + "4" + "&regnum=" + cell[0].innerHTML + "&ant=" + cell[2].children[0].value +
									"&cn=" + cell[3].children[0].value + "&mpmc=" + cell[4].children[0].value + "&toc=" + cell[5].children[0].value +
									"&ooad=" + cell[6].children[0].value + "&ise=" + cell[7].children[0].value + "&mpmclab=" + cell[8].children[0].value +
									"&ooadlab=" + cell[9].children[0].value + "&netlab=" + cell[10].children[0].value;
								sem_edit.open("POST",'acadedit.php',true);
								sem_edit.setRequestHeader("content-type","application/x-www-form-urlencoded");
								sem_edit.send(semEdit);
							});
						}
					}
				};

				var academics = "academics=" + "4";
				sem.open("POST",'academics.php',true);
				sem.setRequestHeader("content-type","application/x-www-form-urlencoded");
				sem.send(academics);
			});
			
			
			
			
			
			ViewInternalOneBtn.addEventListener('click',function(){

				ViewInternalOne.style.display="block";
				ViewInternalTwo.style.display="none";
				ViewInternalThree.style.display="none";
				ViewSemester.style.display="none";

				ViewInternalOneBtn.setAttribute("class","btn btn-success");
				ViewInternalTwoBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalThreeBtn.setAttribute("class","btn btn-outline-success");
				ViewSemesterBtn.setAttribute("class","btn btn-outline-success");
				
				if( window.XMLHttpRequest )
					viewIntOne = new XMLHttpRequest();
				else
					viewIntOne = new ActiveXObject("Microsoft.XMLHTTP");

				viewIntOne.onreadystatechange = function()
				{
					if( viewIntOne.readyState == 4 && viewIntOne.status == 200 )
					{
						ViewInternalOne.innerHTML = viewIntOne.responseText;
						console.log(viewIntOne.responseText);
					}
				};
				
				var viewopt = "viewopt=" + "1";
				viewIntOne.open("POST",'viewacad.php',true);
				viewIntOne.setRequestHeader("content-type","application/x-www-form-urlencoded");
				viewIntOne.send(viewopt);
			});
			
			ViewInternalTwoBtn.addEventListener('click',function(){

				ViewInternalOne.style.display="none";
				ViewInternalTwo.style.display="block";
				ViewInternalThree.style.display="none";
				ViewSemester.style.display="none";

				ViewInternalOneBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalTwoBtn.setAttribute("class","btn btn-success");
				ViewInternalThreeBtn.setAttribute("class","btn btn-outline-success");
				ViewSemesterBtn.setAttribute("class","btn btn-outline-success");
				
				if( window.XMLHttpRequest )
					viewIntTwo = new XMLHttpRequest();
				else
					viewIntTwo = new ActiveXObject("Microsoft.XMLHTTP");

				viewIntTwo.onreadystatechange = function()
				{
					if( viewIntTwo.readyState == 4 && viewIntTwo.status == 200 )
					{
						ViewInternalTwo.innerHTML = viewIntTwo.responseText;
						console.log(viewIntTwo.responseText);
					}
				};
				
				var viewopt = "viewopt=" + "2";
				viewIntTwo.open("POST",'viewacad.php',true);
				viewIntTwo.setRequestHeader("content-type","application/x-www-form-urlencoded");
				viewIntTwo.send(viewopt);
			});

			ViewInternalThreeBtn.addEventListener('click',function(){

				ViewInternalOne.style.display="none";
				ViewInternalTwo.style.display="none";
				ViewInternalThree.style.display="block";
				ViewSemester.style.display="none";

				ViewInternalOneBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalTwoBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalThreeBtn.setAttribute("class","btn btn-success");
				ViewSemesterBtn.setAttribute("class","btn btn-outline-success");

				if( window.XMLHttpRequest )
					viewIntThree = new XMLHttpRequest();
				else
					viewIntThree = new ActiveXObject("Microsoft.XMLHTTP");

				viewIntThree.onreadystatechange = function()
				{
					if( viewIntThree.readyState == 4 && viewIntThree.status == 200 )
					{
						ViewInternalThree.innerHTML = viewIntThree.responseText;
						console.log(viewIntThree.responseText);
					}
				};

				var viewopt = "viewopt=" + "3";
				viewIntThree.open("POST",'viewacad.php',true);
				viewIntThree.setRequestHeader("content-type","application/x-www-form-urlencoded");
				viewIntThree.send(viewopt);
			});

			ViewSemesterBtn.addEventListener('click',function(){

				ViewInternalOne.style.display="none";
				ViewInternalTwo.style.display="none";
				ViewInternalThree.style.display="none";
				ViewSemester.style.display="block";

				ViewInternalOneBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalTwoBtn.setAttribute("class","btn btn-outline-success");
				ViewInternalThreeBtn.setAttribute("class","btn btn-outline-success");
				ViewSemesterBtn.setAttribute("class","btn btn-success");
				
				if( window.XMLHttpRequest )
					viewSem = new XMLHttpRequest();
				else
					viewSem = new ActiveXObject("Microsoft.XMLHTTP");

				viewSem.onreadystatechange = function()
				{
					if( viewSem.readyState == 4 && viewSem.status == 200 )
					{
						ViewSemester.innerHTML = viewSem.responseText;
						console.log(viewSem.responseText);
					}
				};
				
				var viewopt = "viewopt=" + "4";
				viewSem.open("POST",'viewacad.php',true);
				viewSem.setRequestHeader("content-type","application/x-www-form-urlencoded");
				viewSem.send(viewopt);
			});
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			arrow_left.addEventListener('click',function(){
				editRecord.style.display="none";
				document.getElementsByClassName("btnholder")[0].style.display="block";
			});
			

			prsndetailsedit.addEventListener('click',function(){
				prsndetailsedit.style.padding = "13px";
				academicsedit.style.padding = "8px";
				prsndetailsedit_section.style.display = "block";
				academicsedit_section.style.display = "none";

				if( window.XMLHttpRequest )
					view2 = new XMLHttpRequest();
				else
					view2 = new ActiveXObject("Microsoft.XMLHTTP");

				view2.onreadystatechange = function()
				{
					if( view2.readyState == 4 && view2.status == 200 )
					{
						prsndetailsedit_section.innerHTML = view2.responseText;
						var rowData = document.getElementsByClassName("rowData");
						for(let i = 0; i < rowData.length; i++)
						{
							rowData[i].addEventListener('click',function(){
								var xregnum = (rowData[i].innerHTML).split("<td>");
								xregnum[1] = xregnum[1].replace("</td>","");
								document.getElementsByClassName("btnholder")[0].style.display="none";
								document.getElementById("editRecord").style.display="block";

								if( window.XMLHttpRequest )
									view3 = new XMLHttpRequest();
								else
									view3 = new ActiveXObject("Microsoft.XMLHTTP");
								
								view3.onreadystatechange = function()
								{
									if( view3.readyState == 4 && view3.status == 200 )
									{
										editRecordView.innerHTML = view3.responseText;
									}
								}

								var opt = "regnum=" + xregnum[1];
								view3.open("POST",'prsnledit.php',true);
								view3.setRequestHeader("content-type","application/x-www-form-urlencoded");
								view3.send(opt);
							});
						}
						console.log(view2.responseText);
					}
				};

				var opt = "opt=" + "1";
				view2.open("POST",'viewall.php',true);
				view2.setRequestHeader("content-type","application/x-www-form-urlencoded");
				view2.send(opt);
			});

			academicsedit.addEventListener('click',function(){
				prsndetailsedit.style.padding = "8px";
				academicsedit.style.padding = "13px";
				prsndetailsedit_section.style.display = "none";
				academicsedit_section.style.display = "block";
			});




			var interval = setInterval(function(){
				if( document.readyState === 'complete' )
				{
					document.getElementById("data_1_button").click();
					prsndetails.click();
					prsndetailsedit.click();
					internalOneBtn.click();
					ViewInternalOneBtn.click();
					clearInterval(interval);
				}
			});

			prsndetails.style.padding = "10px";
			academics.style.padding = "8px";

			prsndetails.addEventListener('click',function(){
				prsndetails.style.padding = "13px";
				academics.style.padding = "8px";
				prsndetails_section.style.display = "block";
				academics_section.style.display = "none";
				
				if( window.XMLHttpRequest )
					view1 = new XMLHttpRequest();
				else
					view1 = new ActiveXObject("Microsoft.XMLHTTP");

				view1.onreadystatechange = function()
				{
					if( view1.readyState == 4 && view1.status == 200 )
					{
						prsndetails_section.innerHTML = view1.responseText;
						console.log(view1.responseText);
					}
				};

				var opt = "opt=" + "1";
				view1.open("POST",'viewall.php',true);


				view1.setRequestHeader("content-type","application/x-www-form-urlencoded");
				view1.send(opt);
			});

			academics.addEventListener('click',function(){
				academics.style.padding = "13px";
				prsndetails.style.padding = "8px";
				
				prsndetails_section.style.display = "none";
				academics_section.style.display = "block";
			});
			
			
			
			
			function updateFun()
			{
				var ernum = (document.getElementById("ernum").value).replaceAll(" ","");
				var esname = (document.getElementById("esname").value).replace(" ","");
				var eroll = (document.getElementById("eroll").value).replaceAll(" ","");
				var edob = (document.getElementById("edob").value).replaceAll(" ","");
				var egender = (document.getElementById("egender").value).replaceAll(" ","");
				var efname = (document.getElementById("efname").value).replace(" ","");
				var ehscmarks = (document.getElementById("ehscmarks").value).replaceAll(" ","");
				var esslcmarks = (document.getElementById("esslcmarks").value).replaceAll(" ","");
				var efocc = (document.getElementById("efocc").value).replace(" ","");
				var eaadhar = (document.getElementById("eaadhar").value).replaceAll(" ","");

				if( window.XMLHttpRequest )
					update = new XMLHttpRequest();
				else
					update = new ActiveXObject("Microsoft.XMLHTTP");

				update.onreadystatechange = function()
				{
					if( update.readyState == 4 && update.status == 200 )
					{
						document.getElementById("editResult").innerHTML = update.responseText;
					}
				};

				var updval = "ernum=" + ernum + "&esname=" + esname + "&eroll=" + eroll + "&edob=" + edob + "&egender=" + egender + "&efname=" + efname + "&ehscmarks=" + ehscmarks + "&esslcmarks=" + esslcmarks + "&efocc=" + efocc + "&eaadhar=" + eaadhar;
				update.open("POST",'prsnledit.php',true);

				update.setRequestHeader("content-type","application/x-www-form-urlencoded");
				update.send(updval);
			}
			
			
			

			function delFun()
			{
				swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this student details !",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if(willDelete)
				  {
					if( window.XMLHttpRequest )
						del = new XMLHttpRequest();
					else
						del = new ActiveXObject("Microsoft.XMLHTTP");

					del.onreadystatechange = function()
					{
						if( del.readyState == 4 && del.status == 200 )
						{
							if( del.responseText == "success" )
								delrec.innerHTML = "<h4 style='color: red'>Deleted !</h4>";
							else
								delrec.innerHTML = "<h4 style='color: red'>Error Occured</h4>" ;

							console.log(del.responseText);
						}
					};

					var delregno = document.getElementById("delregno").value;
					if( delregno.length > 0 )
					{
						var delval = "delregno=" + delregno;
						del.open("POST",'delete.php',true);
						del.setRequestHeader("content-type","application/x-www-form-urlencoded");
						del.send(delval);

						swal("Done! The student has been deleted!", {
						  icon: "success",
						});
					}
					prsndetails.click();
				  }
				  else
				  {
					swal("The details is safe!");
				  }
				});
			}

			function delViewFun()
			{
				if( window.XMLHttpRequest )
					del = new XMLHttpRequest();
				else
					del = new ActiveXObject("Microsoft.XMLHTTP");

				del.onreadystatechange = function()
				{
					if( del.readyState == 4 && del.status == 200 )
					{
						if( del.responseText === " failure" )
						{
							delrec.innerHTML = "<h4 style='color: red'>" + "Not exists or it may be deleted" + "</h4>";
							swal ( "Not found !" ,  "Not exists or it may be deleted!" ,  "error" );
						}
						else
							delrec.innerHTML = del.responseText;

						console.log(del.responseText);
					}
				};

				var delregno = document.getElementById("delregno").value;

				if( delregno.length > 0 )
				{
					var delval = "delregno=" + delregno;
					del.open("POST",'delsel.php',true);
					del.setRequestHeader("content-type","application/x-www-form-urlencoded");
					del.send(delval);
				}
			}

			function addstudent()
			{
				var regnum = document.getElementById("regnum").value;
				var sname = document.getElementById("sname").value;
				var roll = document.getElementById("roll").value;
				var fname = document.getElementById("fname").value;
				var hscmarks = document.getElementById("hscmarks").value;
				var sslcmarks = document.getElementById("sslcmarks").value;
				var fatherocc = document.getElementById("fatherocc").value;
				var aadhar = document.getElementById("aadhar").value;

				var regex = new RegExp("^(7133)(18)(104)[0-9]{3}$");
				var numRegex = new RegExp("^[1-9][0-9]{2,4}$");
				var rollRegex = new RegExp("^(18)(cs|CS)[0-9]{3,6}$");

				var flg1 = 0 , flg2 = 0 , flg3 = 0 , flg4 = 0 , flg5 =0 , flg6 = 0, flg7 = 0, flg8 = 0; 

				if( regex.test(regnum) ){
					document.getElementById("regnum").style.border = "2px solid #000";
					flg1 = 1;
				}
				else{
					document.getElementById("regnum").style.border = "2px solid #FF0000";
					flg1 = 0;
				}


				if( sname.length >= 3 ){
					flg2 = 1;
					document.getElementById("sname").style.border = "2px solid #000" ;
				}
				else{
					flg2 = 0;
					document.getElementById("sname").style.border = "2px solid #FF0000" ;
				}

				
				
				if( rollRegex.test(roll) ){
					flg3 = 1;
					document.getElementById("roll").style.border = "2px solid #000" ;
				}
					
				else{
					flg3 = 0;
					document.getElementById("roll").style.border = "2px solid #FF0000" ;
				}
				
				if( fname.length >= 3 ){
					flg4 = 1;
					document.getElementById("fname").style.border = "2px solid #000" ;
				}
				else{
					flg4 = 0;
					document.getElementById("fname").style.border = "2px solid #FF0000" ;
				}
				
				
				if( numRegex.test(hscmarks) ){
					flg5 = 1;
					document.getElementById("hscmarks").style.border = "2px solid #000" ;
				}
				else{
					flg5 = 0;
					document.getElementById("hscmarks").style.border = "2px solid #FF0000" ;
				}

				
				if( numRegex.test(sslcmarks) ){
					flg6 = 1;
					document.getElementById("sslcmarks").style.border = "2px solid #000" ;
				}
				else{
					flg6 = 0;
					document.getElementById("sslcmarks").style.border = "2px solid #FF0000" ;
				}
				
				
				if( fatherocc.length >= 5 ){
					flg7 = 1;
					document.getElementById("fatherocc").style.border = "2px solid #000";
				}
				else{
					flg7 = 0;
					document.getElementById("fatherocc").style.border = "2px solid #FF0000";
				}


				if( aadhar.length == 14 ){
					flg8 = 1;
					document.getElementById("aadhar").style.border = "2px solid #000" ;
				}
				else{
					flg8 = 0;
					document.getElementById("aadhar").style.border = "2px solid #FF0000" ;
				}

				if( (flg1 == 1) && (flg2 == 1) && (flg3 == 1) && (flg4 == 1) && (flg5 == 1) && (flg6 == 1) && (flg7 == 1) && (flg8 == 1) )
				{
					if( window.XMLHttpRequest )
						a = new XMLHttpRequest();
					else
						a = new ActiveXObject("Microsoft.XMLHTTP");

					a.onreadystatechange = function()
					{
						if(a.readyState == 4 && a.status == 200)
						{
							if(a.responseText == "success" )
							{
								document.getElementById('stu-success').style.display='block';
								document.getElementById('stu-failure').style.display='none';

								setTimeout(function(){
									document.getElementById('stu-success').style.display="none";
								},2500);
							}
							else 
							{
								alert( a.responseText );
								console.log( a.responseText );
								document.getElementById('stu-failure').style.display='block';
								document.getElementById('stu-success').style.display='none';
								setTimeout(function(){
									document.getElementById('stu-failure').style.display="none";
								},2500);
							}
						}
					};

					var regnum = document.getElementById("regnum").value;
					var sname = document.getElementById("sname").value;
					var roll = document.getElementById("roll").value;
					var dob = document.getElementById("dob").value;
					var gender = document.getElementById("gender").options[document.getElementById("gender").selectedIndex].value;
					var fname = document.getElementById("fname").value;
					var hscmarks = document.getElementById("hscmarks").value;
					var sslcmarks = document.getElementById("sslcmarks").value;
					var fatherocc = document.getElementById("fatherocc").value;
					var aadhar = document.getElementById("aadhar").value;

					var val = "regnum=" + regnum + "&sname=" + sname + "&roll=" + roll + "&dob=" + dob + 
					"&gender=" + gender + "&fname=" + fname + "&hscmarks=" + hscmarks + "&sslcmarks=" + sslcmarks +
					"&fatherocc=" + fatherocc + "&aadhar=" + aadhar;
					console.log( val );
					a.open("POST",'addstu.php',true);
					a.setRequestHeader("content-type","application/x-www-form-urlencoded");
					a.send(val);
				}
			}

			aadhar.addEventListener('keyup',function()
			{
				let ln = aadhar.value.length;
				// if(aadhar.value[ ln-1 ].includes("a") )
					// aadhar.value = aadhar.value.replaceAll(/\D+/g, "");

				if( aadhar.value.length == 4 || aadhar.value.length == 9)
					aadhar.value = aadhar.value + "-" ;
			});

			for(let i = 0 ; i < btn.length ; i++)
			{
				btn[i].addEventListener('click',function()
				{
					if(btn[i].getAttribute("id") == "data_1_button" )
					{
						btn[0].setAttribute("class","btn btn-success");
						btn[1].setAttribute("class","btn btn-warning");
						btn[2].setAttribute("class","btn btn-warning");
						btn[3].setAttribute("class","btn btn-warning");

						data_1.style.display = "flex";
						data_2.style.display = "none";
						data_3.style.display = "none";
						data_4.style.display = "none";
						data_5.style.display = "none";
					}
					else if(btn[i].getAttribute("id") == "data_2_button" )
					{
						btn[1].setAttribute("class","btn btn-success");
						btn[0].setAttribute("class","btn btn-warning");
						btn[2].setAttribute("class","btn btn-warning");
						btn[3].setAttribute("class","btn btn-warning");
						btn[4].setAttribute("class","btn btn-warning");

						data_2.style.display = "block";
						data_1.style.display = "none";
						data_3.style.display = "none";
						data_4.style.display = "none";
						data_5.style.display = "none";
					}
					else if(btn[i].getAttribute("id") == "data_3_button" )
					{
						btn[2].setAttribute("class","btn btn-success");
						btn[1].setAttribute("class","btn btn-warning");
						btn[0].setAttribute("class","btn btn-warning");
						btn[3].setAttribute("class","btn btn-warning");
						btn[4].setAttribute("class","btn btn-warning");

						data_3.style.display = "block";
						data_2.style.display = "none";
						data_1.style.display = "none";
						data_4.style.display = "none";
						data_5.style.display = "none";
					}
					else if(btn[i].getAttribute("id") == "data_4_button" )
					{
						btn[3].setAttribute("class","btn btn-success");
						btn[1].setAttribute("class","btn btn-warning");
						btn[2].setAttribute("class","btn btn-warning");
						btn[0].setAttribute("class","btn btn-warning");
						btn[4].setAttribute("class","btn btn-warning");

						data_4.style.display = "block";
						data_2.style.display = "none";
						data_3.style.display = "none";
						data_1.style.display = "none";
						data_5.style.display = "none";
					}
					else if(btn[i].getAttribute("id") == "data_5_button" )
					{
						btn[3].setAttribute("class","btn btn-warning");
						btn[1].setAttribute("class","btn btn-warning");
						btn[2].setAttribute("class","btn btn-warning");
						btn[0].setAttribute("class","btn btn-warning");
						btn[4].setAttribute("class","btn btn-success");

						data_4.style.display = "none";
						data_2.style.display = "none";
						data_3.style.display = "none";
						data_1.style.display = "none";
						data_5.style.display = "block";
					}
				});
			}
		</script>
	</body>
</html>