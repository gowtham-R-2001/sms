var student = document.getElementById("student");
var faculty = document.getElementById("faculty");

document.getElementById("regnum").focus();

var inputGroupSelect = document.getElementById("inputGroupSelect");
inputGroupSelect.addEventListener('change',function(){
	var option = inputGroupSelect.options[inputGroupSelect.selectedIndex].text;

	if( option.toLowerCase() === "student" )
	{
		document.title = "Student Login";
		student.style.display = "block";
		faculty.style.display = "none";
		document.getElementById("regnum").focus();
	}
	else if( option.toLowerCase() === "faculty" )
	{
		document.title = "Faculty Login";
		student.style.display = "none";
		faculty.style.display = "block";
		document.getElementById("username").focus();
	}
});

var eye = document.getElementsByClassName("fa");

for( let i = 0 ; i < eye.length ; i++ )
{
	eye[i].addEventListener('click',function()
	{
		let password = eye[i].getAttribute("for");

		if( eye[i].getAttribute("class") == "fa fa-eye" )
		{
			eye[i].setAttribute("class","fa fa-eye-slash");
			document.getElementById(password).setAttribute("type","password");
		}
		else
		{
			eye[i].setAttribute("class","fa fa-eye");
			document.getElementById(password).setAttribute("type","text");
		}
	});
}

function checkRegnum()
{
	var regex = new RegExp("^(7133)(18)(104)[0-9]{3}$");
	var reg = document.getElementById("regnum").value;
	if( regex.test(reg) )
	{
		return true;
	}
	else
	{
		alert("Enter valid regiser number");
		return false;
	}
}