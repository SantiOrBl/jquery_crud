<?php 
    session_start();
    include_once 'estructura/cabecera.php';
?>
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
<?php 
    include_once 'estructura/menu.php';
?>
      <!--end::Header-->
      <!--begin::Sidebar-->

      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <div class="welcome-container text-center mt-5 mb-4">
              <h2 class="welcome-text">Bienvenido a <span class="highlight">ArruinarseSQL</span></h2>
              <p class="welcome-sub">“Donde las consultas te arruinan...”</p>
            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
<footer class="app-footer">
  <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
    <img src="../assets/img/pngwing.com.png" alt="Logo Akatsuki">
    <strong>© 2025&nbsp;Arruinarse</strong>
    <div class="footer-quote">“Vive de arruinarte, arruinate para vivir”</div>
  </div>
</footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <?php 
    include_once 'estructura/pie.php'
    ?>

    <style>

  footer.app-footer {
    background: linear-gradient(90deg, #000 0%, #1a0000 50%, #000 100%);
    color: #ff4d4d;
    border-top: 2px solid #900;
    box-shadow: 0 0 20px #ff0000;
    text-align: center;
    padding: 25px 10px;
    font-family: 'Poppins', sans-serif;
    text-shadow: 0 0 10px #ff0000;
    position: relative;
  }

  footer.app-footer strong {
    color: #ff3333;
    text-shadow: 0 0 10px #ff0000;
  }

  footer.app-footer img {
    width: 70px;
    height: auto;
    filter: drop-shadow(0 0 10px #ff0000);
    margin-bottom: 8px;
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  footer.app-footer img:hover {
    transform: scale(1.25);
    filter: drop-shadow(0 0 25px #ff3333);
  }

  footer.app-footer .footer-quote {
    margin-top: 5px;
    color: #fff;
    font-size: 0.9rem;
    font-style: italic;
    text-shadow: 0 0 6px #ff0000;
  }
</style>


    
  </body>
  <!--end::Body-->
</html>
