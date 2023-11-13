<div class="pagewrap">
    <div class="row">
        <div class="col-md-12">
        <?php include TEMPLATE.LAYOUT.'breadcrumb.php'?>
            <div class="clearfix margin-bottom-20"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
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