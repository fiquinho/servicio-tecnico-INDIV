<?php

    /* Preventing direct url access to this file */
    if ( $_SERVER['REQUEST_METHOD']!='POST' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        /* choose the appropriate page to redirect users */
        die( header( 'location: login.php' ) );

    }

    /* Check if the user entered a correct */
    if ($_POST["username"] != "" && $_POST["password"] != "") {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $link = mysqli_connect("mysql.stackcp.com", "indiv-users-31379301", "QYSkEgwB+tp9", "indiv-users-31379301", "49379");

        if (mysqli_connect_error()) {
            
            echo "There was an error connecting to the database";
            
        } else {
            
            $query = "SELECT * FROM `indiv-users` WHERE (`user_name`='$username')";

            if ($result = mysqli_query($link, $query)) {
        
                $row = mysqli_fetch_array($result);

                if ($row[0] == "") {
                    echo "Wrong user";
                } else {
                    echo "You are logged in as: ".$row[3]." ".$row[4];
                }
        
            } else {
                echo "Error on query";
            }
            
        }


    } else {
        echo "Error";
    }
?>