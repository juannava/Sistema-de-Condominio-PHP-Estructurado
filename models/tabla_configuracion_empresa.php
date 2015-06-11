<?php include("../conexion/datos.php");
$buscar = mysql_query("SELECT * FROM empresas WHERE id != 1 ");
if ($buscar)
{
    while($datos = mysql_fetch_assoc($buscar))
    {
       $buscar_costos = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$datos['id']}'");
       $datos_empresa = mysql_fetch_assoc($buscar_costos);
                     
        if ($datos_empresa['status']== "Pago minimo")
         {
           $flecha = "down";
         }
         else
         {
           $flecha = "up"; 
         }



        echo '<tbody>
            <tr class="even pointer">
                <td class="a-center ">
                    <input type="checkbox" class="tableflat">
                </td>
                <td class="nombre_empresa">'.$datos['nombre'].'</td>
                <td class="area">'.number_format($datos_empresa['m2'], 2, ',', '.').'</td>
                <td class="anual">'.number_format($datos_empresa['anual'], 4, ',', '.').'</td>
                <td class="ut">'.number_format($datos_empresa['en_ut'], 2, ',', '.').'</td>
                <td class="status">'.$datos_empresa['status']." ".'<i class="success fa fa-long-arrow-'.$flecha.'"> </i></td>
                <td class="a-right a-right ">'.number_format($datos_empresa['en_bolivares'], 2, ',', '.')." Bsf".'</td>
                <td class=" last"><a href="#"><i class="fa fa-eye" ></i> Ver</a>
            </td>
        </tr>
        </tbody>';
        }
}
else
{
echo "Error en la conexion de la base de datos.";
}