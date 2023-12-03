
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">
  <title>Profile</title>

  
<body>

<?php include_once "../../backend/edit.php";
include_once "../../backend/delete.php";
?>

<div class ="container">
        <div class = "box form-box">
          <header>Profile</header>
          

          <form action="" method="post">

          <div class="field input">
            <label for="first name">First name</label>
            <input type ="text" name = "firstname" value="<?php echo $_SESSION['firstname']?>" id="first name" required>
          </div>

          <div class="field input">
            <label for="Last name">Last name</label>
            <input type ="text" name = "lastname" value="<?php echo $_SESSION['lastname']?>" id="Last name" required>
          </div>
          
          <div class="field input">
            <label for=" Username">Username</label>
            <input type ="text" name = "Username" id="Username" value="<?php echo $_SESSION['Username']?>" required>
          </div>

          <div class="field input">
            <label for="Email">Email</label>
            <input type ="text" name = "Email" value="<?php echo $_SESSION['Email']?>" id="Email" required>
         </div>

            <div class="field input">
              <label for="password"> Password  </label>
              <input type ="password" name = "password" value="<?php echo $_SESSION['password']?>" id="password" required>
           </div>

         <div class="field input">
          <input type ="submit" class="btn" name = "edituser" value="Update" required>
          <input type ="submit" class="btn" name = "deleteuser" value="Delete" required>
       </div>

       <div class=" links">
        Already have an account ?  <a href="login.php"> Login in Now  </a>
       </div>

      
          </form>
       
        </div>
      </div>
</body>
</html>