<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/header.css">
</head>
<body>
    <header class="header">
        <a class="title" href="homepage.php"><?php echo $_SESSION["nickname"]; ?>'s To Do List</a>
        <form class="add-form" action="">
            <input class="add btn" type="button" value="add ToDo">
        </form>
        <form class="logout-form" action="">
            <input class="logout btn" type="button" value="Log out">
        </form>
    </header>  
</body>
</html>
