<?php include("../conexion/datos.php"); 

$buscar = mysql_query("SELECT * FROM empresas WHERE id !=1");

if ($buscar) 
{
    while($datos = mysql_fetch_assoc($buscar))
    {
    echo '<tbody>
        <tr class="">
            <td class="a-center ">
                <input type="checkbox" class="tableflat">
            </td>
            <td class=" ">'.$datos['nombre'].'</td>
            <td class="direccion">'.$datos['direccion'].'</td>
            <td class=" ">'.$datos['ubicacion'].' </td>
            <td class="a-right a-right ">'.$datos['rif'].'</td>
            <td class=" last"><a href="./perfil.php?id='.$datos['id'].'"><i class="fa fa-eye"></i> Detalles</a>
        </td>
    </tr>
    </tbody>';
    }
}
else
{
 echo "Error en la conexion de la base de datos.";   
}















?>


