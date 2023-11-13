<div class="pagewrap">
    <div class="_box-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="_title-dm">Dịch Vụ</div>
            </div>
        </div>
        <div class="clearfix margin-bottom-20"></div>
        <?php if(isset($news) && count($news) > 0){
            foreach($news as $k => $v){?>
        <div class="row wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-xs-5 padding-right-0">
                <div><a href="<?=$v['tenkhongdauvi'] ?>"
                            title="<?=$v['ten'] ?>"><img class="lazy"
                                src="<?=THUMBS.'/235x285x1/upload/news/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/235x285x1/assets/images/noimage.png';"
                                alt="<?=$v['ten'] ?>"
                                data-original="<?=UPLOAD_NEWS_L.$v['photo'] ?>"></a></div>
            </div>
            <div class="col-xs-7">
                <div class="_namett-detail"><a href="<?=$v['tenkhongdauvi'] ?>"
                            title="<?=$v['ten'] ?>">
                            <h2><?=$v['ten'] ?></h2>
                        </a></div>
                        <div class="text-justify mota"><?=htmlspecialchars_decode($v['mota']) ?></div>

            </div>
        </div>
        <div class="clearfix margin-bottom-10"></div>
        <?php } }else{?>
            <div class="alert alert-warning" role="alert">
                <strong>Nội dung đang cập nhật.</strong>
            </div>
        <?php }?>
        <div class="row">
            <div class="col-md-12 text-right">
            <?=isset($paging) ? $paging :''; ?>
            </div>
        </div>
    </div>
</div>