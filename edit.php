<?php
session_start();
include_once "includes/dbh.inc.php";


if($_SERVER["REQUEST_METHOD"]=="POST"){
   if (isset($_POST['edituser'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $Email = htmlspecialchars($_POST['Email']);
    $password = htmlspecialchars($_POST['password']);


    $sql = "update users set firstname='$firstname',lastname='$lastname',Email='$Email',password='$password' where ID =" . $_SESSION['ID'];
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $_SESSION['firstname'] = $firstname;
      $_SESSION['lastname'] = $lastname;
      $_SESSION['Email'] = $Email;
      $_SESSION['password'] = $password;
      header("location:index.php");
    } else {
      echo "Error: " . mysqli_error($conn);
    }

  }

    elseif (isset($_POST['clientedit'])){
      $name = htmlspecialchars($_POST['name']);
      $phonenumber = htmlspecialchars($_POST["phonenumber"]);
      $PatientID = htmlspecialchars($_POST['PatientID']);
      $number_of_pets = htmlspecialchars($_POST['number_of_pets']);
      $date_of_first_visit = htmlspecialchars($_POST['date_of_first_visit']);
      $Email = htmlspecialchars($_POST['Email']);

    $sql = "update client set name='$name',phonenumber='$phonenumber'
    ,PatientID='$PatientID', number_of_pets='$number_of_pets',date_of_first_visit='$date_of_first_visit',Email='$Email' where ID =".$_SESSION['ID'];

    $result = mysqli_query($conn,$sql);

    if($result){
      $_SESSION['name'] = $name;
      $_SESSION['phonenumber'] = $phonenumber;
      $_SESSION['PatientID'] = $PatientID;
      $_SESSION['number_of_pets'] = $number_of_pets;
      $_SESSION['date_of_first_visit'] = $date_of_first_visit;
      $_SESSION['Email'] = $Email;
        header("location:index.php");
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }
  }

  

  // elseif(isset($_POST['patient'])){
  //   $name=htmlspecialchars($_POST['name']);
  //   $species=htmlspecialchars($_POST['species']);
  //   $gender = htmlspecialchars($_POST['gender']);
  //   $neutered = htmlspecialchars($_POST['neutered']);
  //   $age = htmlspecialchars($_POST['age']);
  //   $Birth_date = htmlspecialchars($_POST['Birth_date']);
  //   $weight = htmlspecialchars($_POST['weight']);
  //   $Clientname = htmlspecialchars($_POST['Clientname']);

  //   $sql = "update patient set name='$name',species='$species',gender='$gender',neutered='$neutered',age='$age'
  //   ,Birth_date='$Birth_date',weight='$weight',Clientname='$Clientname' where ID =" .$_SESSION['ID'];

  //   $result = mysqli_query($conn, $sql);

  //   if($result){
  //     $_SESSION['name'] = $name;
  //     $_SESSION['species'] = $species;
  //     $_SESSION['gender'] = $gender;
  //     $_SESSION['neutered'] = $neutered;
  //     $_SESSION['age'] = $age;
  //     $_SESSION['Birth_date'] = $Birth_date;
  //     $_SESSION['weight'] = $weight;
  //     $_SESSION['Clientname'] = $Clientname;

  //     header("location:../frontend/index.php");
  //   }
  //   else{
  //     echo "Error: " . mysqli_error($conn);
  //   }



  // }
    }

?>