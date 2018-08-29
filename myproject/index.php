<!DOCTYPE html>
<html>
<head>
	<title>Salil's Creation</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: #778778;
			margin: 0;
			font-size: 125%;
		}
		header,footer{
			background-color: black;
			color: red;
			border:5px solid red;
			text-align: center;
			margin: 0;
			padding: 10px;
		}
		nav{
			border: 5px solid lightgreen;
			background-color: lightgreen;
			
		}
		nav ul a h1 li{
			display: inline;
		}
		a{
			text-decoration: none;
			color: red;
		}
		section{
			border:2px solid red;
			padding: 25px;

		}
		article{
			background-color: white;
			border:2px solid red;
			margin: 5px;
			padding: 10px;
		}
		article h3,p{
			text-align: center;
		}
		#intro{
			color: blue;
		}
	</style>
</head>
<body>
	<header>
		<h1>WELCOME TO SALIL'S CREATION</h1>
	</header>
	<nav>
		<ul>
			<a href="register.php"><h1><li>Register</li></h1></a>
			<a href="login.php"><h1><li>Login</li></h1></a>
		</ul>
	</nav>
	<section>
		<article>
			<h3 id="intro">Introduction</h3>
			<p>This is a new website created by Salil.</p>
		</article>
		<article>
			<h3><a href="register.php">Register</a></h3>
			<p>To enjoy the services please register</p>
		</article>
		<article>
			<h3><a href="login.php">Login</a></h3>
			<p>Already registered ?</p>
			<p>Please login then</p>
		</article>
	</section>
	<footer>
		<p>&copy; All rights reserved. Salil's Creation.</p>
		<p>Developed by Salil</p>
	</footer>
</body>
</html>