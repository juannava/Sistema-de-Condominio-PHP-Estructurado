<?php include "../controller/empresa.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Condominio Zimca</title>
        <!-- Bootstrap core CSS -->
        <link href="../media/css/bootstrap.min.css" rel="stylesheet">
        <link href="../media/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="../media/css/animate.min.css" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="../media/css/custom.css" rel="stylesheet">
        <link href="../media/css/icheck/flat/green.css" rel="stylesheet">
        <script src="../media/js/jquery.min.js"></script>
    </head>
    <body style="background:#F7F7F7;">
        <div class="">
            <div id="registro">
                <div  class="animate form">
                    <section class="login_content registro">
                        <form name="registro" action="conexion/registro.php" method="POST" role="form">
                            <h1>Rellene los Campos para Finalizar el registro</h1>
                            <div class="col-md-6">
                                <h4>Datos del Usuario </h4>
                                <div class="user_from">
                                    <h5>Nombre de usuario. <small>El usuario debe de ser una palabra unica</small>
                               </h5>
                                    <input type="text" class="form-control"  name="usuario" required />
                                   </div>
                                <div>
                                 <h5>Contraseña. <small>Su clave es sensible a mayusculas y minusculas</small>
                               </h5>
                                    <input type="text" class="form-control"  name="password" required/>
                                </div>
                                <div>
                                <h5>Su nombre. 
                               </h5>
                                    <input type="text" class="form-control"  name="nombre_encargado" required />
                                </div>
                                <div>
                                <h5>Su apellido. 
                               </h5>
                                    <input type="text" class="form-control"  name="apellido_encargado" required />
                                </div>
                                <div>
                                  <h5>Correo electronico. <small>Escriba o actualize su correo electronico</small>
                               </h5>
                                    <input type="email" class="form-control" name="email" placeholder="<?php echo $correo; ?>"  required/>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Datos de la Empresa</h4>
                                <div>
                                <h5>Rif. 
                               </h5>
                                    <input type="text" class="form-control" readonly="readonly" name="rif" value="<?php echo  $rif; ?>" />
                                </div>
                                <div>
                                <h5>Nombre de la empresa.
                               </h5>
                                    <input type="text" class="form-control" readonly="readonly" name="rif" value="<?php echo  $nombre_empresa; ?>" />
                                </div>
                                <div>
                                <h5>Ubicacion. <small>Escriba donde se encuentra dentro de zimca</small>
                               </h5>
                                    <input type="text" class="form-control"  name="ubicacion" value="<?php echo  $ubicacion; ?>" />
                                </div>
                                <div>
                                <h5>Direccion Fiscal. <small></small>
                               </h5>
                                    <input type="text" class="form-control"  name="direccion" value="<?php echo  $direccion; ?>" />
                                </div>
                                <div>
                                <h5>Telefonos. <small>Si tiene mas de un telefono separelos con / ejem: 0414xxxx / 0416xxxx </small>
                               </h5>
                                    <input type="text" class="form-control"  name="direccion" value="<?php echo  $telefono_array; ?>" />
                                </div>
                            </div>
                            <div class="registro_center">
                                <button type="submit" class="btn btn-default" name="verificar">Verificar</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link">Ya tienes un usuario ?
                                    <a href="../index.php" class="to_register"> Entrar </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><img src="../media/images/logo.png" alt=""></h1>
                                    <p>©2015 Todos los derechos reservados. ZIMCA! Zona Industrial de Maturin C.A. Desarrollado por - Somossoluciones.com</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
            </div>
        </div>
        <script src="../media/js/bootstrap.min.js"></script>
        <script src="../media/js/custom.js"></script>
    </body>
</html>