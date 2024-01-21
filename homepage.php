<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/homepage.css">
    <title>ToDo List</title>
</head>
<body>
    <div class="grid-container">
        <div>
            <?php include_once("includes/header.php"); ?>
        </div>
        <div class="todo-page">
            <?php include_once("includes/get-posts.php"); ?>
        </div>
        <div>
            <?php include_once("includes/footer.php"); ?>
        </div>
    </div>
</body>
</html>