<html>
<head>
<title>Home</title>
</head>
<link rel="stylesheet" href ="style/style.css">
<div class ="container">
        <div class = "box form-box">
<div class ="field input">


<?php

session_start();

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['firstname']." ".$_SESSION['lastname']."</h1>";
	echo"<a href='profile.php'>View Profile</a><br><br>";
	echo"<a href='create-client.php'>Create Client</a><br><br>";
	echo"<a href='clientin.php'>Client Sign in</a><br><br>";
	echo"<a href='clientprofile.php'>View Client</a><br><br>";
	echo "<a href='create-patient.php'>Create Patient</a><br><br>";
	echo "<a href='dashboard.php'>dashboard</a><br><br>";
	echo "<a href='patientprofile.php'>View Patient</a><br><br>";
	echo "<a href='appointments.php'>appointment</a><br><br>";
	echo "<a href='vet.php'>shop</a><br><br>";

	echo"<a href='signout.php'>SignOut</a>";
}
else{
	echo "<h1>Welcome</h1>";
	echo"<a href='login.php'>Login</a>";
	echo"<br>";
	echo"<br><a href='register.php'>Signup</a>";
}
?>


</div>



				</div>
</div>








</html>