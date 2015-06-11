    
<?php $buscar = mysql_query("SELECT * FROM empresas WHERE id != 1"); 
if ($buscar) 
{
  while ($row = mysql_fetch_assoc($buscar)) {
  	  echo ',<option></option>';
      echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
       
   } 
}
else
{
 echo "Error en la base de datos.";   
}

?>

   