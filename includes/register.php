<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    //include database conection
    include 'config/database.php';

    //save form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nickname = $_POST["nickname"];
    $location = $_POST["location"];

    //hash password
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $email = filter_var($username, FILTER_VALIDATE_EMAIL);
    if ($email) {
        try {

            $sql = "INSERT INTO `users` ( `username`, `password`, `nickname`, `location` ) 
                VALUES ('$email', '$hash', '$nickname','$location')";

            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: /");
            exit();

        } catch (mysqli_sql_exception) {
            header("Location: ../reg.php?error=input error");
            exit();
        }
    } else {
        header("Location: ../reg.php?error=incorrect email");
        exit();
    }
}
