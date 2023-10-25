<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">
  <title>Register</title>

  
<body>

<?php include_once "../backend/signup.php";?>
<div class ="container">
        <div class = "box form-box">
          <header>Register</header>
          <form action="" method="post">

          <div class="field input">
            <label for="first name">First name</label>
            <input type ="text" name = "firstname" id="first name" required>
          </div>

          <div class="field input">
            <label for="Last name">Last name</label>
            <input type ="text" name = "lastname" id="Last name" required>
          </div>

          <div class="field input">
            <label for="Email">Email</label>
            <input type ="text" name = "Email" id="Email" required>
         </div>

            <div class="field input">
              <label for="password"> Password  </label>
              <input type ="password" name = "password" id="password" required>
           </div>

         <div class="field input">
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