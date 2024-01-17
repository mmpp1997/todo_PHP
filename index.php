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
                <input type="submit" value="Register" class="btn green" />
            </div>
        </div>
    </form>
</body>

</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        //include database conection
        include 'database.php';

        //save form data
        $username = $_POST["username"];  
        $password = $_POST["password"];
        $nickname = $_POST["nickname"];
        $location = $_POST["location"];

        //hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        try {

            $sql = "INSERT INTO `users` ( `username`, `password`, `nickname`, `location` ) 
                VALUES ('$username', '$hash', '$nickname','$location')"; 
        
            $result = mysqli_query($conn, $sql);

        } catch (Error) {
            echo "Something went wrong";
        }  

        mysqli_close($conn);
    }          

?>