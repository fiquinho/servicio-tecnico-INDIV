<?php

    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: login.php");
    } 

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="styles/index.css"/>
    
    <title>Página de inicio - Servicio técnico INDIV SA</title>
    
</head>

<body>
    
</body>
    <div class="logo">
        <img id="logo" src="images/indiv-logo.png" alt="INDIV logo" />
    </div>
    <div class="login-information">
        <h2>Ingrese con su usuario</h2>
        <hr/>
        <p>Usuario:</p>
        <p><input type="text" id="user"></p>
        <p>Contraseña:</p>
        <p><input type="password" id="password"></p>
        <button class="login-button">Ingresar</button>

    </div>

    <p id="alert"></p>

    <script src="scripts/jquery.js"></script>
    <script type="text/javascript">
        $(".login-button").click(function(){
            var username = $("#user").val();
            var password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "login-check.php",
                data: { username: username,
                        password: password }
            }).done(function( response ) {
                $("#alert").html(response);
            });    
        });
    </script>
</html>

