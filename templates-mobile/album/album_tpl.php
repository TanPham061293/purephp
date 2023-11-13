<div class="title-main"><span><?=$title_crumb?></span></div>
<div class="content-main justify-content-start">
    <?php if(count($product)>0) { for($i=0;$i<count($product);$i++) { ?>
        <div class="album " >
            <p class="pic-album scale-img">
                <a class="text-decoration-none" href="<?=$product[$i][$sluglang]?>" title="<?=$product[$i]['ten']?>" >
                    <img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="<?=THUMBS?>/480x360x1/<?=UPLOAD_PRODUCT_L.$product[$i]['photo']?>" alt="<?=$product[$i]['ten']?>"/>
                </a>
            </p>
            <h3 class="name-album text-split"><?=$product[$i]['ten']?></h3>
        </div>
    <?php } } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>