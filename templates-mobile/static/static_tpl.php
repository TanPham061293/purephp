<div class="_box-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="_title-dm"><?=$title_crumb ?></div>
        </div>
    </div>
    <div class="clearfix margin-bottom-20"></div>
    <div class="row">
        <div class="col-xs-12">
            <div>
                <?php if(isset($static) && $static['noidungvi'] !=''){?>
                <?=htmlspecialchars_decode($static['noidungvi']); ?>
                <?php }else{?>
                <div class="alert alert-warning" role="alert">
                    <strong>Nội dung đang cập nhật.</strong>
                </div>
                <?php }?>
            </div>
            <div class="clearfix margin-bottom-10"></div>
            <!--noindex-->
            <div class="social-share">
                <b>Chia sẻ:</b>
                <div id="share-buttons"></div>
            </div>
            <!--/noindex-->
            <div class="clearfix margin-bottom-10"></div>
            <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-width="" data-numposts="5"></div>

        </div>
    </div>
</div>