<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="../style/style.css">

  <title> Patient History</title>
</head>
<body>
        <div class ="container">
       
        <div class = "box form-box">
          <header>Create a patient</header>
          <form action="" method="post">

            

           <div class="field input">
              <label for="">Age </label>
              <input type ="age" name = "age" id="age" required>
           </div>

           <div class="field input">
              <label for="">Birth_date </label>
              <input type ="Birth_date" name = "Birth_date" id="Birth_date" required>
           </div>

           <div class="field input">
              <label for=""> Species</label>
              <input type = "species" name = "species" id = "species" required>
           </div>    

           <div class="field input">
              <label for=""> Client's name</label>
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