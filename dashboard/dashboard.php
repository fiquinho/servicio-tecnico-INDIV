<?php
  session_start();

  if (!isset($_SESSION['username'])) {
      header("Location: ../index.php");
  } else {
    $user = $_SESSION['username'];
  }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Página de uso para servicio técnico
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
    <link href="styles/toolkit-inverse.min.css" rel="stylesheet">
    <link href="assets/css/application.css" rel="stylesheet">
    <link href="styles/dashboard-custom-style.css" rel="stylesheet">

  </head>

<body>
  <div class="container">
    
    <div class="row">
      <div class="col-md-3 sidebar">
        <nav class="sidebar-nav">

          <div class="sidebar-header">

            <!-- Menu button -->
            <button class="nav-toggler nav-toggler-md sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="sr-only">Toggle nav</span>
            </button>

            <!-- User profile -->
            <a class="sidebar-brand img-responsive" href="dashboard.php">
              <img class="user-img" src="profile-images/sergiobonato.png">
              <!-- <span class="icon icon-leaf sidebar-brand-icon"></span> -->
            </a>
            <div class="user-information">
              <p><span class="username"><?php echo $user; ?></span></p>
              <p><span class="user-rol">Administrador</span></p>
            </div>
          </div>

          <div class="collapse nav-toggleable-md" id="nav-toggleable-md">
            
            <ul class="nav nav-pills nav-stacked flex-column">
              <li class="nav-header">Panel de control</li>
              <li class="nav-item">
                <a class="nav-link active" href="index.html">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="order-history/index.html">Servicio técnico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "href="fluid/index.html">Fluid layout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="icon-nav/index.html">Icon nav</a>
              </li>

              <li class="nav-header">Usuario</li>
              <li class="nav-item">
                <a class="nav-link "href="#">
                  Editar perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link log-out">
                  Salir de la cuenta
                </a>
              </li>
            </ul>
            <hr class="visible-xs mt-3">
          </div>
        </nav>
      </div>

      <div class="col-md-9 content">
        <div class="dashhead">
          <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">Panel de control</h6>
            <h2 class="dashhead-title">General</h2>
          </div>

          <div class="btn-toolbar dashhead-toolbar">
            <div class="btn-toolbar-item input-with-icon">
              <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
              <span class="icon icon-calendar"></span>
            </div>
          </div>
        </div>

        <hr class="mt-3">
      </div>
    </div>
  </div>


    <!-- Scripts -->
    <script src="scripts/jquery.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="scripts/toolkit.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/tablesorter.min.js"></script>
    <script src="assets/js/application.js"></script>


    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>

    <script type="text/javascript">
      $(".log-out").click(function() {
          $.ajax({
              type: "POST",
              url: "../logout.php",
          }).done(function( response ) {
              window.location = '../index.php';
          });    
      });
    </script>


  </body>
</html>
