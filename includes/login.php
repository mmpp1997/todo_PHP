<?php
include_once("config/database.php");

$username = $_POST["username"];
$password = $_POST["password"];

$email = filter_var($username, FILTER_VALIDATE_EMAIL);
if ($email) {
    try {
        $sql = "SELECT id, username, nickname, password FROM users WHERE username = '$email'";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);

                if (password_verify($password, $row["password"])) {

                    session_start();
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["nickname"] = $row["nickname"];
                    header("Location: ../homepage.php");
                    exit();

                } else {
                    header("Location: ../index.php?error=incorrect password");
                    exit();
                }
            }else {
                header("Location: ../index.php?error=incorrect email");
                exit();
            }
  
    } catch (err) {
        header("Location: ../index.php?error=incorrect email");
        exit();
    }
} else {
    header("Location: ../index.php?error=not a valid input");
    exit();
}
mysqli_close($conn);