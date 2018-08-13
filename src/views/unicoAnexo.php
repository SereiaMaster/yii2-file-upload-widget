<?php
/** @var \dosamigos\fileupload\FileUpload $this */
/** @var string $input the code for the input */
?>

<span class="anexo-unico-input  fileinput-button" <?= ($perfil)?'style="display:none;"':'' ?>>
   <i class="fa fa-camera"></i>
    <!-- The file input field used as target for the file upload widget -->
    <?= $input ?>
</span>
<div class="form-group has-error anexo-caminho">
    <div class="help-block"></div>
</div>
