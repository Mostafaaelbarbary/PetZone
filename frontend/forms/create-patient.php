<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title>Create Patient</title>
</head>
<body>
        <?php include "../../backend/patientserver.php";?> 
        <div class ="container">
       
        <div class = "box form-box">
          <header>Create a patient</header>
          <form action="" method="post">

           <div class="field input">
            <label for="petname">Name</label>
            <input type ="text" name = "petname" id="petname" required>
          </div>

          <div class="field input">
              <label for="species"> Species</label>
              <input type = "text" name = "species" id = "species" required>
           </div> 

          <div class="field input">
              <label for="gender">Gender</label>
              <input type ="text" name = "gender" id="gender" required>
           </div>    
         

          <div class="field input">
              <label for="neutered">Neutered or Not</label>
              <input type ="text" name = "neutered" id="neutered" required>
           </div>   
           <div class="field input">
              <label for="age">Age </label>
              <input type ="text" name = "age" id="age" required>
           </div>

           <div class="field input">
              <label for="Birth_date">Birth_date </label>
              <input type ="Birth_date" name = "Birth_date" id="Birth_date" required>
           </div>

           <div class="field input">
            <label for="weight">Weight</label>
            <input type ="text" name = "weight" id="weight" required>
          </div>

           <div class="field input">
              <label for="Petname"> Client's name</label>
              <input type = "text" name = "Clientname" id = "Client's name" required>
           </div> 
  
         <div class="field input">
          <input type ="submit" class="btn" name = "patient" value= "Submit" required>
       </div>
       
          </form>
        </div>
      </div>


</body>
</html>