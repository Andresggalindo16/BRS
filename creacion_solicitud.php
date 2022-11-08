<?php require_once "controller/solicitudescontroller.php" ?> 
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

<?php require_once "menu.php" ?> 
  <!-- ======= UwU ======= -->

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
    </div>

    <section class="section">
      <div class="row">
        <div class="caja">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información Basica</h5>

             
              <form method="POST">
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Título solicitud</label>
                  <div class="col-sm-10">
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <span class="input-group-text" style=" width: 17%;margin-left: 1%;">Solución</span>
                  <textarea class="col-sm-2 col-form-label" name="solucion" id="solucion" style=" width: 81%;" aria-label="With textarea" required></textarea>
                </div>

                <br>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Prioridad</label>
                  <div class="col-sm-10">
                    <select name="prioridad" id="prioridad" class="form-select" aria-label="Default select example" required>
                      <option selected>[Seleccione]</option>
                      <option value="Urgente" style="color:#dd141d;">Urgente</option>
                      <option value="Alta" style="color:#ff5630;">Alta </option>
                      <option value="Media" style="color:#ffab00;">Media </option>
                      <option value="Baja" style="color:#0065ff;">Baja</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cliente</label>
                  <div class="col-sm-10">
                    <select name="cliente" id="cliente" class="form-select" aria-label="Default select example" required>
                      <option selected>[Seleccione]</option> 
                      <?php foreach($objetocuentas->getCliente() as $cliente):?>
                      <option value="<?php echo $cliente['idCliente'] ?>"> <?php echo $cliente['nombre'] ?> </option>
                      <?php endforeach; ?>
                      
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Ambiente solicitado</label>
                  <div class="col-sm-10">
                    <select name="ambiente" id="ambiente" class="form-select" aria-label="Default select example" required>
                      <option selected>[Seleccione]</option>
                      <option value="1">Producción</option>
                      <option value="2">Pruebas</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Responsable</label>
                  <div class="col-sm-10">
                    <select name="responsable" id="responsable" class="form-select" aria-label="Default select example" required>
                      <option selected>[Seleccione]</option>
                      <?php foreach($objetocuentas->getResponsable() as $cliente):?>
                      <option value="<?php echo $cliente['idUsuario'] ?>"> <?php echo $cliente['usuario'] ?> </option>
                      <?php endforeach;?>                    
                    </select>
                  </div>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" name="observacion" id="observacion" placeholder="Leave a comment here" id="floatingTextarea" required
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Observaciones Finales</label>
                </div>
                <Center>
                <input type="submit" value="Guardar" class="btn btn-success">
                <input type="hidden" name="addSolicitud" id="addSolicitud">
              </Center>
   

              </form>
            </div>
          </div>
        </div>



      </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="copyright">
    &copy; Copyright <strong><span>BRS</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
     
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>