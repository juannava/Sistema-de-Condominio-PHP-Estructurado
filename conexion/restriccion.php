<?php
//iniciamos la sesión 
session_name("userZimca"); 
session_start(); 

//antes de hacer los cálculos, compruebo que el usuario está logueado 
//utilizamos el mismo script que antes 
if ($_SESSION["autentificado"] != "SI") { 
    //si no está logueado lo envío a la página de autentificación
    $msg = "Debe ingresar sus datos."; 
    header("Location: ../../index.php?msg=$msg"); 
   
} 
else { 
    //sino, calculamos el tiempo transcurrido 
    $fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 

    //comparamos el tiempo transcurrido 
    if($tiempo_transcurrido >= 6000) { 
     //si pasaron 10 minutos o más 
      session_destroy(); // destruyo la sesión 
      $msg = "La sesion ha caducado por inactividad."; 
      header("Location: ../../index.php?msg=$msg"); //envío al usuario a la pag. de autenticación 
      //sino, actualizo la fecha de la sesión 
    }
    else 
    { 
      $_SESSION["ultimoAcceso"] = $ahora; 
    } 
} 
?>
