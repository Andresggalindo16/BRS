
<?php 

require_once "modelos/cliente.php"; 

$cliente = new cliente;

?>

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
<!-- ======= UwU ======= -->
<?php require_once "menu.php" ?> 
<!-- ======= UwU ======= -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Validación de clientes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

          <li class="breadcrumb-item active">Validación de clientes</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clientes Creados</h5>
              <a href="crear_cliente.php"><button type="button" class="btn btn-success rounded-pill">Crear cliente</button></a>
              <br>
              <br>
              <?php if(!empty($_REQUEST['msg'])):  ?>
              <div class="alert alert-success" role="alert">
                <?php  echo $_REQUEST['msg'] ?>
              </div>
              <?php endif; ?>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>

                    <th scope="col">Nit</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Version</th>
                    <th scope="col">URL</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($cliente->getCliente() as $clientes): ?>
                  <tr>
                    <td><a href="actualizar_cliente.php?id=<?php echo $clientes['idCliente'] ?>&nit=<?php echo $clientes['nit'] ?>&nombre=<?php echo $clientes['nombre']  ?>&version=<?php echo $clientes['version']  ?>&url=<?php echo $clientes['url']  ?>&estado=<?php echo $clientes['estado']?>"><?php echo $clientes['nit']  ?></a></td>
                    <td><?php echo $clientes['nombre']  ?></td>
                    <td><?php echo $clientes['version']  ?></td>
                    <td><?php echo $clientes['url']  ?></td>
                    <td><?php echo $clientes['estado'] == 'on' ? 'Activo' : 'Inactivo'  ?></td>
                  </tr>
                  <?php endforeach;  ?>
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