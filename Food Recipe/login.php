<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['Username'])) {
    header('location: home.php');
    exit;
}
require_once "config.php";

$Username = $Password = "";
$err = "";

// If request method is POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = trim($_POST['Username']);
    $Password = trim($_POST['Password']);

    // Use the same database name ("test") and table name ("register") in the SQL query
    $sql = "SELECT id, Username, Password FROM register WHERE Username = ? && Password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $param_Username,$param_Password);
        $param_Username = $Username;
        $param_Password = $Password;

        // Try to execute the statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            // Check if a row was found
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $db_Username, $db_Password);

                if (mysqli_stmt_fetch($stmt)) {
                    if ($Password == $db_Password) {
                        // Password matches. Allow the user to log in
                        $_SESSION["Username"] = $db_Username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        // Redirect the user to the home page
                        header('location: home.php');
                        exit();
                    } else {
                        $err = "Invalid username or password";
                    }
                }
            } else {
                $err = "Invalid username or password";
            }
        } else {
            $err = "Something went wrong";
        }
    } else {
        $err = "Database error";
    }
}
?>



 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<link rel="stylesheet" href="login.css">

<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
             
            <form action="login.php" method="post" autocomplete="off">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required name="Username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="Password">
                    <label>Password</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" required>Remember me</label>
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
                <?php if (!empty($err)) { ?>
                    <p><?php echo $err; ?></p>
                <?php } ?>
                <div class="login-register">
                    <p>Don't have an account?<a href="Register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     
</body>

</html>
 
 