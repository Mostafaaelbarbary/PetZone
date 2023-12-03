<?php
session_start();
include_once "../../includes/dbh.inc.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $petname = htmlspecialchars($_POST['petname']);
    $species = htmlspecialchars($_POST['species']);
    $gender = htmlspecialchars($_POST["gender"]);
    $neutered = htmlspecialchars($_POST['neutered']);
    $age = htmlspecialchars($_POST['age']);
    $Birth_date = htmlspecialchars($_POST['Birth_date']);
    $weight = htmlspecialchars($_POST['weight']);
    $Clientname = htmlspecialchars($_POST['Clientname']);


    $sql = "insert into patient(petname,species,gender,neutered,age,Birth_date,weight,Clientname)
    values('$petname','$species','$gender','$neutered','$age','$Birth_date','$weight','$Clientname')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:../pages/index.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }





}



?>