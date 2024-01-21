<?php

$current_user = $_SESSION["user_id"];

include_once("config/database.php");

$sql = "SELECT id, title, day FROM todos WHERE userId = '$current_user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $postId=$row["id"];
        $date=$row["day"];
        $day= date('l', strtotime($date));
        $title=$row["title"];

        echo "<div id='$postId' class='todo'  onclick='getID($postId)'>";
        echo "<form class='todo-form' action='includes/delete-post.php' method='post'>";
        echo "<p class='todo-day'>$day</p>";
        echo "<div class='todo-body'>";
        echo "<p class='todo-title'>$title</p>";
        echo "<input type='hidden' name='postId' value='$postId'/>"; 
        echo "<input class='todo-btn' type='submit' value='Delete'/>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    }

}

else{
    echo "<div id='alert' class='alert-div'><p class='alert'>click on add Todo to add something</p></div>";
}

mysqli_close($conn);