<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="style/style.css">
  <title>Register</title>

  
<body>
<div class ="container">
        <div class = "box form-box">
          <header>Register</header>
          <form action="" method="post">

          <div class="field input">
            <label for="first name">First name</label>
            <input type ="text" name = "first name" id="first name" required>
          </div>

          <div class="field input">
            <label for="Last name">Last name</label>
            <input type ="text" name = "Last name" id="Last name" required>
          </div>


           <div class="field input">
            <label for="username">Username</label>
            <input type ="text" name = "username" id="username" required>
          </div>

          <div class="field input">
            <label for="email">Email</label>
            <input type ="text" name = "email" id="email" required>
         </div>

            <div class="field input">
              <label for="password"> Password  </label>
              <input type ="password" name = "password" id="password" required>
           </div>

         <div class="field input">
          <label for="submit">Submit</label>
          <input type ="submit"class="btn" name = "submit" value="Sign-Up" required>
       </div>

       <div class=" links">
        Already have an account ?  <a href="login.php"> Login in Now  </a>
       </div>

      
          </form>
        </div>
      </div>
</body>
</html>

<?php
include_once "includes/dbh.inc.php";
?>

<?php
//Checking if form was submitted and grapping info inserted by the user
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    $sql="insert into users(username,Email,password)
    values('$username','$email','$password')";

    $result = mysqli_query($conn, $sql);

    if($result){
    header("location:login.php");
  

    }
    else{
      echo "Error: " . mysqli_error($conn);
    }
}









?>



