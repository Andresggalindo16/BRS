
<?php require_once "controller/solicitudescontroller.php"?>
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
      <h1>Validación de solicitudes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

          <li class="breadcrumb-item active">Validación de solicitudes</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <?php if(isset($_GET['ListarFinalizadas'])){

            }else{ ?>  
            <h5 class="card-title">Solicitudes Pendientes</h5>
              <a href="creacion_solicitud.php?addSolicitud"><button type="button" class="btn btn-success rounded-pill">Crear solicitud</button></a>
              <br>
              <br>
              <?php } ?>

        
              <table class="table datatable">
                <thead>
                  <tr>

                    <th scope="col">N° solicitud</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0; $i < count($solicitud) ; $i++) { ?>
                    <tr>
                      <td><a href="actualizar_solicitud.php?verSolicitud=<?php echo $solicitud[$i]['idSolicitud'] ?>"><?php echo $solicitud[$i]['idSolicitud'] ?></a></td>
                      <td><?php echo $solicitud[$i]['titulo'] ?></td>
                      <td><?php echo $solicitud[$i]['cliente_nombre'] ?></td>
                      <td><?php echo $solicitud[$i]['prioridad'] ?></td>
                      <td><?php echo $solicitud[$i]['fechaRegistro']?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
           

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