<?php
$user = $_POST['name'];
$pass = $_POST['password'];
if($user == "admin" && $pass == 'nopass')
{
	echo "Hey Admin"
}
else
{
	echo "Wrong User Id or Password"
}
?>
