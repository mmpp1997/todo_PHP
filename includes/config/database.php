<?php 

    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $database = "to_do_list"; 
    $conn=null;
 
    try {
        
        // Create a connection  
        $conn = mysqli_connect($servername,  
         $username, $password, $database); 

    } catch (mysqli_sql_exception) {
        echo "Cant connect <br>"; 
    }
   