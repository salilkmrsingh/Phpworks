<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
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
		#register{
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
        	margin-left: 20%; 
        	margin-top: 25%;
        	padding-left: 40%;
        	padding-right: 40%;
        	border-radius: 15px;
        	background-image: url("image/gallery2.jpeg");
        	font-size: 200%;
        	color: white;
        }
        a{
			text-decoration: none;
			color: red;
		}
	</style>
</head>
<body>
	<header>
		<h1>Register here</h1>
	</header>
	<div id="register">
		<form action="" method="post" id="form">
			<table>
				<tr>
					<td><label for="name">Name:</label></td>
					<td><input type="text" name="name" id="name" placeholder="Enter Name" autofocus></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" placeholder="Enter Email"></td>
				</tr>
				<tr>
					<td><label for="mobile">Mobile:</label></td>
					<td><input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number"></td>
				</tr>
				<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="password" name="password" id="password" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="register" value="register">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>

<?php
extract($_POST);
if (isset($register)) {
	require_once 'dbconnect.php';
	require_once 'validate.php';
	$qry="select * from project_tbl where email='".format_str($email)."'";
	$rs=mysql_query($qry);
	$count=mysql_num_rows($rs);
	if ($count==0){
	$qry="insert into project_tbl (name,email,mobile,password) 
	values('".format_str($name)."','".format_str($email)."','".format_str($mobile)."','".format_str($password)."')";
	$res=mysql_query($qry);
	if ($res) {
		echo("registered successfully");
?>
<a href="login.php"><h1>Login</h1></a>
<?php
		}
	else {
		echo ("Registeration failed");
	}

	}
	else {
		echo "Already registered";
?>
<a href="login.php"><h1>Login</h1></a>
<?php
	}
}

?>					