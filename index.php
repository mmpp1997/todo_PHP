<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Log in</title>
</head>

<body>
    <form class="box" action="index.php" method="POST">
        <div class="grid-container">
            <div class="grid-item one">
                <input name="username" type="text" class="titl" title="Enter your email" placeholder="Enter your email" required />
            </div>
            <div class="grid-item two">
                <input name="password" type="password" title="Password" placeholder="Enter your password" required />
            </div>
            <div class="grid-item two">
                <input name="nickname" type="text" title="Enter your nickname" placeholder="Enter your nickname" required />
            </div>
            <div class="grid-item two">
                <input name="location" type="text" title="Enter your hometown" placeholder="Enter your hometown" required />
            </div>
            <div class="grid-item three">
                <p>already a user, <a class="reg" href="/">login</a>?</p>
            </div>
            <div class="grid-item four">
                <input type="submit" value="Log in" class="btn green" />
            </div>
        </div>
    </form>
</body>

</html>

<?php
    $username = $_POST["username"];
    echo "<script>console.log('this is a Variable: " . $username. "' );</script>";

?>