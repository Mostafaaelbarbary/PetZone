<?php
include_once "includes/dbh.inc.php";
?>

<?php
session_start();

$errors = array(); // An array to store validation errors

// Checking if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : "";
    $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : "";
    $Email = isset($_POST['Email']) ? filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) : "";
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";
    $Username = isset($_POST['Username']) ? htmlspecialchars($_POST['Username']) : "";

    // Validate the input
    if (empty($firstname)) {
        $errors[] = "First name is required.";
    }
    if (empty($lastname)) {
        $errors[] = "Last name is required.";
    }
    if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is required and must be a valid email address.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are no validation errors, insert data into the database
    if (empty($errors)) {
        $sql = "INSERT INTO users (firstname, lastname,Username, Email, password) 
                VALUES ('$firstname', '$lastname','$Username', '$Email', '$password')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location:index.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
