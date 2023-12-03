<?php 
session_start();
include_once "includes/dbh.inc.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars($_POST['name']);
    $Email = htmlspecialchars($_POST['Email']);
    
    
    $sql=" select * from client where name='$name' and Email='$Email'";

    $result = mysqli_query($conn,$sql);

    if($row=mysqli_fetch_array($result)){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['phonenumber'] = $row['phonenumber'];
        $_SESSION['PatientID'] = $row['PatientId'];
        $_SESSION['number_of_pets'] = $row['number_of_pets'];
        $_SESSION['date_of_first_visit'] = $row['date_of_first_visit'];
        
        header("location:clientprofile.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }

}
?>