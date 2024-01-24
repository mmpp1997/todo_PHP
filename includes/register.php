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

        } catch (mysqli_sql_exception $my_error) {
            if ($my_error->getCode() == 1062) {
        
                $errorMessage = $my_error->getMessage();

                preg_match("/Duplicate entry '(.*?)' for key/", $errorMessage, $matches);
                $duplicateField = isset($matches[1]) ? $matches[1] : 'unknown field';
                
                $to_show="$duplicateField already exists";
                
            } else {
                $to_show="Error: " . $my_error->getMessage();
            }

            header("Location: ../reg.php?error=$to_show");
            exit();
        }
    } else {
        header("Location: ../reg.php?error=invalid email");
        exit();
    }
}
