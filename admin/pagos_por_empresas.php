<?php include_once '../includes/include.php'; 
include_once '../controller/control_de_pagos.php';?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Informacion de pagos por Empresas</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Datos Generales<small>Seleccione la Empresa y Rellene los campos con la informacion Correcta</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                            <?php include "../libs/mensajes.php"; ?>
                    <form name="login" action="php/registrar_pagos_empresas.php" method="POST" role="form" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre" >Nombre de Empresa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="select2_single form-control" name="nombre" tabindex="-1">
                           <?php include "../models/select_empresas.php"; ?>                        
                         </select>
                           </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pago">Pago realizado en Bsf <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="pago" name="pago" placeholder="Ejem:1950" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Pago <span class="required">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="fecha" class="form-control col-md-7 col-xs-12" type="date" name="fecha" min="2015-01-01" max="<?php echo date('Y-m-d'); ?>" required="required">
                    </div>
                </div>
                   
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary">Cancelar</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </form>
         </div>
        <table id="example" class="table table-striped responsive-utilities jambo_table">
              <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat" disabled="disabled" checked="checked">
                                                </th>
                                                <th>Nombre de la Empresa</th>
                                                <th>Pago en U.T </th>
                                                <th>Bolivares</th>
                                                <th>Anual Bsf </th>
                                                <th>Nro pagos</th>
                                                <th>Cancelado </th>
                                                <th>Restante</th>
                                               
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
        <?php include "../models/tabla_pagos.php"; ?>
    </table>
   
</div>
</div>
</div>
</div>
</div>
<?php include_once '../footer.php'; ?>

