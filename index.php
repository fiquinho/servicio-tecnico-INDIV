<?php
    /* Check if there is a session open */
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: dashboard/dashboard.php");
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
        <p>
            <input type="text" id="user">
            <br/>
            <span class="error-message user"></span>
        </p>
        <p>Contraseña:</p>
        <p>
            <input type="password" id="password">
            <br/>
            <span class="error-message password"></span>
        </p>
        <button class="login-button">Ingresar</button>

    </div>

    <p id="alert"></p>

    <script src="scripts/jquery.js"></script>
    <script src="scripts/index.js"></script>

</html>

