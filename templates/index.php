<!DOCTYPE html>
<html lang="<?= $config['website']['lang-doc'] ?>">

<head>
    <?php $func->checkHTTP($http, $config['arrayDomainSSL'], $config_base, $config_url); ?>
    <?php include TEMPLATE . LAYOUT . "css.php"; ?>
    <?php include TEMPLATE . LAYOUT . "head.php"; ?>
    <?php include TEMPLATE . LAYOUT . "js_header.php"; ?>
</head>

<body class="<?php if ($source != 'index') echo 'in-page'; ?>">
    <div>

        <?php
        include TEMPLATE . LAYOUT . "seo.php";
        include TEMPLATE . LAYOUT . "header.php";
        include TEMPLATE . LAYOUT . "menu.php";
        include TEMPLATE . LAYOUT . "slide.php";

        ?>
        <?php include TEMPLATE . $template . "_tpl.php"; ?>


        <?php
        include TEMPLATE . LAYOUT . "footer.php";
        // include TEMPLATE.LAYOUT."modal.php";
        include TEMPLATE . LAYOUT . "js.php";
        // if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
        ?>
    </div>
</body>

</html>