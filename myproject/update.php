<?php 

extract($_POST);
if(isset($update))
{
	session_start();
	$help=$_SESSION['userid'];
	require_once 'dbconnect.php';
	require_once 'validate.php';

	$qry="update project_tbl set name='".format_str($name)."',email='".format_str($email)."',mobile='".format_str($mobile)."' where id=$help";
	$res=mysql_query($qry);
	if ($res)
	{
		echo "updated successfully";
	}
	else{
		echo "could not update";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>	
		<br>
		<a href="myprofile.php">My profile</a>
		<br>
		<a href="myaccount.php">My Account</a>
</body>
</html>