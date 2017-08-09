<?php

    session_start();

    /* Preventing direct url access to this file */
    if ($_SERVER['REQUEST_METHOD']=='POST' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
        header('HTTP/1.0 403 Forbidden', TRUE, 403);

        /* Redirects the user to index.php */
        die(header('location: index.php'));
    }

    echo $_SESSION['username'];
?>

<button>Log out</button>

<script src="scripts/jquery.js"></script>
<script type="text/javascript">
    $("button").click(function() {
        $.ajax({
            type: "POST",
            url: "logout.php",
        }).done(function( response ) {
            window.location = 'index.php';
        });    
    });
</script>