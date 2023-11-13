<!-- Js Config -->

<script type="text/javascript">

    var BM_FRAMEWORK = BM_FRAMEWORK || {};

    var CONFIG_BASE = '<?=$config_base?>';

    var WEBSITE_NAME = '<?=(!empty($setting['ten'.$lang]) && $setting['ten'.$lang] != '') ? $setting['ten'.$lang] : ''?>';

    var TIMENOW = '<?=date("d/m/Y",time())?>';

    var SHIP_CART = <?=(isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false'?>;

    var GOTOP = 'assets/images/top.png';

    var PAGEINDEX = <?=$optsetting['pageindex']?>;

    var LANG = {

        'no_keywords': '<?=chuanhaptukhoatimkiem?>',

        'delete_product_from_cart': '<?=banmuonxoasanphamnay?>',

        'no_products_in_cart': '<?=khongtontaisanphamtronggiohang?>',

        'wards': '<?=phuongxa?>',   

        'back_to_home': '<?=vetrangchu?>',
        'magiamgiadaduocsudung': '<?=vetrangchu?>',

    };

</script>





<!-- Js Files -->

<?php

    $js->setCache("cached");

    $js->setJs("./assets/js/jquery.min.js");

    $js->setJs("./assets/js/functions.js");

    echo $js->getJs();

?>