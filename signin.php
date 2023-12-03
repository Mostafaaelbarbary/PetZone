<?php
session_start();

include_once 'includes/dbh.inc.php';

$errors = array(); // Initialize an array to store errors.

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $Username = $_POST["Username"];
    $password = $_POST["password"];

    // Perform basic validation
    if (empty($Username) || empty($password)) {
        $errors[] = "Both fields are required. Please fill them in.";
    } else {
        // Perform authentication here, checking against a database
        // You need to replace this with your actual authentication logic.
        // Below is a basic example using a database query.

        // Hash the password (for security) before querying the database
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare a SQL query with a placeholder for security (use prepared statements)
        $sql = "SELECT * FROM users WHERE Username = '$Username'";

        // $stmt = mysqli_prepare($conn, $sql);
        // mysqli_stmt_bind_param($stmt, "s", $Username);
        // mysqli_stmt_execute($stmt);
        $result = mysqli_query($conn, $sql);
        //$result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_array($result)) {
            // Verify the hashed password
          //  if (password_verify($password, $row['password'])) {
                // Authentication successful
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['password'] = $row['password'];
                
                // Redirect to a different page upon successful login
                header("location:index.php");
           // } 
            
        } else {
            Echo "Errors: " . mysqli_error($conn);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

// Check for and display errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

?>
