<?php include_once '../includes/include.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Registro de Gastos Anuales</h3>
            </div>
           
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ingrese los datos <small>Rellene los campos con la informacion Correcta</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                               <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br />
            <?php include "../libs/mensajes.php"; ?>
        <form name="login" action="php/registrar_gastos.php" method="POST" role="form" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gastos Estimados del Condominio <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" name="costos" required="required" class="form-control col-md-7 col-xs-12" placeholder="ejem: 9500000000">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">
            Costo de la unidad Tributaria <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="last-name" name="unidad" required="required" class="form-control col-md-7 col-xs-12" placeholder="ejem: 127">
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Año</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="date" name="fecha" required="required" placeholder="ejem: 2015">
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
<br>
    <?php include "../models/reporte_gastos.php"; ?>

</div>
</div>
</div>
</div></div>

<?php include_once '../footer.php'; ?>

