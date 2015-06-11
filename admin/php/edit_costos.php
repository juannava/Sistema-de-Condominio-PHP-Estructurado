<?php 
include("../../conexion/datos.php");
$ano        = date('Y');
$id         = $_POST['id'];
$ut         = $_POST['ut'];


if (isset($_POST['edit_ut']))
{
    $buscar = mysql_query("SELECT * FROM gastos_anuales WHERE id = '{$id}'");
    if ($buscar) 
    { 
            $datos = mysql_fetch_assoc($buscar);
            $costos_ut = $datos['costos_bsf'] / $ut;
            $insertar = mysql_query("UPDATE gastos_anuales SET ut = '{$ut}', costos_ut = '{$costos_ut}' WHERE id = '{$id}' LIMIT 1");
		    if ($insertar) 
		    {
				if ($datos['year'] == $ano)
				{

		    	 	$buscar_empresas = mysql_query("SELECT * FROM costos");
                     if ($buscar_empresas)
                      {
                         while ($empresa = mysql_fetch_assoc($buscar_empresas)) 
                         {
							
							$id_consulta  = $empresa['id'];
							$anual        = $empresa['anual'];
							$en_ut        = $anual * $costos_ut / 12 ;
       						$en_bolivares = $en_ut * $ut;
							if ($empresa['m2'] > 8000)
							{
						    	$en_bolivares = $en_ut * $ut;
							}
							else
							{
							    $en_bolivares = 15 * $ut;
							}
							$update = mysql_query("UPDATE costos SET en_ut = '{$en_ut}', en_bolivares = '{$en_bolivares}' WHERE id = '{$id_consulta}' LIMIT 1 ");
						
                         }
							$msg = "Los cambios se ha realizado de forma exitosa y ha afectado el pago de todas las empresas.";
							header("Location: ../registrar_gastos.php?msg=$msg");
							exit();

                      }
                      else
                      {
							$msg = "Error con la base de datos contacte al administrador.";
							header("Location: ../registrar_gastos.php?msg=$msg&msgs");
							exit();
                      }	

		         }
		         else
		         {
			        $msg = "Los cambios se ha realizado de forma exitosa.";
					header("Location: ../registrar_gastos.php?msg=$msg");
					exit();
		         }	
		    	    
		       
		    }
		    else
		    {
		            $msg = "Error con la base de datos contacte al administrador.";
					header("Location: ../registrar_gastos.php?msg=$msg&msgs");
					exit();

		    }

    }
    else
    {
			$msg = "Error con la base de datos contacte al administrador.";
			header("Location: ../registrar_gastos.php?msg=$msg&msgs");
			exit();

    }	
}
else
{


}
 





 ?>