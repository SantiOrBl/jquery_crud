      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="../paginas/inicio.php" class="nav-link">Inicio</a></li>

          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li>
            <!--end::Navbar Search-->
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-chat-text"></i>
                <span class="navbar-badge badge text-bg-danger">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/img/user1-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Call me whenever you can...</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/img/user8-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">I got your message bro</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/img/user3-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">The subject goes here</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge text-bg-warning">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-people-fill me-2"></i> 8 friend requests
                  <span class="float-end text-secondary fs-7">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                  <span class="float-end text-secondary fs-7">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="../assets/img/user2-160x160.jpg"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline"><?php echo $_SESSION['nombre_usuario']; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="../assets/img/user2-160x160.jpg"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    <?php echo $_SESSION['nombre_usuario']; ?>
                    <small>Miembro desde: <?php echo $_SESSION['fecha_creacion_usuario']; ?></small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  <a href="../api/cerrar_sesion.php" class="btn btn-default btn-flat float-end">Cerrar Sesión</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>

            <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./inicio.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="../assets/img/pngwing.com.png"
              alt="Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">ArruinarseSQL</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-gear"></i>
                  <p>
                    Configuración
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="usuarios.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Usuarios</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="roles.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Roles</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="publicaciones.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Publicaciones</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="comentarios.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Comentarios</p>
                    </a>
                  </li>
                </ul>

             </li>
             
             
              
            </ul>
    
          </nav>
        </div>


<style>

body {
  background-color: #000;
  color: #fff;
  font-family: 'Poppins', sans-serif;
}

/* NAVBAR */
.navbar {
  background: linear-gradient(180deg, #2b0000 0%, #190000 100%);
  border-bottom: 2px solid #c00000;
  box-shadow: 0 0 15px #ff0000;
}

.navbar .nav-link,
.navbar .navbar-brand,
.navbar .nav-item a {
  color: #fff !important;
  text-shadow: 0 0 6px #df0000ff;
  transition: color 0.3s ease;
}

.navbar .nav-link:hover {
  color: #ff1a1a !important;
}


.app-sidebar {
  background: radial-gradient(circle at top, #0b0000 0%, #000 85%);
  border-right: 2px solid #900;
  box-shadow: inset 0 0 25px #600;
}


.brand-link {
  display: flex;
  align-items: center;
  gap: 0.7rem;
  padding: 12px 14px;
}


.brand-image {
  height: auto !important; 
  width: 50px !important;
  max-width: 100% !important;
  object-fit: cover;


  border-radius: 8px;
  filter: drop-shadow(0 0 15px #ff0000);
  transition: transform 0.25s ease, filter 0.25s ease;
}

.brand-image:hover {
  transform: scale(1.12);
  filter: drop-shadow(0 0 22px #ff3333);
}

.brand-text {
  color: #ff3333 !important;
  font-weight: 700;
  font-size: 1.3rem;
  text-shadow: 0 0 10px #ff0000;
  white-space: nowrap;
}

.sidebar-menu .nav-link {
  color: #bbb !important;
  transition: all 0.2s ease-in-out;
}

.sidebar-menu .nav-link.active {
  background-color: #1a0000 !important;
  color: #ff4d4d !important;
  border-left: 3px solid #ff0000;
  box-shadow: inset 0 0 10px #700;
}

.sidebar-menu .nav-link:hover {
  color: #ff1a1a !important;
  background-color: #100000 !important;
}

.sidebar-menu .nav-icon {
  color: #ff3333;
}


h1, h2, h3, .nav-header {
  color: #ff1a1a;
  text-shadow: 0 0 15px #ff0000;
}


.user-header {
  background: linear-gradient(180deg, #0d0000 0%, #000 100%) !important;
  border-bottom: 2px solid #900;
  box-shadow: inset 0 0 25px #ff0000;
  color: #fff !important;
}

.user-header img {
  border: 3px solid #ff1a1a;
  box-shadow: 0 0 20px #ff0000;
}

.user-header p {
  color: #fff;
  text-shadow: 0 0 10px #ff3333;
}

.user-header small {
  color: #ff6666;
}


.dropdown-menu {
  background: linear-gradient(180deg, #080000 0%, #130000 100%) !important;
  border: 1px solid #900 !important;
  box-shadow: 0 0 20px #ff0000;
}

.dropdown-item {
  color: #ccc !important;
  transition: all 0.3s ease;
}

.dropdown-item:hover {
  background-color: #330000 !important;
  color: #ff1a1a !important;
  box-shadow: inset 0 0 10px #900;
}

.dropdown-divider {
  border-color: #900 !important;
}


.navbar-badge {
  background-color: #ff0000 !important;
  box-shadow: 0 0 8px #ff0000;
}


.navbar .bi {
  color: #fff;
  text-shadow: 0 0 10px #ff0000;
}

.navbar .bi:hover {
  color: #ff1a1a;
}


.user-footer .btn {
  background-color: #0a0000 !important;
  border: 1px solid #900 !important;
  color: #ff4d4d !important;
  transition: all 0.3s ease;
  font-weight: 500;
}

.user-footer .btn:hover {
  background-color: #ff0000 !important;
  color: #000 !important;
  border-color: #ff3333 !important;
  box-shadow: 0 0 15px #ff0000;
}


.dropdown-header {
  background-color: #1a0000;
  color: #ff1a1a;
  text-shadow: 0 0 10px #ff0000;
  border-bottom: 1px solid #900;
}


.dropdown-item .text-secondary {
  color: #ff6666 !important;
}

.dropdown-item i {
  color: #ff3333;
}

.dropdown-item:hover i {
  color: #ff6666;
}

</style>

      
      </aside>