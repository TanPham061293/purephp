<?php 
include "ajax_config.php";

?>
<div class="load_captcha" onclick="load_captcha()">
    <input type="text" class="captcha" name="res_captcha" value="<?=$func->random_string(6)?>" readonly>

    <!-- <img id="contactform-verifycode-image" src="<?=TEMPLATE ?>contact/captcha_image.php"
                                onerror="this.src='thumbs/120x50x1/assets/images/noimage.png';" alt="">  -->
    <a style="display: inline;" href="javascript:;" id="fox"><i class="fas fa-sync-alt"></i></a>
</div>
