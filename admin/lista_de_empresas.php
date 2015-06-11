<?php include_once '../includes/include.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Lista General de Empresas</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Datos Generales <small>Puede ver los detalles para eliminar o editar cualquier empresa en esta seccion</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                  <table id="example" class="table table-striped responsive-utilities jambo_table">
            <thead>
                <tr class="">
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
             
        </div>
       
 </div>
</div>
</div>
</div>
</div>
<?php include_once '../footer.php'; ?>
