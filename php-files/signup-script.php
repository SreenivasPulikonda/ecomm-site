<?php
$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('my_db');

$name = $_POST['name'];
$email = $_POST['e-mail'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$query = "INSERT INTO persons
(Name, Email, Password, Contact, City, Address)
VALUES
('$name','$email','$password','$contact','$city','$address')";
mysql_query($query);
session_start();
$_SESSION['email']=$email;
header('location: home.php');
?>