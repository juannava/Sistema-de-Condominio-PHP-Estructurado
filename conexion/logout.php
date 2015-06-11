<?php 
	session_name("userZimca"); 
	session_start();
	unset($_SESSION["autentificado"]);
	session_destroy();
	header("Location: ../../index.php");
 ?>