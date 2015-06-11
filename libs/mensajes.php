    <?php 
 if(isset($_GET['msg']) AND !isset($_GET['msgs'])){
echo '<center class="alert alert-success recepcion"><button type="button" class="close" data-dismiss="alert">×</button>'.$_GET['msg'].'</center>';
 

  }
if(isset($_GET['msg']) AND isset($_GET['msgs'])){
echo '<center class="alert alert-danger recepcion"><button type="button" class="close" data-dismiss="alert">×</button>'.$_GET['msg'].'</center>';
 
?>



 <?php }
   ?>