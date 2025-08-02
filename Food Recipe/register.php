<?php
require_once "config.php";
session_start();
 
// Initialize variables and error messages
$Username = $Email = $Password = $Confirm_Password = "";
$Username_err = $Email_err = $Password_err = $Confirm_Password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $Username = trim($_POST['Username']);
    $Email = trim($_POST['Email']);
    $Password = trim($_POST['Password']);
    $Confirm_Password = trim($_POST['Confirm_Password']);

    // Check if the username is already taken
    $sql = "SELECT id FROM register WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $param_Username);
        $param_Username = $Username;

        // Try to execute the statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                $Username_err = "This username is already taken";
            } else {
                // Username is available
            }
        } else {
            echo "Something went wrong";
        }
        mysqli_stmt_close($stmt);
    }

    // Check for password confirmation
    if (empty($Password) || ($Password != $Confirm_Password)) {
        $Confirm_Password_err = "Passwords should match";
    }

    // Check if email is valid
    if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $Email_err = "Please enter a valid email address";
    }

    // If there were no errors, insert into the database
    if (empty($Username_err) && empty($Confirm_Password_err) && empty($Email_err)) {
        $sql = "INSERT INTO register (Username, Email, Password,Confirm_Password) VALUES (?, ?, ?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $Username, $Email, $Password,$Confirm_Password); // Store plain text password

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                
                header("location: login.php");
                exit(); // Exit to prevent further execution
            } else {
                echo "Something went wrong... cannot redirect";
            }
        }
        mysqli_stmt_close($stmt);
    } else {
        // Handle the case where there are errors
        // You can add code here to display error messages or take other actions
    }
    
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<link rel="stylesheet" href="register.css">

<body>
    <div class="wrapper">
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="post" autocomplete="off">
                <div class="input-box1">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text"required name="Username">
                    <label>Username</label>
                </div>
                <div class="input-box2">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="Email">
                    <label>Email</label>
                </div>
                <div class="input-box3">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Password">
                    <label for="password">Password</label>   
                </div>
                <div class="input-box4">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password"required name="Confirm_Password">
                    <label for="password">Confirm Password</label>   
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" required>I agree to the terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn">Register</button>  
            <div class="login-register">
                <p>Already have an account?<a href="login.php" class="login-link">Login</a></p>
            </div>    
        </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
 

</html>