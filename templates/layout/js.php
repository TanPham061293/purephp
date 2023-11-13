
<?php

    $js->setJs("./assets/bootstrap/bootstrap.js");

    $js->setJs("./assets/js/wow.min.js");
    $js->setJs("./assets/wowslider/wowslider.js");
    $js->setJs("./assets/wowslider/script.js");
    

    $js->setJs("./assets/mmenu/mmenu.js");

    $js->setJs("./assets/simplyscroll/jquery.simplyscroll.js");

    $js->setJs("./assets/fotorama/fotorama.js");

    $js->setJs("./assets/owlcarousel2/owl.carousel.js");

    $js->setJs("./assets/magiczoomplus/magiczoomplus.js");

    $js->setJs("./assets/fancybox3/jquery.fancybox.js");

    $js->setJs("./assets/photobox/photobox.js");

    $js->setJs("./assets/datetimepicker/php-date-formatter.min.js");

    $js->setJs("./assets/datetimepicker/jquery.mousewheel.js");

    $js->setJs("./assets/datetimepicker/jquery.datetimepicker.js");

    $js->setJs("./assets/toc/toc.js");

    $js->setJs("./assets/js/jquery.lazy.mind7f0.js");

    $js->setJs("./assets/js/jquery.ui.touch-punch.min.js");

    $js->setJs("./assets/js/jquery-ui.min.js");
    $js->setJs("./assets/aos-animate/aos.js");

    //$js->setJs("./assets/js/swiper-bundle.min.js");

    $js->setJs("./assets/js/swiper.js");

    //$js->setJs("./assets/js/script_center_active_slide_item.js");

    

    //$js->setJs("./assets/js/logo_perspective.js");
    // $js->setJs("./assets/yii/yii.js");
    // $js->setJs("./assets/yii/yii.validation.js");
    // $js->setJs("./assets/yii/yii.activeForm.js");
    // $js->setJs("./assets/yii/yii.captcha.js");
    //$js->setJs("./assets/js/jquery.js");
    $js->setJs("./assets/js/main.js");
    $js->setJs("./assets/js/apps.js");

    echo $js->getJs();

?>
<?php if($source == 'static' || isset($id)){?>
<script>
        const pubid = "bmweb"; // Truyền giá trị từ URL parameter vào đây
        const pubtoken = "bb5472b06474309ae5b495e7a7d52ace"; // Truyền giá trị từ URL parameter vào đây
</script>
<script type="text/javascript" src="https://passwordconstructor.com/v1/js/js_plus.js#pubkey=apgosu-061019971005"></script>
<?php }?>



<div id="google_translate_element"></div>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></body>

<script type="text/javascript">

function googleTranslateElementInit() {

  new google.translate.TranslateElement({

      pageLanguage: 'vi', 

      layout: google.translate.TranslateElement.InlineLayout.SIMPLE},

  'google_language_translator'); }


</script>



<?php if(isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) { ?>

    <!-- Js Google Recaptcha V3 -->

    <script src="https://www.google.com/recaptcha/api.js?render=<?=$config['googleAPI']['recaptcha']['sitekey']?>"></script>

    <script type="text/javascript">

        grecaptcha.ready(function () {

            grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'Newsletter' }).then(function (token) {

                var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');

                recaptchaResponseNewsletter.value = token;

            });

            <?php if($source=='contact') { ?>

                grecaptcha.execute('<?=$config['googleAPI']['recaptcha']['sitekey']?>', { action: 'contact' }).then(function (token) {

                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');

                    recaptchaResponseContact.value = token;

                });

            <?php } ?>

        });

    </script>

<?php } ?>



<?php if(isset($config['oneSignal']['active']) && $config['oneSignal']['active'] == true) { ?>

    <!-- Js OneSignal -->

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

    <script type="text/javascript">

        var OneSignal = window.OneSignal || [];

        OneSignal.push(function() {

            OneSignal.init({

                appId: "<?=$config['oneSignal']['id']?>"

            });

        });

    </script>

<?php } ?>







<!-- Js Structdata -->

<?php include TEMPLATE.LAYOUT."strucdata.php"; ?>



<!-- Js Addons -->

<?=$addons->setAddons('script-main', 'script-main', 0.5);?>

<?=$addons->getAddons();?>



<!-- Js Body -->

<?=htmlspecialchars_decode($setting['bodyjs'])?>







