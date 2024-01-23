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
            <div id="addDiv" class="to-do-div" style="display: none;">
                <form class="todo-form" action="includes/add-post.php" method="post">
                <p class="to-do-day">Add ToDo</p>
                    <div class="todo-body">
                        <textarea class="add-text-area" name="toDoText" placeholder="Add a ToDo"></textarea>
                        <input class="add-post todo-btn" type="submit" value="Add Todo"/>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <?php include_once("includes/footer.php"); ?>
        </div>
    </div>

    <script src="public/js/addToggle.js"></script>
</body>
</html>