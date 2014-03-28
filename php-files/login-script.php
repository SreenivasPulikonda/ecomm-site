<?php
$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('my_db');

$email = $_POST['e-mail'];
$password = $_POST['password'];

$query = "SELECT Email, Password FROM persons WHERE Email='$email' and Password='$password'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($num == 0) // that is if no records found in database
	header('location: login.php');
else
	{
	session_start();
	$_SESSION['email']=$row['Email'];
	header('location: home.php');	
	}
?>