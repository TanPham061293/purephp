
    <div class="clearfix margin-bottom-10"></div>
    <?php if(isset($splistnb_index_show) && count($splistnb_index_show) > 0) {?>
    <div>
        <div class="slick-slider">
            <?php foreach($splistnb_index_show as $k => $v) {?>
            <div class="hinh_banner">
                <img src="<?=THUMBS.'/300x250x1/upload/product/'.$v['photo'] ?>"
                    onerror="this.src='thumbs/300x250x1/assets/images/noimage.png';" alt="<?=$v['ten'] ?>" />

                <div class="name_banner">
                    <h3><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></h3>
                </div>
            </div>
            <?php }?>

        </div>

    </div>
    <div class="clearfix margin-bottom-10"></div>
    <div class="bg_nhahang">
        <?php foreach($splistnb_index_show as $k => $v){?>
        <div class="_box-content">
            <div class="row">
                <div class="col-xs-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="_title-dm"><?=$v['ten'] ?></div>
                </div>
                <div class="clearfix margin-bottom-20"></div>
                <div data-id="<?=$v['id'] ?>" id="show_<?=$v['id'] ?>"></div>
                <script>
                var id_list = '<?=$v['id'] ?>';
                var url = "ajax/ajax_product_m.php?type=id_list&idList=" + id_list;
                var eshow = '#show_' + id_list;
                loadPaging(url, eshow);
                </script>

            </div>
        </div>
        <div class="clearfix margin-bottom-20"></div>
        <?php }?>
    </div>
    <?php }?>
    <?php if(isset($service_index) && count($service_index) > 0){?>
    <div>
        <h4 class="title">
            <span>Dịch Vụ</span>
        </h4>
        <div class="slick-slider">
            <?php foreach($service_index as $k => $v) {?>
            <div class="khung_hinhdvcon">
                <figure class="hinhdv">
                    <img src="<?=THUMBS.'/280x340x1/upload/news/'.$v['photo'] ?>"
                        onerror="this.src='thumbs/280x340x1/assets/images/noimage.png';" alt="<?=$v['ten'] ?>" />
                </figure>
                <div class="name_dv">
                    <h3><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></h3>
                    <p class="mota"><?=htmlspecialchars_decode($v['mota']) ?></p>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
    <?php }?>
    <div class="clearfix margin-bottom-10"></div>
</div>