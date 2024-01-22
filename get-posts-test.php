<?php


include_once("includes/config/database.php");

$sql = "SELECT * FROM `todos` WHERE userId ='12' ORDER BY day DESC;";
$posts = mysqli_query($conn, $sql);
$date = null;
if (mysqli_num_rows($posts) > 0) {
    while ($post = mysqli_fetch_assoc($posts)) {
        if ($date != $post["day"]) {
            $date = $post["day"];
            $day=date('l',strtotime($date)). " " . date("j.n", strtotime($date));
            echo "</div>";
            echo "<div class='element'>";
            echo "<div><p class='day'>$day</p></div>";
        }

        $title = $post["title"];
        $postId = $post["id"];
        $checked=$post["checked"];
        echo "<form class='todo-form' action='includes/delete-or-check.php' method='post'>";
        echo "<p class='note'>$title</p>";
        echo "<input type='hidden' name='postId' value='$postId'/>";
        echo "<input type='hidden' name='checked' value='$checked'/>";
        echo "<div class='todo-btns'>"; 
        echo "<input class='todo-btn' name='btn' type='submit' value='Delete'/>";
        echo "<input class='check todo-btn' name='btn' type='submit' value='Done'/>";
        echo "</div>";
        echo "</form>";
    }
} else {
    echo "<div id='alert' class='alert-div'><p class='alert'>click on add Todo to add something</p></div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/test.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>