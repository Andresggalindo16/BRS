<!-- ======= valdiacion de usuario ======= -->
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: login.php');
}
?>



<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.php">
      <img src="assets/img/brs.png" alt="" width="150px" height="52px">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->


      </li><!-- End Messages Nav -->
      <div id="usuario">
        <span> <?php echo $_SESSION['usuario'] ?> </span>
      </div>
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle ps-2"><img src="assets/img/encendido.png" width="30px" alt=""></span>
        </a><!-- End Profile Iamge Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Cerrar sesión</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">PÁGINAS</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="index.php">
        <i class="bi bi-grid-fill"></i>
        <span>Inicio</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="validacion_solicitud.php?Listar">
        <i class="ri-file-copy-2-line"></i>
        <span>Solicitudes Pendientes</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="validacion_solicitud.php?ListarFinalizadas">
        <i class="ri-chat-check-line"></i>
        <span>Solicitudes Finalizadas</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->
    <li class="nav-item">
    <a class="nav-link collapsed" href="validacion_clientes.php">
      <i class="ri-briefcase-2-line"></i>
      <span>Clientes</span>
    </a>
  </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="validacion_usuario.php?Listar">
        <i class="ri-account-pin-box-line"></i>
        <span>Usuarios</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="ri-bar-chart-fill"></i>
        <span>Reportes</span>
      </a>
    </li> End Contact Page Nav -->
  </ul>

</aside><!-- End Sidebar-->