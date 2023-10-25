<?php 
session_start();
include_once "../includes/dbh.inc.php";

//grap info from user

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars($_POST['name']);
    $Email = htmlspecialchars($_POST['Email']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $PatientID = htmlspecialchars($_POST['PatientID']);
    $number_of_pets = htmlspecialchars($_POST['number_of_pets']);
    $date_of_first_visit = htmlspecialchars($_POST['date_of_first_visit']);

    $sql="insert into client(name,Email,phonenumber,PatientID,number_of_pets,date_of_first_visit) 
    values('$name','$Email','$phonenumber','$PatientID','$number_of_pets','$date_of_first_visit')";

    $result = mysqli_query($conn,$sql);

    if($result){
        
        header("location:../frontend/index.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }

}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars($_POST['name']);
    $Email = htmlspecialchars($_POST['Email']);
    $phonenumber = htmlspecialchars($_POST["phonenumber"]);
    $PatientID = htmlspecialchars($_POST['PatientID']);
    $number_of_pets = htmlspecialchars($_POST['number_of_pets']);
    $date_of_first_visit = htmlspecialchars($_POST['date_of_first_visit']);

    $sql=" select * from client where name='$name', Email='$Email', phonenumber='$phonenumber',
     PatientID='$PatientID', number_of_pets='$number_of_pets', date_of_first_visit='$date_of_first_visit' ";

    $result = mysqli_query($conn,$sql);

    if($row=mysqli_fetch_array($result)){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['phonenumber'] = $row['phonenumber'];
        $_SESSION['PatientID'] = $row['PatientId'];
        $_SESSION['number_of_pets'] = $row['number_of_pets'];
        $_SESSION['date_of_first_visit'] = $row['date_of_first_visit'];
        
        header("location:../frontend/index.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }

}













?>