<?php
	if( isset($_REQUEST['regnum']) && isset($_REQUEST['sname']) && isset($_REQUEST['roll']) &&
		isset($_REQUEST['dob'])	&& isset($_REQUEST['gender']) && isset($_REQUEST['fname'] )	&&
		isset($_REQUEST['hscmarks']) && isset($_REQUEST['sslcmarks']) && isset($_REQUEST['fatherocc'])
		&& isset($_REQUEST['aadhar']) )
	{
		$connection = mysqli_connect("localhost","root","","sms");

		if( !$connection )
			die("unable to connect ").mysqli_error();

		$regnum = $_REQUEST['regnum'];

		$Insertsql = "INSERT INTO `stupersonal`
			(`regnum`, `sname`, `roll`, `dob`, `gender`, `fname`, `hscmarks`, `sslcmarks`, `focc`, `aadhar`)
			VALUES('" . $_REQUEST['regnum'] . "','" . $_REQUEST['sname'] . "','"
			. $_REQUEST['roll'] . "','" . strval($_REQUEST['dob']) . "','" . $_REQUEST['gender']
			. "','" . $_REQUEST['fname'] . "'," . $_REQUEST['hscmarks'] . "," . $_REQUEST['sslcmarks']
			. ",'" . $_REQUEST['fatherocc'] . "','" . strval($_REQUEST['aadhar']) . "');";

			$InternalOneSQL = "INSERT INTO `internal_one`(`regnum`, `ant`, `cn`, `mpmc`, `toc`, `ooad`, `ise`, `avg`, `result` , `name`)
				VALUES('{$regnum}',null,null,null,null,null,null,null,null,'{$_REQUEST['sname']}')";

			$InternalTwoSQL = "INSERT INTO `internal_two`(`regnum`, `ant`, `cn`, `mpmc`, `toc`, `ooad`, `ise`, `avg`, `result` , `name`)
				VALUES('{$regnum}',null,null,null,null,null,null,null,null,'{$_REQUEST['sname']}')";

			$InternalThreeSQL = "INSERT INTO `internal_three`(`regnum`, `ant`, `cn`, `mpmc`, `toc`, `ooad`, `ise`, `avg`, `result` , `name`)
				VALUES('{$regnum}',null,null,null,null,null,null,null,null,'{$_REQUEST['sname']}')";

			$SemesterSQL = "INSERT INTO `semester`(`regnum`, `ant`, `cn`, `mpmc`, `toc`, `ooad`, `ise`, `result` , `name`)
				VALUES('{$regnum}',null,null,null,null,null,null,null,'{$_REQUEST['sname']}');";
				
			$sql = "INSERT INTO `messagetable`(`name`,`email`,`mobile`,`message`) 
			VALUES('{$_REQUEST['name']}','{$_REQUEST['name']}',`{$_REQUEST['mobile']}`,`{$_REQUEST['message']}`)" ;


			if(mysqli_query($connection,$Insertsql))
			{
				mysqli_query($connection,$InternalOneSQL);
				mysqli_query($connection,$InternalTwoSQL);
				mysqli_query($connection,$InternalThreeSQL);
				mysqli_query($connection,$SemesterSQL);
				echo "success";
			}
			else
				echo "failure";

			mysqli_close($connection);
	}
?>