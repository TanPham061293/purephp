<div class="_box-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="_title-dm"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
        </div>
    </div>
    <div class="clearfix margin-bottom-20"></div>
    <div class="padding-left-10 padding-right-10">
        <div class="row">
            <?php if(isset($product) && count($product) > 0) {
                $stt = 1;
                foreach( $product as $k => $v){?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInDown margin-bottom-10" style="padding: 5px;">
                <div class="_boxpr">
                    <div class="_imgsp">
                        <a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><img
                                src="<?=THUMBS.'/263x250x1/upload/product/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/263x250x1/assets/images/noimage.png';"
                                alt="<?=$v['ten'] ?>" /></a>
                    </div>
                    <div class="_boxname">
                        <div class="_namepr text-center"><a href="<?=$v['tenkhongdauvi'] ?>"
                                title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></div>
                        <div class="text-center">
                            <div class="_pricekm">Giá:
                                <?=($v['gia'] != 0) ? number_format($v['gia']) .' đ' : '<a href="lien-he" title="Liên hệ">Liên hệ</a>';?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            if($stt % 2 == 0){
                echo '<div class="clearfix margin-bottom-20"></div>';
            }
            $stt++;
            } }else{?>
            <?php if($com !='tim-kiem') {?>
            <div class="alert alert-warning" role="alert">
                <strong>Nội dung đang cập nhật.</strong>
            </div>
            <?php }else{?>
            <div class="alert alert-warning" role="alert">
                <strong>Không tìm thấy kết quả.</strong>
            </div>
            <?php } }?>
            <div class="clearfix"></div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?=(isset($paging)) ? $paging :'';?>
        </div>
    </div>
</div>