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
    </header>  
</body>
</html>
