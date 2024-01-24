<?php
session_start();

if(isset($_SESSION["user_id"])){
    header("Location: homepage.php");
    exit;
}

$error = isset($_GET['error']) ? $_GET['error'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\login.css">
    <title>Log In</title>
</head>

<body>
    <form class="form" action="includes/login.php" method="POST">
        <div class="login" >
            <div class="login-part">
                <input class="input" name="username" type="text" title="Enter your username" placeholder="Enter your username" required />
            </div>
            <div class="login-part">
                <input class="input" name="password" type="password" title="Password" placeholder="Enter your password" required />
            </div>
            <div class="login-part">
                <p class="error"><?php echo  $error;?></p>
            </div>
            <div class="login-part">
                <p class="reg-link">Not a user, <a class="reg-link" href="./reg.php">register</a>?</p>
            </div>
            <div class="login-part">
                <input class="log btn" type="submit" value="Login"/>
            </div>
        </div>
    </form>
</body>
</html>
