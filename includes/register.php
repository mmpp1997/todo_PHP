<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        //include database conection
        include 'config/database.php';

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
            mysqli_close($conn);
            header("Location: /");
            exit(); 

        } catch (mysqli_sql_exception) {
            header("Location: ../reg.php");
            exit();
        }  
        
    }          
