<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar sesión - POS-GA</title>
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-sm my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="<?php echo base_url(); ?>/img/login_fondo.jpg" width="100%" alt="">
                            </div>
                            <div class="col-lg-6 bg-primary text-white">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-white-900 mb-2">POS-GA</h1>
                                        <h3 class="h5 text-white-600 mb-2">¡Bienvenido!</h3>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo base_url(); ?>/usuarios/valida">
                                        <div class="form-group">
                                            <label class="small mb-1" for="usuario">Usuario</label>
                                            <input class="form-control form-control-user py-4" id="usuario" name="usuario" type="text" placeholder="Ingrese su usuario" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="password">Contraseña</label>
                                            <input class="form-control form-control-user py-4" id="password" name="password" type="password" placeholder="Ingrese su contraseña" />
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <button class="btn btn-info btn-user btn-lg" type="submit">Iniciar sesión</button>
                                            <a class="small text-white" href="<?php echo base_url(); ?>/usuarios/recuperar_password">Recuperar Contraseña?</a>
                                        </div>
                                       
                                       
                                    </form>
                                    <hr>
        
                                    <div class="form-group">
                                            <?php if (isset($validation)) { ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $validation->listErrors(); ?>
                                                </div>
                                            <?php } ?>
                                            <?php if (isset($error)) { ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $error ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Footer -->
<footer class="sticky-footer ">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; <a target="_blank" href="https://guyacevedo.github.io">guyacevedo.github.io</a> 2021</span>
    </div>
  </div>
</footer>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>