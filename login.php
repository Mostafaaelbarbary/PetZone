<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="style/style.css">
  <title>Login</title>
</head>
<body>
      <?php include "signin.php"?>
      <div class ="container">
        <div class = "box form-box">
          <header>Login</header>
          <form action="" method="post">
           <div class="field input">
            <label for=" Username">Username</label>
            <input type ="text" name = "Username" id="Username" required>
          </div>

            <div class="field input">
              <label for="password">Password</label>
              <input type ="password" name = "password" id="password" required>
           </div>         

         <div  class="login-btn">
        <input type ="submit" class="submit-btn" name = "login" value="Login" required>
       </div>
        
       <div class=" links">
        Don't have an account ? <a href="register.php">Sign Up Now </a>
       </div>

          </form>
        </div>
      </div>
</body>
</html>

















