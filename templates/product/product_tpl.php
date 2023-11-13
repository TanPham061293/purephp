
<div class="pagewrap">
    <div class="row">
        <div class="col-md-12">
        <?php include TEMPLATE.LAYOUT.'breadcrumb.php'?>
            <div class="clearfix margin-bottom-20"></div>
        </div>
    </div>
    <div style="padding: 0 5px;">
        <div class="row">
            <?php if(isset($product) && count($product) > 0) {
                $stt = 0;
                foreach( $product as $k => $v){?>
            <div class="col-xs-3 text-center wow fadeInDown">
                <div class="_boxpr">
                    <?php if(isset($icon) && count($icon) > 0){
                    foreach($icon as $k1 => $v1){
                    if($v1['ten'] == 'product'){?>
                    <div class="icon_la">
                        <img src="<?=THUMBS.'/55x59x1/upload/photo/'.$v1['photo'] ?>" alt="<?=$v1['ten'] ?>">
                    </div>
                    <?php } } }?>
                    <div class="_imgsp">
                        <a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><img
                                src="<?=THUMBS.'/263x250x1/upload/product/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/263x250x1/assets/images/noimage.png';"
                                alt="<?=$v['ten'] ?>" /></a>
                    </div>
                    <div class="_box-price">
                        <div class="_namepr"><a href="<?=$v['tenkhongdauvi'] ?>"
                                title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></div>
                        <div class="_pricekm">Giá: <?=($v['gia'] != 0) ? number_format($v['gia']) .' đ' : '<a href="lien-he" title="Liên hệ">Liên hệ</a>';?></div>
                    </div>
                </div>
            </div>
            <?php 
            if($stt % 4 == 3){
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <?=(isset($paging)) ? $paging :'';?>
        </div>
    </div>
</div>