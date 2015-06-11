<?php 
include("../../conexion/datos.php");

$id = $_POST['nombre'];
$pago = $_POST['pago'];
$fecha = $_POST['fecha'];


if (isset($_POST['nombre']) AND isset($_POST['fecha']) AND isset($_POST['pago'])) 
{
	$buscar_gastos = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$fecha}'");
     
     if ($buscar_gastos) 
     {
        $gastos = mysql_fetch_assoc($buscar_gastos);
     	$id_gastos = $gastos['id'];

   		$buscar = mysql_query("SELECT * FROM costos WHERE empresa_id= '{$id}'");

		if ($buscar)
		 {  
            $datos = mysql_fetch_assoc($buscar);
            if ($datos['en_bolivares'] == $pago)
	         {
	           	   $inserta = mysql_query("INSERT INTO control_pagos VALUES(NULL, '{$id}','{$pago}', '0', '0', '{$fecha}', '{$id_gastos}', NOW())");
		           if ($inserta) 
		           {
		                $msg = "El Registro de pago se realizo Saticfactoriamente.";
						header("Location: ../pagos_por_empresas.php?msg=$msg");
						exit();
		           }
		           else
		           {

						$msg = "Error con la base de datos.";
						header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
						exit();
		           }
	         }
	         elseif ($datos['en_bolivares'] > $pago  )
	         {
	         	   $resta = $datos['en_bolivares'] - $pago;
	               $inserta = mysql_query("INSERT INTO control_pagos VALUES(NULL, '{$id}','{$pago}', '{$resta}', '0', '{$fecha}', '{$id_gastos}', NOW())");
		           if ($inserta) 
		           {
		                $msg = "El Registro de pago se realizo Saticfactoriamente.";
						header("Location: ../pagos_por_empresas.php?msg=$msg");
						exit();
		           }
		           else
		           {

						$msg = "Error con la base de datos.";
						header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
						exit();
		           }

	         }
	         else
	         {
	               $saldo =  $pago - $datos['en_bolivares'];
	               $inserta = mysql_query("INSERT INTO control_pagos VALUES(NULL, '{$id}','{$pago}', '0', '{$saldo}', '{$fecha}', '{$id_gastos}', NOW())");
		           if ($inserta) 
		           {
		                $msg = "El Registro de pago se realizo Saticfactoriamente.";
						header("Location: ../pagos_por_empresas.php?msg=$msg");
						exit();
		           }
		           else
		           {

						$msg = "Error con la base de datos.";
						header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
						exit();
		           }

	         }	
	         

		 	

		 }
		 else 
		 {
	        $msg = "Error con la base de datos.";
			header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
			exit();

		 }


   }
   else
   {
	    $msg = "La fecha que intenta registrar no conside conla fecha configurada en los gastos anuales.";
		header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
		exit();
   }

}
else 
{
    $msg = "Bebe rellenar los campos para poder hacer un registro.";
		header("Location: ../pagos_por_empresas.php?msg=$msg&msgs");
	exit();
	
}










?>
