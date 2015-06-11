<?php include("../conexion/datos.php");

if (isset($_GET['id']))
{
$id = $_GET['id'];

//datos generales de la empresa
$buscar = mysql_query("SELECT * FROM empresas WHERE id = '{$id}'");
$empresa = mysql_fetch_assoc($buscar);
$nombre_empresa = $empresa['nombre'];
$rif            = $empresa['rif'];
$ubicacion      = $empresa['ubicacion'];
$direccion      = $empresa['direccion'];
$telefono_array       = $empresa['telefono'];
$encargado       = $empresa['encargado'];
$telefonos = explode("/", $telefono_array);



// datos de pago
$buscar_costos = mysql_query("SELECT * FROM costos WHERE empresa_id = '{$id}'");
$costos = mysql_fetch_assoc($buscar_costos);


// datos del usuario
$buscar_usuario = mysql_query("SELECT * FROM usuario WHERE empresa_id = '{$id}'");
$usuarios = mysql_fetch_assoc($buscar_usuario);
$avatar = $usuarios['imagen'];
$usuario = $usuarios['nombre']." ".$usuarios['apellido'];
$correo = $usuarios['email'];






if ($usuario == " ")
 {
  $usuario = "Sin usuario asignado";

 }


}



?>