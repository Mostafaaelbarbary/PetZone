
<?php
include_once "../../includes/dbh.inc.php";
?>

<?php
session_start();
//Checking if form was submitted and grapping info inserted by the user
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $Username = htmlspecialchars($_POST['Username']);
    $Email = htmlspecialchars($_POST['Email']);
    $password = htmlspecialchars($_POST['password']);


    $sql="insert into users(firstname,lastname,Username,Email,password) 
    values('$firstname','$lastname','$Username','$Email','$password')";

    $result=mysqli_query($conn,$sql);

    if($result){
      header("location:../pages/index.php");
    }
     else{
      echo "Error: " . mysqli_error($conn);
    }
  

    }
   










?>


