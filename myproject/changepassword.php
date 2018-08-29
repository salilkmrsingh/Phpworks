
<?php
require_once 'validuser.php';
// code for changing password
extract($_POST);
if (isset($changenow)) 
{
	if ($newpass==$matpass) 
	{
		require_once 'dbconnect.php';
		$help=$_SESSION['userid'];
		$qry="select * from project_tbl where id=$help and password='$curpass'";
		$rs=mysql_query($qry);
		$a= mysql_error();
		echo $a;
		$count=mysql_num_rows($rs);
		if($count==1)
		{
			$qry="update project_tbl set password=$newpass where id=$help";
			$res=mysql_query($qry);
			if ($res) 
			{
				echo "password reset completed";
			}
			else{
				echo "Unable to reset password";
			}
		}
		else
		{
			echo "You entered wrong password";
		}

	}
	else
	{
		echo "password should match";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
	<style type="text/css">
		input{
			margin: 10px;
		}
		body{
			font-size: 125%;
		}
	</style>
</head>
<body>
	<form action="" method="post">
	<label for="curpass">Current Password:</label>
	<input type="password" name="curpass" id="curpass">
	<br>
	<label for="newpass">New Password:</label>
	<input type="password" name="newpass" id="newpass">
	<br>
	<label for="matpass">Re enter Password:</label>
	<input type="password" name="matpass" id="matpass">
	<br>
	<input type="submit" name="changenow" value="changenow">
	</form>
</body>
</html>
