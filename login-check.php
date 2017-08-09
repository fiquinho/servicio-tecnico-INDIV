<?php

    session_start();

    /* Preventing direct url access to this file */
    if ($_SERVER['REQUEST_METHOD']!='POST' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        header('HTTP/1.0 403 Forbidden', TRUE, 403);

        /* Redirects the user to index.php */
        die(header('location: index.php'));
    }

    /* Check if the user entered some data */
    if ($_POST["username"] != "" && $_POST["password"] != "") {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

         /* Conect to the database */
        $link = mysqli_connect("mysql.stackcp.com", "indiv-users-31379301", "QYSkEgwB+tp9", "indiv-users-31379301", "49379");

        if (mysqli_connect_error()) {

            echo "There was an error connecting to the database";

        } else {
            
            /* Check the username */
            $query = "SELECT * FROM `indiv-users` WHERE (`user_name`='$username')";

            if ($result = mysqli_query($link, $query)) {
        
                $row = mysqli_fetch_array($result);

                /* No user with that name */
                if ($row[0] == "") {
                    echo "Wrong user";
                
                /* If the user exist, set the sessions variables */
                } else {
                    $_SESSION['username'] = $row[0];
                }
        
            } else {
                echo "Error on query";
            }

        }

    /* If not user entered */
    } else if ($_POST["username"] == "") {
        echo "No username";
    /* If not password entered */
    } else {
        echo "No password";
    }
?>