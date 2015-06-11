
<h3><?php echo $usuario; ?></h3>
<ul class="list-unstyled user_data">
    <li><i class="fa fa-home user-profile-icon"></i> <?php echo $nombre_empresa; ?></li>
    <li><i class="fa fa-barcode user-profile-icon"></i> <?php echo $rif; ?></li>
    <li><i class="fa fa-map-marker user-profile-icon"></i> <?php 
    if ($ubicacion == "") 
    {
        echo "Ubicacion";
    }
    else
    {
    echo "Ubicacion - ".$ubicacion; 
    }
    ?></li>
    <?php  
     foreach ($telefonos as $telefono )
    {
        if ($telefono == "")
        {
         echo '<li><i class="fa fa-phone user-profile-icon telefono"></i> Telefono</li>';
       
        } 
        else
        {
          echo '<li><i class="fa fa-phone user-profile-icon telefono"></i>'." ".$telefono.'</li>';
        }
    
      } 
    ?>
   
    <li><i class="fa fa-user user-profile-icon"></i> <?php 
     if ($encargado == "") 
     {
         echo "Encargado";
     }
     else
     {
      echo $encargado;
     }
     ?> </li>
    <li><i class="fa fa-map-marker user-profile-icon"></i> <?php 
     if ($direccion == "") 
     {
         echo "Direccion";
     }
     else
     {
        echo $direccion;
     }

    ?></li>
    <?php if ($correo == "") 
    { ?>
       
    <li class="m-top-xs">
        <i class="fa fa-envelope user-profile-icon"></i> Correo electronico
        
    </li>


   <?php  }
    else
    { ?>
    <li class="m-top-xs">
        <i class="fa fa-envelope user-profile-icon"></i>
        <a href="mailto:<?php echo $correo; ?>" target="_blank"> <?php echo $correo; ?></a>
    </li>
    <?php } ?>
</ul>
<a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
<br />