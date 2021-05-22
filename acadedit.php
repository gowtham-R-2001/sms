<?php
	if( isset($_REQUEST['ant']) && isset($_REQUEST['cn']) && isset($_REQUEST['mpmc']) && isset($_REQUEST['toc'])
		&& isset($_REQUEST['ooad']) && isset($_REQUEST['ise']) && isset($_REQUEST['opt']) && isset($_REQUEST['regnum']) )
		{
			$connection = mysqli_connect("localhost","root","","sms");

			if( !$connection )
				die("Connection error ").mysqli_error();

			$ant = $_REQUEST['ant'];
			$cn = $_REQUEST['cn'];
			$mpmc = $_REQUEST['mpmc'];
			$toc = $_REQUEST['toc'];
			$ooad = $_REQUEST['ooad'];
			$ise = $_REQUEST['ise'];
			$regnum = $_REQUEST['regnum'];

			if( $_REQUEST['opt'] != 4 )
			{
				if( $ant == "" )
					$ant = -1;
				if( $cn == "" )
					$cn = -1;
				if( $mpmc == "" )
					$mpmc = -1;
				if( $toc == "" )
					$toc = -1;
				if( $ooad == "" )
					$ooad = -1;
				if( $ise == "" )
					$ise = -1;

				if( $ant != -1 && $cn != -1 && $mpmc != -1 && $toc != -1 && $ooad != -1 && $ise != -1 )
					$avg = ($ant + $cn + $mpmc + $toc + $ooad + $ise)/6;
				else
					$avg = -1;
			}

			$result = "";

			if( ($ant >= 40) && ($cn >= 40) && ($mpmc >= 40) && ($toc >= 40) && ($ooad >= 40) && ($ise >= 40) )
				$result = "P";
			else
				$result = "F";

			if( $_REQUEST['opt'] == 1 )
			{
				$Onesql = "UPDATE internal_one SET ant={$ant},cn={$cn},mpmc={$mpmc},toc={$toc},ooad={$ooad},ise={$ise},avg={$avg},result='{$result}' WHERE regnum='{$regnum}';";

				if( mysqli_query($connection,$Onesql) )
					echo "success";
				else
					echo "failure";
			}
			else if($_REQUEST['opt'] == 2)
			{
				$Twosql = "UPDATE internal_two SET ant={$ant},cn={$cn},mpmc={$mpmc},toc={$toc},ooad={$ooad},ise={$ise},avg={$avg},result='{$result}' WHERE regnum='{$regnum}';";

				if( mysqli_query($connection,$Twosql) )
					echo "success";
				else
					echo "failure";
			}
			else if($_REQUEST['opt'] == 3)
			{
				$Threesql = "UPDATE internal_three SET ant={$ant},cn={$cn},mpmc={$mpmc},toc={$toc},ooad={$ooad},ise={$ise},avg={$avg},result='{$result}' WHERE regnum='{$regnum}';";

				if( mysqli_query($connection,$Threesql) )
					echo "success";
				else
					echo "failure";
			}
			else if( $_REQUEST['opt'] == 4 )
			{
				$Semresult = "";
				$mpmclab =  $_REQUEST['mpmclab'];
				$ooadlab =  $_REQUEST['ooadlab'];
				$netlab =  $_REQUEST['netlab'];

				if( $ant != "RA" && $cn != "RA" && $mpmc != "RA" && $toc != "RA" && $ooad != "RA" && $ise != "RA" && $mpmclab != "RA" && $ooadlab != "RA" && $netlab != "RA" )
					$result = "AC";
				else
					$result = "RA";

				$gpa = ( (gpaFun($ant)*4) + (gpaFun($cn)*3) + (gpaFun($mpmc)*3) + (gpaFun($toc)*3) + (gpaFun($ise)*3) + (gpaFun($ooad)*3) + (gpaFun($mpmclab)*2) + (gpaFun($ooadlab)*2) + (gpaFun($netlab)*2) ) / 25;
				echo "GPA ANT : " . gpaFun($ant)*4 ;
				// gpaFun($ant) + gpaFun($cn) + gpaFun($ooad) + gpaFun($mpmc) + gpaFun($ise) + gpaFun($toc) + gpaFun($ooadlab) + gpaFun($netlab) + gpaFun($mpmclab)

				if( !($ant != '' && $cn != '' && $mpmc != '' && $toc != '' && $ooad != '' && $ise != '' && $mpmclab != '' && $ooadlab != '' && $netlab != ''
					&& $ant != 'null' && $cn != 'null' && $mpmc != 'null' && $toc != 'null' && $ooad != 'null' && $ise != 'null' && $mpmclab != 'null'
					&& $ooadlab != 'null' && $netlab != 'null') )
					{
						$result = "nil";
						$gpa = -1;
					}

				$Semsql = "UPDATE semester SET ant='{$ant}',cn='{$cn}',mpmc='{$mpmc}',toc='{$toc}',ooad='{$ooad}',ise='{$ise}',mpmclab='{$mpmclab}',ooadlab='{$ooadlab}',netlab='{$netlab}',gpa={$gpa},result='{$result}'  WHERE regnum='{$regnum}';";

				if( mysqli_query($connection,$Semsql) )
					echo "success";
				else 
					echo "failure";
			}
			else
				echo "sorry for";

			mysqli_close($connection);
		}
		else
			echo "sorry";
		
		function gpaFun($x)
		{
			$ret = 0;

			if( $x == 'O' )
				$ret = 10;

			else if( $x == 'AP' )
				$ret = 9;

			else if( $x == 'A' )
				$ret = 8;

			else if( $x == 'BP' )
				$ret = 7;

			else if( $x == 'B' )
				$ret = 6;

			else if( $x == 'RA' )
				$ret = 5;
			
			return($ret);
		}
?>