<!-- ======= UwU ======= -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ON Agendamiendo Hospitalario</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="style/style2.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>



   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html">
        <img src="assets/img/brs.png" alt="" width="200px" height="52px">
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

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><img src="assets/img/encendido.png" width="30px"
                alt=""></span>
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
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid-fill"></i>
          <span>Inicio</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="validacion_solicitud.html">
          <i class="ri-file-copy-2-line"></i>
          <span>Solicitudes Pendientes</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="validacion-finalizada.html">
          <i class="ri-chat-check-line"></i>
          <span>Solicitudes Finalizadas</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="validacion_usuario.html">
          <i class="ri-account-pin-box-line"></i>
          <span>Usuarios</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="ri-bar-chart-fill"></i>
          <span>Reportes</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <!-- ======= UwU ======= -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Paciente</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item"><a href="validacion-del-paciente.html"> Validación de Pacientes</a></li>
          <li class="breadcrumb-item active">Paciente</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="caja">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información Basica</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label" >N° solicitud</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" style='width: 20%;'>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Título solicitud</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <span class="input-group-text" style=" width: 17%;margin-left: 1%;">Solución</span>
                  <textarea class="col-sm-2 col-form-label" style=" width: 81%;" aria-label="With textarea"></textarea>
                </div>

                <br>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Prioridad</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>[Seleccione]</option>
                      <option value="1" style="color:#dd141d;">Urgente</option>
                      <option value="2" style="color:#ff5630;">Alta </option>
                      <option value="3" style="color:#ffab00;">Media </option>
                      <option value="4" style="color:#0065ff;">Baja</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cliente</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>[Seleccione]</option>
                      <option value="1">Sanitas</option>
                      <option value="2">ser salu</option>
                      <option value="3">Hestratego</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ambiente solicitado</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>[Seleccione]</option>
                      <option value="1">Producción</option>
                      <option value="2">Pruebas</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Responsable</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>[Seleccione]</option>
                      <option value="1">Jerney</option>
                      <option value="2">Harnuel</option>
                    </select>
                  </div>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Observaciones Finales</label>
                </div>


              </form><!-- End General Form Elements -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Comentarios del Responsable</h5>
              <form action="">
                <div class="form-floating mb-3">
                <p>Jerney dd-mm-aa</p>
              </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                    style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Comentarios</label>
                </div>
              </form>
              <Center>
                <button type="button" class="btn btn-success">Finalizar solicitud</button>
              </Center>
            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ON Agendamiento Hospitalario</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>