<?php
    if($_SESSION["nickname"]){
        $nickname=$_SESSION["nickname"];
    }
    else{
        header("Location: /");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/header.css">
</head>
<body>
    <header class="header">
        <a class="title" href="homepage.php"><?php echo ucfirst($nickname); ?>'s To Do List</a>
        <div class="add-div">
            <input onclick='toggle()' id="toggleAdd" class="add btn" type="button" value="Add New Day">
        </div>
        <form class="logout-form" action="includes/logout.php" method="post">
            <input class="logout btn" type="submit" value="Log out">
        </form>
    </header>  
</body>
</html>
