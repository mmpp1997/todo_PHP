<?php


include_once("config/database.php");

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
                echo "<div class='to-do'>";
                echo "<div><p class='to-do-title'>$title</p></div>";
                echo "<form class='delete-form' action='includes/delete-todo.php' method='post'>";
                echo "<input class='todo-btn' name='btn' type='submit' value='Delete'/>";
                echo "</form>";
                echo "<form class='check-form' action='includes/check-todo.php' method='post'>";
                echo "<input class='check todo-btn' name='btn' type='submit' value='Check'/>";
                echo "</form>";
                echo "</div>";
            }
        }
        echo "</div>"; 
    }
} else {
    echo "<div id='alert' class='alert-div'><p class='alert'>click on add Todo to add something</p></div>";
}
