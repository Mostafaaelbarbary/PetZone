
<?php
include_once "../includes/dbh.inc.php";
?>

<?php
session_start();
//Checking if form was submitted and grapping info inserted by the user
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $Email = htmlspecialchars($_POST['Email']);
    $password = htmlspecialchars($_POST['password']);


    $sql="insert into users(firstname,lastname,Email,password) 
    values('$firstname','$lastname','$Email','$password')";

    $result=mysqli_query($conn,$sql);

    if($result){
      header("location:../frontend/index.php");
    }
     else{
      echo "Error: " . mysqli_error($conn);
    }
  

    }
   










?>


