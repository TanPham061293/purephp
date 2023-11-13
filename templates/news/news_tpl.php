<div class="pagewrap">
    <div class="row">
        <div class="col-md-12">
        <?php include TEMPLATE.LAYOUT.'breadcrumb.php'?>
            <div class="clearfix margin-bottom-30"></div>
        </div>
    </div>
    <div class="row">
    <?php if(isset($news) && count($news) > 0){
        foreach($news as $k => $v){?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-0 padding-right-0 margin-bottom-30"
            data-aos="fade-down" data-aos-duration="1000">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-right-0">
                    <div><a href="<?=$v['tenkhongdauvi'] ?>"
                            title="<?=$v['ten'] ?>"><img class="lazy"
                                src="<?=THUMBS.'/190x137x1/upload/news/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/190x137x1/assets/images/noimage.png';"
                                alt="<?=$v['ten'] ?>"
                                data-original="<?=UPLOAD_NEWS_L.$v['photo'] ?>"></a></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="_namett-detail"><a href="<?=$v['tenkhongdauvi'] ?>"
                            title="<?=$v['ten'] ?>">
                            <h2><?=$v['ten'] ?></h2>
                        </a></div>
                    <div class="text-justify mota"><?=htmlspecialchars_decode($v['mota']) ?></div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
            <div class="alert alert-warning" role="alert">
                <strong>Nội dung đang cập nhật.</strong>
            </div>
        <?php }?> 
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?=(isset($paging)) ? $paging :''; ?>
        </div>
    </div>
</div>