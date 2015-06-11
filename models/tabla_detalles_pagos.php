<?php include("../conexion/datos.php"); 
$year = date('Y-m-d');
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
$id = $_GET['id'];

 $buscar_gastos = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$year}'");
 if ($buscar_gastos) 
 {
    $gastos = mysql_fetch_assoc($buscar_gastos);
    $id_gastos = $gastos['id'];
    $buscar = mysql_query("SELECT * FROM control_pagos WHERE empresa_id = '{$id}' AND gastos_id = '{$id_gastos}'");
    if ($buscar)
    {
        $buscar_costos = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$id}' ");
        $datos_costos = mysql_fetch_assoc($buscar_costos);
        $i =1;
        $pendiente = 0;
        $favor = 0;
        $mes_actual  = strftime("%B", strtotime(date('Y-m-d')));
        while($datos = mysql_fetch_assoc($buscar))
        { 

           $pendiente = $datos['saldo_restante'] + $pendiente;
           $favor     = $datos['saldo_a_favor']  + $favor ;
           $fecha = strftime("%d de %B de %Y", strtotime($datos['fecha_pago']));
           $mes   = strftime("%B de %Y", strtotime($datos['created_at']));
           $date  = strftime("%B de %Y", strtotime(date('Y-m-d')));

      ?>
       
    <tbody>
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td>
                <a><?php echo $fecha; ?></a>
                <br />
                <small>Creado <?php echo $datos['created_at']; ?></small>
             </td>
             <td>
                <?php echo number_format($datos['pago'], 2, ',', '.')." Bsf";        ?>
                <br />
                <small>
                    <?php if ($datos_costos['en_bolivares']== $datos['pago'] )  
                    {
                        echo "Pago completo";
                    
                    }
                    elseif ($datos_costos['en_bolivares'] > $datos['pago'])
                     {
                      echo "Quedo debiendo";
                     }
                     else
                     {
                        echo "Pago y abono";
                     }   
                     ?>
                </small>
            </td>
             <td>
                <?php echo number_format($datos['saldo_restante'], 2, ',', '.')." Bsf";        ?>
                <br />
                <small>
                    <?php if ($datos['saldo_restante']==0) 
                    {
                      echo "Solvente";
                    } 
                    else
                    {
                      echo "Saldo pendiente";  
                    }

                    ?>
                </small>
            </td>
                <td>
                <?php echo number_format($datos['saldo_a_favor'], 2, ',', '.')." Bsf";        ?>
                <br />
                <small>
                    <?php if ($datos['saldo_a_favor'] == 0) 
                    {
                      echo "Sin saldo";
                    } 
                    else
                    {
                      echo "Saldo a Favor";  
                    }

                    ?>
                </small>
              
            </td>
            <td>
            <?php if ($datos['pago']==0)
            {
               echo '<button type="button" class="btn btn-danger btn-xs">Pendiente</button>';
            }
            else 
            {
                 echo '<button type="button" class="btn btn-success btn-xs">Completado</button>';
            }
             ?>
        
          </td>
            <td>
                <a href="#" class="btn btn-default btn-xs"><i class="fa fa-folder"></i> Ver </a>
                  <?php 
                 if ($mes == $date) { ?>
                 <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Editar</a>
                 <a href="#" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i> Borrar </a>
                <?php  }  ?>
               </td>
        </tr>
   
    

                         
       <?php }  ?> 
        <?php $total = $datos_costos['en_bolivares'] + $pendiente + $favor; ?>
        <tr class="proximo_pago">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td colspan="" rowspan="" headers=""></td>
        <td>Pago para el mes de <?php echo $mes_actual; ?>: </td>
        <td><?php echo number_format($datos_costos['en_bolivares'], 2, ',', '.')." Bsf"; ?></td>
        </tr>
           <tr class="proximo_pago">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Monto pendiente: </td>
        <td><?php echo number_format($pendiente, 2, ',', '.')." Bsf"; ?></td>
        </tr>
           <tr class="proximo_pago">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Saldo a favor: </td>
        <td><?php echo number_format($favor, 2, ',', '.')." Bsf"; ?></td>
        </tr>
            <tr class="proximo_pago total">
          <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td >Total a pagar: </td>
        <td><?php echo number_format($total, 2, ',', '.')." Bsf"; ?></td>
        </tr>
        </tbody>

 <?php  }
    else
    {
    echo "Error con la base de datos";
    }
}
else
{
     echo "Error con la base de datos";   
}

?>





