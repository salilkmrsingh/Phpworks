<?php
require_once 'validuser.php';
require_once 'dbconnect.php';
$help= $_SESSION['userid'];
$qry="select * from project_tbl where id=$help";

$rs=mysql_query($qry);
$row=mysql_fetch_assoc($rs);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
	<form action="update.php" method="post">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
	<label for="email">Email:</label>
	<input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"><br>
	<label for="mobile">Mobile:</label>
	<input type="text" name="mobile" id="mobile" value="<?php echo $row['mobile']; ?>"><br>
	<input type="submit" name="update" value="update">
	</form>
</body>
</html>

