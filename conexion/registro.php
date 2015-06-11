<?php 
include "datos.php";


if (isset($_POST['verificar'])) 
{
	$rif = $_POST['sufijo'].$_POST['rif'];

	$select = mysql_query("SELECT * FROM empresas WHERE rif = '{$rif}'");
	
	if ($select) 
	{
		if (mysql_num_rows($select)>0) 
		{

			$verifica = mysql_fetch_assoc($select);
            $id = $verifica['id'];

			$buscar_usuario = mysql_query("SELECT * FROM usuario WHERE empresa_id = '{$id}'");
		    if ($buscar_usuario) 
		    {
				$verifica_usuario = mysql_fetch_assoc($buscar_usuario);
				$usuario          = $verifica_usuario['usuario'];
				$password         = $verifica_usuario['password'];
				if ($usuario != " " AND $password != " ")
				{
					header("Location: ../usuario/registrar_datos.php?id=$id");
					exit();

				}
		        else
		        {
			        $msg = "La empresa ya posee un usuario y contraseña.";
					header("Location: ../index.php?msg=$msg&msgs");
					exit();
		        }

		    }
		    else
		    {
				$msg = "Error con la conexion de la base de datos.";
				header("Location: ../index.php?msg=$msg&msgs");
				exit();
		    }
		    
		}
		else
		{
			$msg = "El RIF no existe en nuestra base de datos.";
			header("Location: ../index.php?msg=$msg&msgs");
			exit();
		}
		
	}
	else
    {
		$msg = "Error con la conexion de la base de datos.";
		header("Location: ../index.php?msg=$msg&msgs");
		exit();
    }

}
elseif (isset($_POST['Registar_datos']))
{
	
}



else
{
	$msg = "Error con la conexion de la base de datos.";
	header("Location: ../index.php?msg=$msg&msgs");
	exit();	
}





 ?>