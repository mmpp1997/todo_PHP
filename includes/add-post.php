<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include 'config/database.php';

    $current_user = $_SESSION["user_id"];
    $title = $_POST["toDoText"];
    $day_test = $_POST["add_date"];

    try {

        $sql = "INSERT INTO `todos` (`title`, `userId`, `day`) 
                VALUES ('$title', '$current_user','$day_test');";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../homepage.php");
        exit();

    } catch (mysqli_sql_exception) {
        echo "<script>
                alert('Something went wrong'); 
                window.location.href='../homepage.php';
                </script>";
        exit();
    }
}