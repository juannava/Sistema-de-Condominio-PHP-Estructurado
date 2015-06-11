
                               
<div class="modal fade <?php echo "edit".$fecha; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-edit" ></i> Editar Importe de la U.T</h4>
            </div>
           <form name="login" action="php/edit_costos.php" method="POST" role="form" data-parsley-validate class="form-horizontal form-label-left">
         
            <div class="modal-body">
                <input type="text" hidden name="id" value="<?php echo $id; ?>">
                <input type="text" id="ut" name="ut" required="required" class="form-control" placeholder="Nuevo valor">
              
           </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="edit_ut">Guardar Cambios</button>
            </div>
          </form>
        </div>
    </div>
</div>
                              