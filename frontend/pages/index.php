<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="../style/style.css">
</head>
<?php

session_start();

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['Username']."</h1>";
	echo"<a href='../forms/profile.php'>View Profile</a><br><br>";
	echo"<a href='../forms/create-client.php'>Create Client</a><br><br>";
	echo"<a href='../forms/clientin.php'>Client Sign in</a><br><br>";
	echo"<a href='../forms/clientprofile.php'>View Client</a><br><br>";
	echo "<a href='../forms/create-patient.php'>Create Patient</a><br><br>";
	echo "<a href='../forms/patientprofile.php'>View Patient</a><br><br>";
	
	echo"<a href='../../backend/signout.php'>SignOut</a>";
}
else{
	echo "<h1>Welcome</h1>";
	echo"<a href='../forms/login.php'>Login</a>";
	echo"<br>";
	echo"<br><a href='../forms/register.php'>Signup</a>";
}
?>
</html>