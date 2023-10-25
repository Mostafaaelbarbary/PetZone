<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title>Create Patient</title>
</head>
<body>
        <?php include "../backend/patientserver.php" ?> 
        <div class ="container">
       
        <div class = "box form-box">
          <header>Create a patient</header>
          <form action="" method="post">

           <div class="field input">
            <label for="name">Name</label>
            <input type ="text" name = "name" id="name" required>
          </div>

          <div class="field input">
              <label for=""> Species</label>
              <input type = "species" name = "species" id = "species" required>
           </div> 

          <div class="field input">
              <label for="">Gender</label>
              <input type ="gender" name = "gender" id="gender" required>
           </div>    
         

          <div class="field input">
              <label for="neutered">Neutered or Not</label>
              <input type ="neutered" name = "neutered" id="neutered" required>
           </div>   
           <div class="field input">
              <label for="">Age </label>
              <input type ="age" name = "age" id="age" required>
           </div>

           <div class="field input">
              <label for="">Birth_date </label>
              <input type ="Birth_date" name = "Birth_date" id="Birth_date" required>
           </div>

           <div class="field input">
            <label for="weight">Weight</label>
            <input type ="text" name = "weight" id="weight" required>
          </div>

           <div class="field input">
              <label for="Clientname"> Client's name</label>
              <input type = "Client's name" name = "Clientname" id = "Clientname" required>
           </div> 
  
         <div class="field input">
          <input type ="submit" class="btn" name = "submit" value= "Update" required>
       </div>
       
          </form>
        </div>
      </div>


</body>
</html>