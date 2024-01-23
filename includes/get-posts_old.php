<?php

$current_user = $_SESSION["user_id"];

include_once("config/database.php");

$sql = "SELECT * FROM todos WHERE userId = '$current_user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $postId=$row["id"];
        $date=$row["day"];
        $day= date('l', strtotime($date));
        $title=ucfirst($row["title"]);
        $checked=$row["checked"];

        if($checked=="1"){
            $opacity=0.3;
        }
        elseif($checked=="0"){
            $opacity=1;
        }

        echo "<div id='$postId' class='todo' style='opacity: $opacity'>";
        echo "<form class='todo-form' action='includes/delete-or-check.php' method='post'>";
        echo "<p class='todo-day'>$day</p>";
        echo "<div class='todo-body'>";
        echo "<p class='todo-title'>$title</p>";
        echo "<input type='hidden' name='postId' value='$postId'/>";
        echo "<input type='hidden' name='checked' value='$checked'/>";
        echo "<div class='todo-btns'>"; 
        echo "<input class='todo-btn' name='btn' type='submit' value='Delete'/>";
        echo "<input class='check todo-btn' name='btn' type='submit' value='Done'/>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    }

}

else{
    echo "<div id='alert' class='alert-div'><p class='alert'>click on add Todo to add something</p></div>";
}

mysqli_close($conn);