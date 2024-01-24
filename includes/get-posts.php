<?php


include_once("includes/config/database.php");

$sql = "SELECT * FROM `todos` WHERE userId ='12' ORDER BY day DESC;";
$posts = mysqli_query($conn, $sql);

$dates=array();

if (mysqli_num_rows($posts) > 0) {
    $response_posts = array();
    while ($post = mysqli_fetch_assoc($posts)) {
        $response_posts[] = $post;
    }
    for ($i=0; $i <count($response_posts) ; $i++) {
        if(!in_array($response_posts[$i]["day"], $dates)){
            $dates[]=$response_posts[$i]["day"];
        }
    }
    for ($i=0; $i <count($dates) ; $i++) {
        echo "<div class='to-do-div'>"; 
        $day=date('l',strtotime($dates[$i])). " " . date("j.n", strtotime($dates[$i]));
        echo "<p class='to-do-day'>$day</p>";
        for ($j=0; $j <count($response_posts) ; $j++) {
            if($dates[$i]==$response_posts[$j]["day"]){
                $title=ucfirst($response_posts[$j]["title"]);
                $postId=$response_posts[$j]["id"];
                $checked=$response_posts[$j]["checked"];
                if($checked=="1"){
                    $opacity=0.5;
                    $btn_value="Uncheck";
                    $text_decoration="line-through";
                }
                elseif($checked=="0"){
                    $opacity=1;
                    $text_decoration="none";
                    $btn_value="Check";
                }
                echo "<div class='to-do' style='opacity: $opacity'>";
                echo "<div><p class='to-do-title' style='text-decoration: $text_decoration' >$title</p></div>";
                echo "<form class='delete-form' action='includes/delete-todo.php' method='post'>";
                echo "<input name='postId' type='hidden' value='$postId'/>";
                echo "<input class='todo-btn' name='btn' type='submit' value='X'/>";
                echo "</form>";
                echo "<form class='check-form' action='includes/check-todo.php' method='post'>";
                echo "<input name='postId' type='hidden' value='$postId'/>";
                echo "<input name='checked' type='hidden' value='$checked'/>";
                echo "<input class='check todo-btn' name='btn' type='submit' value='✓'/>";
                echo "</form>";
                echo "</div>";
            }
        }
        echo "<form class='to-do-add' action='includes/add-post.php' method='post'>";
        $add_date=$dates[$i];
        echo "<input name='add_date' type='hidden' value='$add_date'/>";
        echo "<input class='to-do-add-text' type='text' name='toDoText' required />";
        echo "<input class='add-in todo-btn' name='btn' type='submit' value='Add'/>";
        echo "</form>";
        echo "</div>"; 
    }
} else {
    echo "<div id='alert' class='alert-div'><p class='alert'>click on add Todo to add something</p></div>";
}
