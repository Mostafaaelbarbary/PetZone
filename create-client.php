<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title>Create Client</title>
 
</head>
<body>
          <?php include "../backend/clientserver.php";
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

          <div class="field-input">
          <label for="pet-select">Choose a pet:</label>
          <select name="pets" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="hamster">Hamster</option>
            <option value="parrot">Parrot</option>
            <option value="spider">Spider</option>
            <option value="goldfish">Goldfish</option>
          </select>
          </div>

           <div class="field-input">
              <label for="Number of pets" >Number of pets</label>
            <select name="pets" id="pets">
               <option value="1"> 1  </option>
               <option value="2"> 2</option>
               <option value="3"> 3  </option>
               <option value="4"> 4</option>
               <option value="5">  5 </option>
               <option value="6"> 6</option>
               <option value="7"> 7  </option>
               <option value="8"> 8</option>
               <option value="9">  9 </option>
               <option value="10"> 10</option>
               <option value="11">  11 </option>
               <option value="12"> 12</option>
            </select>

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