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