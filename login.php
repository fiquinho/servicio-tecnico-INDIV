<?php

    session_start();

    if ($_SESSION['username']) {

        echo "You are logged in as: ".$_SESSION['username'];

        mysqli_connect("mysql.stackcp.com", "indiv-users-31379301", "QYSkEgwB+tp9", "indiv-users-31379301", "49379");

        if (mysqli_connect_error()) {
            
            echo "There was an error connecting to the database";
            
        } else {
            
            echo "Database connection successful!";
            
        }
    
    } else {

        header("Location: index.php");

    }

    


?>