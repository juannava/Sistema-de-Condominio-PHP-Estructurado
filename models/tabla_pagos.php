<?php include("../conexion/datos.php");
$year = date('Y');
$gastos_anuales = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$year}'");
$datos_gastos = mysql_fetch_assoc($gastos_anuales);
$id_gastos = $datos_gastos['id'];
$buscar = mysql_query("SELECT * FROM empresas WHERE id != 1");
if ($buscar)
{
    while($datos = mysql_fetch_assoc($buscar))
    {
       $cancelado = 0;
       $restante  = 0;
       $buscar_costos = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$datos['id']}'");
       $datos_empresa = mysql_fetch_assoc($buscar_costos);
       $buscar_pagos = mysql_query("SELECT * FROM control_pagos WHERE empresa_id = '{$datos['id']}' AND gastos_id = '{$id_gastos}'");
       $count = mysql_num_rows($buscar_pagos);
       while($datos_pagos = mysql_fetch_assoc($buscar_pagos))
       {          
        $cancelado = $datos_pagos['pago']+ $cancelado;
        $restante =  $datos_empresa['en_bolivares']*12 - $cancelado;
       }

        echo '<tbody>
            <tr class="even pointer">
                <td class="a-center ">
                    <input type="checkbox" class="tableflat">
                </td>
                <td class="nombre_empresa">'.$datos['nombre'].'</td>
                <td class="area">'.number_format($datos_empresa['en_ut'], 2, ',', '.').'</td>
                <td class="anual">'.number_format($datos_empresa['en_bolivares'], 2, ',', '.')." Bsf".'</td>
                <td class="ut">'.number_format($datos_empresa['en_bolivares']*12, 2, ',', '.')." Bsf".'</td>
                <td class="nro">'.$count.'</td>
                <td class="cancelado">'.number_format($cancelado, 2, ',', '.')." Bsf".'</td>
                <td class="status">'.number_format($restante, 2, ',', '.')." Bsf".'</td>
               
                <td class=" last"><a href="detalles_pagos.php?id='.$datos['id'].'"><i class="fa fa-eye" ></i> Ver</a>
            </td>
        </tr>
        </tbody>';

        }
}
else
{
echo "Error en la conexion de la base de datos.";
}