<?php
include_once "includes/dbh.inc.php";
?>

<?php
//Checking if form was submitted and grapping info inserted by the user
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    $sql="insert into users(username,Email,password)
    values('$username','$email','$password')";

    $result = mysqli_query($conn, $sql);

    if($result){
    header("location:index.php");
  

    }
    else{
      echo "Error: " . mysqli_error($conn);
    }
}









?>




