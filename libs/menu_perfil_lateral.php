
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      
                         <center>
                <img class="site_title"  src="../media/images/logo.png" alt=""> </center>
                </a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../media/img/<?php echo $_SESSION["imagen"]; ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenido,</span>
                            <h2><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br />