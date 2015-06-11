<?php include_once '../includes/include.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Registro de Empresas</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ingrese los datos <small>Rellene los campos con la informacion Correcta</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php include "../libs/mensajes.php"; ?>
                    <form name="login" action="php/registrar_empresas.php" method="POST" role="form" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre" >Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rif">Rif <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="rif" name="rif" placeholder="Ejem: J-1722990-1" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ubicacion" class="control-label col-md-3 col-sm-3 col-xs-12">Ubicacion </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="ubicacion" class="form-control col-md-7 col-xs-12" type="text" name="ubicacion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion Fiscal </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="direccion" class="form-control col-md-7 col-xs-12" type="text" name="direccion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="telefono" class="form-control col-md-7 col-xs-12" type="text" name="telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label for="encargado" class="control-label col-md-3 col-sm-3 col-xs-12">Encargado </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="encargado" class="form-control col-md-7 col-xs-12" type="text" name="encargado">
                    </div>
                </div>
                <div class="form-group">
                    <label for="correo" class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electronico </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="correo" class="form-control col-md-7 col-xs-12" type="email" name="correo">
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
                    <th>Nompre de la Empresa </th>
                    <th class="ubicacion">Direccion Fiscal </th>
                    <th>Ubicacion </th>
                    <th>RIF </th>
                    <th class=" no-link last"><span class="nobr">Accion</span>
                </th>
            </tr>
        </thead>
        <?php include "../models/tabla_empresas.php"; ?>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</div>
</div>
</div>
</div>
<?php include_once '../footer.php'; ?>