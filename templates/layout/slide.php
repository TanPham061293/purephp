<div class="clearfix"></div>
<?php if(isset($slider) && count($slider) > 0) {?>
<div class="_slide">
    <div id="wowslider-container">
        <div class="ws_images">
            <ul>
                <?php foreach($slider as $k => $v) {?>
                <li><a href="<?=$v['link'] ?>" title="Slide"><img width="100%" height="620spx"
                            src="<?=THUMBS.'/1349x620x1/upload/photo/'.$v['photo'] ?>" alt=""
                            onerror="this.src='thumbs/1349x620x1/assets/images/noimage.png';" title="Slide"
                            id="wows_1" /></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }?>