<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			color: white;
			background-image: url("image/nature_path.jpg");
		}
		header{
			text-align: center;
			font-size: 125%;
		}
		#login{
			margin-left: 22%;
			margin-right: 25%;
			border-radius: 20px;
			border: 2px solid white;
			padding: 7%;
			padding-left: 13%;
			background-image: url("image/hero-bg.jpg");
			
		}
		#form{
			font-size: 125%;
			font-family: "Comic Sans MS",sans-serif;
			padding: 7px;
			line-height: 35px;
		}
		input[type="text"],input[type="password"]{
			padding: 7%;
			margin: 5%;
			border-radius: 15px;
		}
		input[type="text"]:focus,input[type="password"]:focus{
            outline: none;
            background-color: lightcyan;
            padding: 9%;
        }
        input[type="submit"]{
        	padding: 10%;
        	margin-left: 50%; 
        	margin-top: 35%;
        	padding-left: 40%;
        	padding-right: 40%;
        	border-radius: 15px;
        	background-image: url("image/gallery2.jpeg");
        	font-size: 200%;
        	color: white;
        }
	</style>
</head>
<body>
	<header>
		<h1>Login here</h1>
	</header>
	<div id="login">
		<form action="" method="post" id="form">
			<table>
				
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" value="<?php 
					if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
echo $_COOKIE['email'] ?>" placeholder="Enter Email">  </td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="password" name="password" id="pasword" value="<?php
					if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
echo $_COOKIE['password'] ?>" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="login" value="login">
					</td>
				</tr>
			</table>
		</form>
	</div>
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