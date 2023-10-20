<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="style/style.css">
  <title>Login</title>
</head>
<body>
      <div class ="container">
        <div class = "box form-box">
          <header>Login</header>
          <form action="" method="post">
           <div class="field input">
            <label for="username">Username</label>
            <input type ="text" name = "username" id="username" required>
          </div>

            <div class="field input">
              <label for="password">Password</label>
              <input type ="password" name = "password" id="password" required>
           </div>         

         <div class="field input">
          <label for="submit">Submit</label>
          <input type ="submit"class="btn" name = "submit" value="Login" required>
       </div>
       <div class=" links">
        Don't have an account ? <a href="signup.php">Sign Up Now </a>
       </div>
          </form>
        </div>
      </div>
</body>
</html>


<?php
session_start();

include_once 'includes/dbh.inc.php';

//fetch data from user and check if it exists in the database.
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    $password = htmlspecialchars($_POST['password']);

    //select data from database where Email and password match.
    $sql = "select * from users where username='$username' and password='$password'";

    //executes the sql query and sends the query to the database server and returns a result set object with the matching rows.
    $result = mysqli_query($conn, $sql);

    //checking if the login credentials match using the session variables.
    if($row=mysqli_fetch_array($result)){
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['username'] = $row['username'];
       
        $_SESSION['password'] = $row['password'];

       // header("location:.php");
    }
    












}


?>