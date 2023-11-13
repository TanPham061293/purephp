<div class="site-index">
    <?php if(isset($about_index) && $about_index['noidung'] != ''){?>
    <div class="_pageOn">
        <div class="pagewrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="hinh_gt">
                        <img src="<?=THUMBS.'/617x430x1/upload/news/'.$about_index['photo'] ?>"
                            onerror="this.src='thumbs/617x430x1/assets/images/noimage.png';" alt="Giới Thiệu" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="_bg-pageOne">
                        <div>
                            <div class="_box-namePage">
                                <div class="nametitle"><?=$about_index['ten'] ?></div>
                            </div>
                            <div class="_desPage">
                                <?php 
                                $arr_about = explode("\n",htmlspecialchars_decode($about_index['noidung']));
                                $html_about = array_slice($arr_about,0,5);
                                for($i=0 ; $i < count($html_about); $i++){?>
                                <?=htmlspecialchars_decode($html_about[$i]) ?>
                                <?php }?>
                            </div>
                            <div class="xemthem"><a href="gioi-thieu">Xem thêm >></a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if(isset($splistnb_index_show) && count($splistnb_index_show) > 0) {?>
    <div class="margin-bottom-30"></div>
    <div class="khung_banne">
        <div class="pagewrap">
            <div class="owl-carousel owl-theme owl-carousel3-brands">
                <?php foreach($splistnb_index_show as $k => $v) {?>
                <div class="hinh_banner">
                    <img src="<?=THUMBS.'/450x450x1/upload/product/'.$v['photo'] ?>"
                        onerror="this.src='thumbs/450x450x1/assets/images/noimage.png';" alt="<?=$v['ten'] ?>" />
                    <div class="name_banner">
                        <h3><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></h3>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="khung_trangchu">
        <div class="pagewrap">
            <?php foreach($splistnb_index_show as $k => $v){?>
            <div class="_box-content">
                <div class="row">
                    <div class="col-xs-12 wow fadeInDown">
                        <div class="_title-dm text-center">
                            <h3><a href="<?=$v['tenkhongdauvi'] ?>"><?=$v['ten'] ?></a></h3>
                            <p> "<?=$setting['title_desct1vi'] ?>". </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix margin-bottom-10"></div>
                <div data-id="<?=$v['id'] ?>" id="show_<?=$v['id'] ?>" class="owl-carousel owl-theme owl-carousel4-brands"></div>
                <script>
                    var id_list = '<?=$v['id'] ?>';
                    var url = "ajax/ajax_product.php?type=id_list&idList="+id_list;
                    var eshow = '#show_'+id_list;
                    loadPaging(url,eshow);
                </script>
            </div>
            <div class="clearfix margin-bottom-20"></div>
            <?php }?>

        </div>
    </div>
    <?php }?>
    <?php if(isset($service_index) && count($service_index) > 0){?>
    <div class="khung_tintuc"
        style="background: url(<?=THUMBS.'/1349x743x1/upload/photo/'.$background_dichvu ?>) no-repeat; background-size: 100% 100%;">
        <div class="pagewrap">
            <div class="title_ykien">
                <h2>Dịch Vụ</h2>
                <h3><?=$setting['tenvi'] ?></h3>
                <p></p>
            </div>
            <div class="owl-carousel owl-theme owl-carousel3-brands">
                <?php foreach($service_index as $k => $v) {?>
                <div class="khung_hinhdvcon">
                    <figure class="hinhdv">
                        <img src="<?=THUMBS.'/645x861x1/upload/news/'.$v['photo'] ?>" 
                        onerror="this.src='thumbs/645x861x1/assets/images/noimage.png';"
                        alt="<?=$v['ten'] ?>" />
                    </figure>
                    <div class="khungviendv">
                        <div class="name_dv">
                            <img src="<?=THUMBS.'/53x48x1/upload/news/'.$v['photo1'] ?>" 
                            onerror="this.src='thumbs/53x48x1/assets/images/noimage.png';"
                            alt="<?=$v['ten'] ?>" />
                            <h3><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></h3>
                            <p><?=htmlspecialchars_decode($v['mota']) ?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </div>
    <?php }?>
    
</div>