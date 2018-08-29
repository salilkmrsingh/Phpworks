<?php
$con=mysql_connect("localhost","root","");
if (!$con) {
	exit("database not connected");
}
$sel=mysql_select_db('project');
if (!$sel) {
	exit("database not selected");
}
?>