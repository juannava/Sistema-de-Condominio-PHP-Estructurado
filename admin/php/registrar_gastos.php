<?php 
include("../../conexion/datos.php");

$costos_bsf = $_POST['costos'];
$fecha = $_POST['fecha'];
$ut= $_POST['unidad'];

if (isset($_POST['costos']) AND isset($_POST['fecha']) AND isset($_POST['unidad'])) 
{
	$costos_ut = $costos_bsf / $ut;

	$buscar = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$fecha}'");

	if ($buscar)
	 { 
	 	if (mysql_num_rows($buscar)>0) 
	 	{
			$msg = "El Año que intenta registrar ya tiene unos gastos asignados.";
				header("Location: ../registrar_gastos.php?msg=$msg&msgs");
			exit();
	 	}
	 	else
	 	{
	 		$insertar = mysql_query("INSERT INTO gastos_anuales VALUES(NULL,'{$costos_bsf}','{$ut}','{$costos_ut}','{$fecha}')");
	 		if ($insertar) 
	 		{
				$msg = "Registro realizado con Exito.";
				header("Location: ../registrar_gastos.php?msg=$msg");
				exit();
	 		}
	 		else
	 		{
	 			$msg = "Ha ocurrido un problema con la base de datos.";
				header("Location: ../registrar_gastos.php?msg=$msg&msgs");
				exit();
	 		}
	 	}

	 }
	 else 
	 {
        $msg = "Error con la base de datos.";
			header("Location: ../registrar_gastos.php?msg=$msg&msgs");
		exit();

	 }
}
else 
{
    $msg = "Bebe rellenar los campos para poder hacer un registro.";
		header("Location: ../registrar_gastos.php?msg=$msg&msgs");
	exit();
	
}










?>