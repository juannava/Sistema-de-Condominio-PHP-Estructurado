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

    <link href="media/css/bootstrap.min.css" rel="stylesheet">

    <link href="media/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="media/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="media/css/custom.css" rel="stylesheet">
    <link href="media/css/icheck/flat/green.css" rel="stylesheet">
    <script src="media/js/jquery.min.js"></script>
</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                   <?php include "libs/mensajes.php"; ?>
                    <form name="login" action="conexion/auth.php" method="POST" role="form">
                        <h1>Iniciar Seción</h1>
                        <div>
                            <input name="user" type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email, Usuario, o Rif">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div>
                        <input name="password" type="text" class="form-control has-feedback-left" placeholder="Password">
                          <span class="fa fa-unlock form-control-feedback left" aria-hidden="true"></span>
                         
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">Entrar</button> 
                            <a class="reset_pass" href="#">Problemas para entrar?</a>
                             </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Es tu primera vez?
                                <a href="#toregister" class="to_register"> Crea tu cuenta </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><img src="media/images/logo.png" alt=""></h1>

                                <p>©2015 Todos los derechos reservados. ZIMCA! Zona Industrial de Maturin C.A. Desarrollado por - Somossoluciones.com</p>
                            </div>
                        </div>
                   
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form name="registro" action="conexion/registro.php" method="POST" role="form">
                        <h1>Verificar Empresa</h1>
                        <div class="col-md-3">
                            <select class="form-control" name="sufijo">
                                <option value="J-">J</option>
                                <option value="V-">V</option>
                            </select>
                             </div>
                        <div class="col-md-9 rif_registro">
                            <input type="text" class="form-control" name="rif" placeholder="RIF" required="" />
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-default" name="verificar">Verificar</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Ya tienes un usuario ?
                                <a href="#tologin" class="to_register"> Entrar </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                               <div>
                                <h1><img src="media/images/logo.png" alt=""></h1>

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
   <script src="media/js/bootstrap.min.js"></script>
    
    <script src="media/js/custom.js"></script>

</body>

</html>