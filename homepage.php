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
            <p class='to-do-day'>Add to a date</p>
            <form class='to-do-add' action='includes/add-post.php' method='post'>
                <input class='to-do-date' name='add_date' type='date' required/>
                <input class='to-do-add-text' type='text' name='toDoText' required/>
                <input class='add-in todo-btn' name='btn' type='submit' value='Add'/>
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