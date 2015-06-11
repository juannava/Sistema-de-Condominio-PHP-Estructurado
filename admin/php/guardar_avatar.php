<?php 
include("../../conexion/datos.php");
 $id = $_POST['id'];
if (isset($_POST['avatar']) AND isset($_POST['id']) AND isset($_POST['file'])  ) 
{          
		    $allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				OR ($_FILES["file"]["type"] == "image/jpeg")
				OR ($_FILES["file"]["type"] == "image/jpg")
				OR ($_FILES["file"]["type"] == "image/pjpeg")
				OR ($_FILES["file"]["type"] == "image/x-png")
				OR ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../../media/img/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../media/img/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../../media/img/" .$random.'_'. $_FILES["file"]["name"];
		      		$sql = mysql_query("UPDATE usuario SET imagen = '{$imagen}' WHERE empresa_id = '{$id}' LIMIT 1");
							if($sql) {
					 		  header("Location: ../perfil.php?id=$id");
							} else { header("Location: ../perfil.php?id=$id&error"); }
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
}
else
{
 header("Location: ../perfil.php?id=$id");
}

 ?>