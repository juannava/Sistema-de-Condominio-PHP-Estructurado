<?php include_once '../includes/include.php'; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detalles de pagos</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Pago Base <?php echo number_format($costos['en_bolivares'], 2, ',', '.')." Bsf"; ?> <small>Puede ver los detallesde de los pagos realizados por la Empresa <?php echo $nombre_empresa;  ?></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 20%">Datos</th>
                            <th>Monto Cancelado</th>
                            <th>Monto pendiente</th>
                            <th>Saldo a favor</th>
                            <th>Estado</th>
                            <th style="width: 20%">Acciones</th>
                        </tr>
         </thead>
        <?php include "../models/tabla_detalles_pagos.php"; ?>
    </table> 
             
        </div>
       
 </div>
</div>
</div>
</div>
</div>
<?php include_once '../footer.php'; ?>