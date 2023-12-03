<?php
session_start();
include_once "../../includes/dbh.inc.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $petname = htmlspecialchars($_POST['petname']);
    $age = htmlspecialchars($_POST['age']);
    $species = htmlspecialchars($_POST['species']);
    $Birth_date = htmlspecialchars($_POST['Birth_date']);
    $Clientname = htmlspecialchars($_POST['Clientname']);


    $sql = "select * from patient where Clientname='$Clientname', name=$petname";

    $result = mysqli_query($conn, $sql);

    if($row=mysqli_fetch_array($result)){
        $_SESSION['petname'] = $row['petname'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['species'] = $row['species'];
        $_SESSION['Birth_date'] = $row['Birth_date'];
        $_SESSION['Clientname'] = $row['Clientname'];
        header("location:../pages/index.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }





}



?>