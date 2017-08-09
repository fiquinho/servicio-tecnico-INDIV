<?php

    session_start();

    /* Preventing direct url access to this file */
    if ($_SERVER['REQUEST_METHOD']!='POST' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        header('HTTP/1.0 403 Forbidden', TRUE, 403);

        /* Redirects the user to index.php */
        die(header('location: index.php'));
    }

    /* Log de user out */
    session_unset();
    session_destroy();
    /* Redirect to index */
    header("Location: index.php");

?>