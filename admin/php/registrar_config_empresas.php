<?php 
include("../../conexion/datos.php");
$area_total = '3956414,77';
$ano = date('Y');
$datos = mysql_query("SELECT * FROM gastos_anuales WHERE year = '{$ano}'");
$rows = mysql_fetch_assoc($datos);


$empresa_id = $_POST['nombre'];
$m2         = $_POST['m2'];
$anual      = $m2 / $area_total;
$en_ut      = $anual * $rows['costos_ut'] / 12 ;

// en_bolivares

if ($m2 > 8000)
{
  $en_bolivares = $en_ut * $rows['ut'];
   $status       = 'normal';	
  
}
else
{
  $en_bolivares = 15 * $rows['ut'];
  $status       = 'Pago minimo';
}


$buscar = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$empresa_id}'");

if ($buscar) 
{
  if (mysql_num_rows($buscar)>0)
   {
	  	 if (isset($_POST['actualizar'])) 
	  	 {
	  	 	


	  	 	
	  	 }
	  	 else
	  	 {
		    $msg = "Esta empresa ya se Encuentra Configurada .";
			header("Location: ../configuracion_empresas.php?msg=$msg&msgs");
			exit();
	  	 }
   }
   else
   {
		$guarda =  mysql_query("INSERT INTO costos VALUES(NULL, '{$empresa_id}','{$m2}','{$anual}','{$en_ut}','{$en_bolivares}','{$status}')");
		if ($guarda) 
		{
			$msg = "La empresa se a actualizado de forma correcta.";
			header("Location: ../configuracion_empresas.php?msg=$msg");
			exit();
		}
		else
		{
			$msg = "Ha ocurrido un error en la base de datos.";
			header("Location: ../configuracion_empresas.php?msg=$msg&msgs");
			exit();
		}

   }


}


 ?>
