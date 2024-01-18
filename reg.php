<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Register</title>
</head>

<body>
    <form class="form" action="includes/register.php" method="POST">
        <div class="login">
            <div class="login-part">
                <input class="input" name="username" type="text" class="titl" title="Enter your email" placeholder="Enter your email" required />
            </div>
            <div class="login-part">
                <input class="input" name="password" type="password" title="Password" placeholder="Enter your password" required />
            </div>
            <div class="login-part">
                <input class="input" name="nickname" type="text" title="Enter your nickname" placeholder="Enter your nickname" required />
            </div>
            <div class="login-part">
                <input class="input" name="location" type="text" title="Enter your hometown" placeholder="Enter your hometown" required />
            </div>
            <div class="login-part">
                <p class="reg-link">already a user, <a class="reg-link" href="/">login</a>?</p>
            </div>
            <div class="login-part">
                <input class="reg btn" type="submit" value="Register" class="btn green" />
            </div>
        </div>
    </form>
</body>

</html>

<?php
    
?>
