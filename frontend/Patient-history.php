<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title> Patient History</title>
</head>
<body>
      <?php include "../backend/patient-history.php" ?>
        <div class ="container">
       
        <div class = "box form-box">
          <header>Create a patient</header>
          <form action="" method="post">

            

           <div class="field input">
              <label for="name">Age </label>
              <input type ="name" name = "name" id="name" required>
           </div>

           <div class="field input">
              <label for="age">Age </label>
              <input type ="age" name = "age" id="age" required>
           </div>

           <div class="field input">
              <label for="Birth_date">Birth_date </label>
              <input type ="Birth_date" name = "Birth_date" id="Birth_date" required>
           </div>

           <div class="field input">
              <label for="species"> Species</label>
              <input type = "species" name = "species" id = "species" required>
           </div>    

           <div class="field input">
              <label for="Clientname"> Client's name</label>
              <input type = "Clientname" name = "Clientname" id = "Clientname" required>
           </div> 

         <div class="field input">
          <input type ="submit" class="btn" name = "submit" value= "Submit" required>
       </div>
       
          </form>
        </div>
      </div>


</body>
</html>