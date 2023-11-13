<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=1879502379031804&autoLogAppEvents=1"></script>
<h1 style="display: none;"><?=$setting['tenvi'] ?></h1>
<div class="header1">
    <div class="pagewrap">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 padding-left-50">
                <div class="diachi"><i class="fas fa-map-marker-alt"></i> <?=$optsetting['diachi'] ?></div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-left-0" data-aos="fade-right"
                data-aos-duration="1500">
                <div class="diachi"><i class="far fa-envelope"></i> <?=$optsetting['email'] ?></div>
            </div>
            <?php if(isset($social) && count($social) > 0){?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right" data-aos="fade-left" data-aos-duration="1500">
                
            </div>
            <?php }?>
        </div>
    </div>
</div>

