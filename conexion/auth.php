<?php 
include("datos.php");

$user = $_POST['user'];
$pass = $_POST['password'];


if (!empty($user) && !empty($pass)) { //verificando que los campos no esten vacios
	
	$verifica = mysql_query("SELECT * FROM usuario WHERE (email = '{$user}' OR  usuario = '{$user}') AND password = '{$pass}' LIMIT 1");
	if (mysql_num_rows($verifica)==1) {
		//usuario autorizado con exito
		$user = mysql_fetch_assoc($verifica);
		//asigno un nombre a la sesión para poder guardar diferentes datos
		session_name("userZimca");
		// inicio la sesión 
		session_start(); 
		//defino la fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss 
		$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
		$_SESSION["autentificado"]= "SI";
		//se guardan datos del usuario en la session
		$_SESSION["empresa"] = $user['empresa'];
		$_SESSION["nombre"] = $user['nombre'];
		$_SESSION["apellido"] = $user['apellido'];
		$_SESSION["rif"] = $user['rif'];
		$_SESSION["nivel"] = $user['nivel'];
		$_SESSION["imagen"] = $user['imagen'];
		
		
		//redireccion segun el nivel del usuario
		if ($_SESSION["nivel"]== 0) {
			header("Location: ../admin/index.php");
			exit();
		}
		elseif ($_SESSION["nivel"]==2) {
			
			 header("Location: ../mesonero/index.php");
			 exit();
		}elseif ($_SESSION["nivel"]==3) {
			
			 header("Location: ../cocina/index.php");
			 exit();
		}elseif ($_SESSION["nivel"]==4) {
			
			 header("Location: ../caja/index.php");
			 exit();
		}
		else
		{
			//redirecciono al login con un mensaje
			$msg = "Lo sentimos, no se reconoce su nivel de usuario.";
			header("Location: ../../index.php?msg=$msg");
			exit();
		}
	}
	else
	{
		//el usuario no fue autorizado
		$msg = "Su email y/o contraseña son incorrectos.";
		header("Location: ../../index.php?msg=$msg");
		exit();

	}
}
else
{
	//los campos se encontraron vacios
	$msg = "Debe llenar todos los campos.";
	header("Location: ../../index.php?msg=$msg");
	exit();
}

//liberamos los resultados de la consulta
mysql_free_result($verifica); 
?>