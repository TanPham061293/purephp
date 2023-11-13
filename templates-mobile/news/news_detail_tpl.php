<div class="pagewrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="_title-dm"><?=$row_detail['ten'] ?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2></h2>
            <div class="_date-post">
                <ul class="list-inline">
                    <li><i class="fas fa-calendar-alt"></i><?=date('d/m/Y', $row_detail['ngaytao']) ?></li>
                    <li><i class="fas fa-eye"></i> <?=$row_detail['luotxem'] ?></li>
                </ul>
            </div>
            <div>
                <?php if($row_detail['noidung'] !='') {?>
                <?=htmlspecialchars_decode($row_detail['noidung']) ?>
                <?php }else{?>
                <div class="alert alert-warning" role="alert">
                    <strong>Nội dung đang cập nhật.</strong>
                </div>
                <?php }?>
            </div>
            <div class="clearfix margin-bottom-10"></div>
            <div class="social-share">
                <b>Chia sẻ:</b>
                <div id="share-buttons"></div>
            </div>
            <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-width="" data-numposts="5"></div>

            <?php if(isset($news) && count($news) > 0){?>
            <div class="grid newdefault">
                <div class="title">Bài viết liên quan</div>
                <ul class="nottype">
                    <?php foreach($news as $k => $v){?>
                    <li><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>">+ <?=$v['ten'] ?></a></li>
                    <?php }?>
                </ul>
            </div>
            <?php }?>
        </div>
    </div>
</div>