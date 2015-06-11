<?php include("../conexion/datos.php");

$year = date('Y');
$date=  date('Y-m-1', strtotime('now - 1 month'));

$fecha_comparativa  = strftime("%B de %Y", strtotime($date));

$buscar_gastos = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$year}'");
if ($buscar_gastos) 
{
		$gastos = mysql_fetch_assoc($buscar_gastos);
		$id_gastos = $gastos['id'];
		$buscar = mysql_query("SELECT * FROM empresas WHERE id != 1"); 
		while($empresa =mysql_fetch_assoc($buscar)) 
		{
			$i = 0;
			$n = 0;
			$id = $empresa['id'];
			$buscar_costos = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$id}'");
			$costos = mysql_fetch_assoc($buscar_costos);
			$deuda = $costos['en_bolivares'];
			$buscar_pagos = mysql_query("SELECT * FROM control_pagos WHERE empresa_id = '{$id}'");
	        if (mysql_num_rows($buscar_pagos)>0)	        	
	        {
					while ($datos = mysql_fetch_assoc($buscar_pagos)) 
					{
		                $fecha  = strftime("%B de %Y", strtotime($datos['fecha_pago']));
						if ($fecha == $fecha_comparativa) 
						{
						  $i++;
						}
						else
						{
						  $n++;
						}	

					}
					if ($i== 0 AND $n > 0) 
					{
		              $insertar_1 = mysql_query("INSERT INTO control_pagos VALUES(NULL, '{$id}', '0', '{$deuda}','0', '$date', '{$id_gastos}',NOW())");
	        
					}
	        	
	        }
	        else
	        {
	           $insertar = mysql_query("INSERT INTO control_pagos VALUES(NULL, '{$id}', '0', '{$deuda}','0', '$date','{$id_gastos}',NOW())");
	        } 		  
		}
 }

?>