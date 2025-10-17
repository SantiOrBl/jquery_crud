<?php 
    session_start();
    include_once 'estructura/cabecera.php';
?>
<script type="text/javascript" src="../assets/js/scripts/roles.js"></script>
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
              <div class="col-sm-6"><h3 class="mb-0">Gestionar Roles</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gestionar Roles</li>
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
            <div class="row">
              <div class="col-sm-6">
                  <button class="agregarbtn btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalAgregarRoles">Agregar Rol</button>
              </div>
            </div>
            <div class="row">
                <table class="table-akatsuki" id="tablaRoles">
                    <thead class="table">
                    <tr>
                        <th>Acciones</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Software ArruinarseSQL</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025&nbsp;
          Arruinarse
        </strong>
        Todos los derechos reservados.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <?php 
    include_once '../modals/roles.php';
    include_once 'estructura/pie.php';
    ?>

<style>
/* =================== ESTILO GLOBAL =================== */
body {
  background: radial-gradient(circle at center, #0a0000 0%, #000 90%);
  color: #f5f5f5;
  font-family: 'Poppins', sans-serif;
}

/* =================== ENCABEZADOS =================== */
h3, .breadcrumb-item a {
  color: #ff1a1a !important;
  text-shadow: 0 0 8px rgba(255, 0, 0, 0.5);
}

.breadcrumb-item.active {
  color: #ccc !important;
}

/* =================== TABLA CLARA =================== */
.table-akatsuki {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 25px rgba(255, 0, 0, 0.2);
}

.table-akatsuki thead th {
  background: #ffffffff;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  padding: 10px 12px;
  border-bottom: 2px solid #cc0000;
  text-align: center;
  font-size: 0.9rem;
}

.table-akatsuki tbody td {
  padding: 10px 12px;
  color: #000;
  text-align: center;
  background-color: #fff;
  border-bottom: 1px solid #ddd;
  font-size: 0.95rem;
}

.table-akatsuki tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table-akatsuki tbody tr:hover {
  background-color: #ffe6e6 !important;
  transition: 0.3s ease;
}

/* =================== BOTONES =================== */
.btn-akatsuki {
  background: linear-gradient(90deg, #b30000, #ff1a1a);
  border: none;
  color: #fff;
  font-weight: 500;
  border-radius: 8px;
  padding: 8px 14px;
  box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
  transition: all 0.3s ease;
}
.btn-akatsuki:hover {
  background: #ff0000;
  box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
}

/* Botones dentro de tabla */
.btn-editar {
  background-color: #ffcc00;
  color: #000;
  border: none;
  border-radius: 6px;
  padding: 5px 10px;
  font-weight: 600;
}
.btn-editar:hover {
  background-color: #ffd633;
  box-shadow: 0 0 10px #ffcc00;
}

.btn-eliminar {
  background-color: #ff1a1a;
  color: #fff;
  border: none;
  border-radius: 6px;
  padding: 5px 10px;
  font-weight: 600;
}
.btn-eliminar:hover {
  background-color: #ff3333;
  box-shadow: 0 0 10px #ff4d4d;
}

/* =================== DATATABLE BUTTONS =================== */
div.dt-buttons .dt-button {
  background-color: #b30000 !important;
  color: #fff !important;
  border: none !important;
  border-radius: 6px;
  padding: 6px 12px;
  margin-right: 4px;
  font-weight: 500;
  transition: all 0.3s ease;
}
div.dt-buttons .dt-button:hover {
  background-color: #ff0000 !important;
  box-shadow: 0 0 10px #ff4d4d;
}

/* =================== BUSCADOR =================== */
.dataTables_wrapper .dataTables_filter label {
  color: #fff !important;
}
.dataTables_wrapper .dataTables_filter input {
  background-color: #fff;
  color: #000;
  border: 1px solid #b30000;
  border-radius: 6px;
  padding: 6px 10px;
}

/* =================== PAGINACIÓN =================== */
.dataTables_wrapper .dataTables_paginate .paginate_button {
  background-color: #fff !important;
  color: #b30000 !important;
  border: 1px solid #b30000 !important;
  border-radius: 6px;
  margin: 2px;
  padding: 5px 10px;
  transition: 0.3s ease;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current {
  background-color: #b30000 !important;
  color: #fff !important;
  font-weight: bold;
  border: none !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background-color: #ff4d4d !important;
  color: #fff !important;
}

/* =================== FOOTER =================== */
footer.app-footer {
  background: linear-gradient(90deg, #000 0%, #1a0000 50%, #000 100%);
  color: #ff4d4d;
  border-top: 2px solid #900;
  box-shadow: 0 0 15px rgba(255, 0, 0, 0.25);
  text-align: center;
  padding: 25px 10px;
}
footer.app-footer strong {
  color: #ff3333;
}
footer.app-footer .float-end {
  color: #aaa;
}

</style>

  </body>
  <!--end::Body-->
</html>
