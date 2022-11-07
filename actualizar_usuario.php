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
</script>

<body>

<?php require_once "menu.php" ?> 
<!-- End Components Nav -->
    <!-- ======= UwU ======= -->

    <main id="main" class="main">
        <form name="formulario" action="" method="post">
            <div class="pagetitle">
                <h1>Editar Usuario</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../views/vistainicio.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="../views/validacion_usuario.php">Validación de Usuario</a>
                        </li>
                        <li class="breadcrumb-item active">Editar Usuario</li>
                    </ol>
                </nav>
            </div>

            <section class="section">
                <div class="row">
                    <div class="caja">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Editar Usuario</h5>

                             
                                <form>


                                    <div class="row mb-3">
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Usuario</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="contrasena" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label">Contraseña</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="contrasena" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Confirmar
                                                Contraseña</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="confirmar" class="form-control">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <input type="submit" onclick="" class="btn btn-outline-primary" value="Guardar">
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </form>




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


    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    
    <script src="../assets/js/main.js"></script>

</body>

</html>