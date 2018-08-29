<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<?php
if(isset($_COOKIE['email']) && isset($_COOKIE['password']))

{
?>

	<form  action="login.php" method="post">

	<label for="email">Email</label>
	<input type="text" name="email" id="email" value="<?php echo $_COOKIE['email'] ?>"><br>
	<label for="password">Password</label>
	<input type="password" name="password" id="password" value="<?php echo $_COOKIE['password'] ?>"><br>
	<input type="checkbox" name="rememberme" value="rememberme">Remember me <br>
	<input type="submit" name="login" value="login">


	</form>
<?php
}
else{
?>
	<form  action="login.php" method="post">

	<label for="email">Email</label>
	<input type="text" name="email" id="email"><br>
	<label for="password">Password</label>
	<input type="password" name="password" id="password"><br>
	<input type="checkbox" name="rememberme" value="rememberme">Remember me <br>
	<input type="submit" name="login" value="login">


	</form>
<?php
}
?>
</body>
</html>

<?php
extract($_POST);
if (isset($rememberme)) {
	setcookie('email',$email,time()+10000000000);
	setcookie('password',$password,time()+10000000000);
}
if (isset($login)) {
	require_once 'dbconnect.php';

	$qry="select * from project_tbl where email='$email' and password='$password'";
	$rs=mysql_query($qry);

	$count=mysql_num_rows($rs);
	if($count==1)
	{
		$row=mysql_fetch_assoc($rs);
		session_start();
		$_SESSION['name']=$row['name'];
		$_SESSION['userid']=$row['id'];
		header('location:myaccount.php');
	}
	else{
		echo "wrong email or password";
	}
}
?>