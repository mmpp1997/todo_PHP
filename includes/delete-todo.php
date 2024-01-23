<?php
include 'config/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["postId"];
    try {
        $sql = "DELETE FROM todos WHERE `todos`.`id` = $id";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../homepage.php");
        exit();

    } 
    catch (mysqli_sql_exception) {

        echo "<script>
                alert('Something went wrong'); 
                window.location.href='../homepage.php';
                </script>";
        exit();
        
    }
}