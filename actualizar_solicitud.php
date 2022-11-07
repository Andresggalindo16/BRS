<!-- ======= UwU ======= -->

<?php require_once "controller/solicitudescontroller.php" ?>
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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

  <?php require_once "menu.php" ?>


  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Solicitudes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          <li class="breadcrumb-item"><a href="validacion-del-paciente.html"> Validación de solicitudes</a></li>
          <li class="breadcrumb-item active">Solicitud</li>
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
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">N° solicitud</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" style='width: 20%;' value="<?php echo $solicitud[0]['idSolicitud'] ?>" readonly>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Título solicitud</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $solicitud[0]['titulo'] ?>" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <span class="input-group-text" style=" width: 17%;margin-left: 1%;">Solución</span>
                <textarea class="col-sm-2 col-form-label" style=" width: 81%;" readonly aria-label="With textarea"><?php echo $solicitud[0]['solucion'] ?></textarea>
              </div>

              <br>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Prioridad</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $solicitud[0]['prioridad'] ?>" readonly>

                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Cliente</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $solicitud[0]['idCliente'] ?>" readonly>

                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ambiente solicitado</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $solicitud[0]['ambiente'] ?>" readonly>

                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Responsable</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $solicitud[0]['idResponsable'] ?>" readonly>
                </div>
              </div>

              <div class="form-floating mb-3">
                <textarea readonly class="form-control" placeholder="Leave a comment here" id="floatingTextarea" readonly style="height: 100px;"><?php echo $solicitud[0]['observaciones']
                                                                                                                                                  ?></textarea>
                <label for="floatingTextarea">Observaciones Finales</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Comentarios del Responsable</h5>
              <form method="POST">
                <div class="form-floating mb-3">
                  <p>Jerney dd-mm-aa</p>
                </div>
                <div class="form-floating mb-3">
                  <?php if ($solicitud[0]['idEstado'] == '2') { ?>
                    <textarea class="form-control" name="comentarioFinal" id="comentarioFinal" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" disabled><?php echo $solicitud[0]['comentarioFinal'] ?></textarea>
                  <?php } else { ?>
                    <textarea class="form-control" name="comentarioFinal" id="comentarioFinal" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                  <?php } ?>
                  <label for="floatingTextarea">Comentarios</label>
                </div>
                <input type="hidden" name="actualizar_solicitud" id="actualizar_solicitud">
                <input type="hidden" name="idSolicitud" id="idSolicitud" value="<?php echo $solicitud[0]['idSolicitud'] ?>">
                <?php if ($solicitud[0]['idEstado'] == '2') { ?>

                <?php } else { ?>
                  <Center>
                    <button type="submit" class="btn btn-success">Finalizar solicitud</button>
                  </Center>
                <?php } ?>

              </form>
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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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