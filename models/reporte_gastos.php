<?php include("../conexion/datos.php"); 

$buscar = mysql_query("SELECT * FROM gastos_anuales");

if ($buscar) 
{
     while($datos=mysql_fetch_assoc($buscar))
     {
      $id             = $datos['id'];
      $fecha          = $datos['year'];
      $costos         = number_format($datos['costos_bsf'], 0, ',', '.');
      $costos_unidad  = number_format($datos['costos_ut'], 2, ',', '.');
      $unidad         = number_format($datos['ut'], 2, ',', '.');
      ?>

<div class="row top_tiles" style="margin: 10px 0;">
    <div class="col-md-3 tile">
        <span>Año</span>
        <h2><?php echo $fecha; ?></h2>
        <span class="sparkline_one" style="height: 160px;">
            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span>
    </div>
    <div class="col-md-3 tile">
        <span>Gastos Estimados en Bs</span>
         <div class="col-md-7"><h2><?php echo $costos;?></h2></div>
          <div class="col-md-3 edit_ut"><span class="label label-primary">Editar</span></div>
        
       
        <span class="sparkline_one" style="height: 160px;">
            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span>
    </div>
    <div class="col-md-3 tile"><a data-toggle="modal" data-target="<?php echo ".edit".$fecha; ?>">
        <span>Importe de la Unidad Tributaria</span>
        <div class="col-md-7"><h2><?php echo $unidad; ?></h2></div>
        <div class="col-md-3 edit_ut"><span class="label label-primary">Editar</span></div>
        <span class="sparkline_two" style="height: 160px;">
        <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span></a>
    </div>
    <div class="col-md-3 tile">
        <span>Gastos en Unidades Tributarias</span>
        <h2><?php echo  $costos_unidad; ?></h2>
        <span class="sparkline_one" style="height: 160px;">
            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
        </span>
    </div>
</div>

<?php include "../libs/modal/modal_edit_ut.php"; ?>
 
<?php }

}
else
{
    echo "Error en la base de datos";
}



?>


