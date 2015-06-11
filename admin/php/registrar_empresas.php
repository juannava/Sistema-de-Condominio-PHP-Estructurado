<?php 
include("../../conexion/datos.php");
if (isset($_POST['nombre']) AND isset($_POST['rif'])) 
{
  $nombre    = strtoupper($_POST['nombre']);
  $rif       = strtoupper($_POST['rif']);
  $ubicacion = strtoupper($_POST['ubicacion']);
  $direccion = $_POST['direccion'];
  $telefono  = $_POST['telefono'];
  $encargado = $_POST['encargado'];
  $correo    = $_POST['correo'];

 $verifica = mysql_query("SELECT * FROM empresas WHERE rif = '{$rif}'");
 if ($verifica)
  {
 	 if (mysql_num_rows($verifica)>0)
 	  {
		$msg = "La Empresa que intenta registrar ya se encuentra registrada.";
		header("Location: ../registrar_empresas.php?msg=$msg&msgs");
		exit();
 	  }
 	  else
 	  {
 	  	$inserta = mysql_query("INSERT INTO empresas VALUES(NULL, '{$nombre}','{$rif}','{$ubicacion}','{$direccion}','{$telefono}','{$encargado}')");
 	    if ($inserta)
 	    {
 	    	$empresa_id = mysql_insert_id();
 	    	$inserta_usuario =  mysql_query("INSERT INTO usuario VALUES(NULL, '$empresa_id', '', '', '', '', '{$correo}', '2','user.jpg', NOW())");
			if ($inserta_usuario) 
			{
				$msg = "Registro realizado con Exito.";
				header("Location: ../registrar_empresas.php?msg=$msg");
				exit();
			}
			else
			{
				$msg = "Error al insertar los datos en la base de datos.";
				header("Location: ../registrar_empresas.php?msg=$msg&msgs");
				exit();
			}
			
 	    }
 	    else
 	    {
			$msg = "Error al insertar los datos en la base de datos.";
			header("Location: ../registrar_empresas.php?msg=$msg&msgs");
			exit();
 	    }

 	  }
  }
  else
  {
	$msg = "Error en la base de datos.";
	header("Location: ../registrar_empresas.php?msg=$msg&msgs");
	exit();
  }
	
}
else
{
$msg = "Debe rellenar los campos obligatorios.";
header("Location: ../registrar_empresas.php?msg=$msg&msgs");
exit();
}





 ?>