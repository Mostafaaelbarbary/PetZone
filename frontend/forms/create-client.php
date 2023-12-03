<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title>Create Client</title>
 
</head>
<body>
          <?php include "../../backend/clientserver.php";
          //session_start();
          ?>

          <div class ="container">
        <div class = "box form-box">
          <header>Create a Client</header>
          <form action="" method="post">

           <div class="field input">
            <label for="name">Name</label>
            <input type ="text" name = "name" id="name" required>
          </div>

         
          <div class="field input">
            <label for="Email">Email</label>
            <input type ="text" name = "Email" id="Email" required>
          </div>


          <div class="field input">
            <label for="phonenumber">Phone Number</label>
            <input type ="text" name = "phonenumber" id="phonenumber" required>
          </div>


           <div class="field input">
              <label for="PatientID"> Patient's ID</label>
              <input type = "text" name = "PatientID" id = "PatientID" required>
              <input type="text"  placeholder="Number of pets" name="number_of_pets" list="List">
            <datalist id="List">
               <option value="1">  
               <option value="2">
               <option value="3">  
               <option value="4">
               <option value="5">  
               <option value="6">
               <option value="7">  
               <option value="8">
               <option value="9">  
               <option value="10">
               <option value="11">  
               <option value="12">
            </datalist>

           </div>    

           <div class="field input">
            <label for="date_of_first_visit">date of first visit</label>
            <input type ="text" name = "date_of_first_visit" id="date_of_first_visit" required>
          </div>
       
         <div class="field input">
          <input type ="submit" class="btn" name = "submit" value= "Submit" required>
       </div>
       
          </form>
        </div>
      </div>


</body>
</html>