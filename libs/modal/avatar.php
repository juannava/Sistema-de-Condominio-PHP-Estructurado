<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="" action="./php/guardar_avatar.php" enctype="multipart/form-data" method="post">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" id="avatar-modal-label">Cambiar foto de Perfil</h4>
                </div>
                <div class="modal-body">
                    <div class="avatar-body">
                        <!-- Upload image and data -->
                        <div class="avatar-upload">
                            <input class="avatar-src" name="avatar_src" type="hidden">
                            <input class="avatar-src" name="id" type="hidden" value="<?php echo $_GET['id']; ?>">
                            <input class="avatar-data" name="avatar_data" type="hidden">
                            <label for="avatarInput">Subir Imagen</label>
                            <input class="avatar-input" id="avatarInput" name="file" type="file"> </div>
                        <!-- Crop and preview -->
                        <div class="row">
                            <div class="col-md-9">
                                    <div class="avatar-preview preview-lg imagen"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="avatar-preview preview-lg"></div>
                                <div class="avatar-preview preview-md"></div>
                                <div class="avatar-preview preview-sm"></div>
                            </div>
                        </div>
                        <div class="row avatar-btns">
                            <div class="col-md-9">
                           
                             
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block avatar-save" name="avatar" type="submit">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                </div> -->
            </form>
        </div>
    </div>
</div>