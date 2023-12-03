<?php
include_once "../../includes/dbh.inc.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['deleteuser'])) {
        $ID = $_SESSION['ID'];


        $sql = "delete from users where ID = '$ID'";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            header("location:../../backend/signout.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    elseif(isset($_POST['clientdelete'])){
        $ID = $_SESSION['ID'];

        $sql = "delete from client where ID='$ID' ";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../../backend/signout.php");
        }
        else{
            echo "Error: " . mysqli_error($conn);
        }

        
    }
    
}











?>