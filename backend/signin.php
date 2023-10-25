<?php
session_start();

include_once '../includes/dbh.inc.php';

//fetch data from user and check if it exists in the database.
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = htmlspecialchars($_POST['firstname']);
    $password = htmlspecialchars($_POST['password']);

    //select data from database where Email and password match.
    $sql = "select * from users where firstname='$firstname' and password='$password'";

    //executes the sql query and sends the query to the database server and returns a result set object with the matching rows.
    $result = mysqli_query($conn, $sql);

    //checking if the login credentials match using the session variables.
    if($row=mysqli_fetch_array($result)){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['password'] = $row['password'];

        header("location:../frontend/index.php");
    }
    else{
      echo "Error: " . mysqli_error($conn);
    }
    
}
















?>