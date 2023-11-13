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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 margin-bottom-30" data-aos="fade-down" data-aos-duration="1000">

            <div class="khung_hinhdvcon">
                <figure class="hinhdv">
                    <img width="100%" 
                        onerror="this.src='thumbs/645x861x1/assets/images/noimage.png';"
                        src="<?=THUMBS.'/645x861x1/upload/news/'.$v['photo'] ?>"
                        alt="<?=$v['ten'] ?>" />  
                </figure>
                <div class="name_dv">
                    <h3><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></h3>
                    <p class="mota"><?=htmlspecialchars_decode($v['mota'])?></p>
                </div>
            </div>
        </div>
        <?php } }else{?>
            <div class="alert alert-warning" role="alert">
                <strong>Nội dung đang cập nhật.</strong>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?=isset($paging) ? $paging :''; ?>
        </div>
    </div>
</div>