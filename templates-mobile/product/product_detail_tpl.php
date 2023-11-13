<div class="_box-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="_title-dm"><?=$row_detail['ten']?></div>
        </div>
    </div>
    <div class="clearfix margin-bottom-20"></div>
    <div class="row">
        <div class="col-xs-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <div class="_boxviews">
                <div class="product_info_vote">
                    <div>
                        <div class="rating-container rating-xs rating-animate">
                            <div class="clear-rating clear-rating-active" title="Clear"><i
                                    class="glyphicon glyphicon-minus-sign"></i></div>
                            <div class="rating-stars" title="0 đánh giá"><span class="empty-stars"><span class="star"><i
                                            class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                    class="filled-stars" style="width: 0%;"><span class="star"><i
                                            class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                            class="glyphicon glyphicon-star"></i></span></span><input type="text"
                                    id="myrating" class="rating-input" name="rating" value="0"
                                    data-krajee-rating="rating_cf48fae8"></div>
                            <div class="caption"><span class="label label-default badge-secondary">0 đánh giá</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_views"><i class="fas fa-eye"></i> <?=$row_detail['luotxem']?></div>
            </div>
            <div class="clearfix margin-bottom-10"></div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" data-aos="fade-right" data-aos-duration="1000"> -->
            <div style="border: thin #ebebeb solid;">
                <a href="<?=THUMBS.'/700x647x1/upload/product/'.$row_detail['photo'] ?>" class="MagicZoom"
                    id="Zoomer"><img id="product_image_7"
                        src="<?=THUMBS.'/700x647x1/upload/product/'.$row_detail['photo'] ?>"></a>
                <div style="padding-top: 5px;" class="owl-carousel owl-theme owl-carousel6 text-center">
                    <?php if(isset($hinhanhsp) && count($hinhanhsp) > 0){
                                    foreach($hinhanhsp as $k => $v){?>
                    <div class="item_owl_sub">
                        <a href="<?=THUMBS?>/700x647x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" rel="zoom-id: Zoomer"
                            data-zoom-id="Zoomer" rev="<?=THUMBS.'/700x647x1/upload/product/'.$v['photo'] ?>">
                            <img src="<?=THUMBS.'/130x110x1/upload/product/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/130x110x1/assets/images/noimage.png';" class="w100"
                                alt="<?=$v['ten'] ?>" />
                        </a>
                    </div>
                    <?php } }?>
                </div>
            </div>
            <!-- </div> -->
            <div style="padding-top: 5px;" class="_slick6 text-center slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track" role="listbox"
                        style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                </div>
            </div>
        </div>
        <div class="clearfix margin-bottom-20"></div>
        <div class="col-xs-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <hr style="margin: 10px 0;">
            <div>
                <div class="_price-km-detail">
                    <?=($row_detail['gia'] != 0) ? number_format($row_detail['gia']) .' đ' : 'Liên hệ' ?></div>
            </div>
            <hr style="margin: 10px 0;">
            <div class="_option-pr">
                <span><i class="fas fa-check-circle"></i>Đơn vị tính: </span>Kg
            </div>
            <div class="clearfix margin-bottom-10"></div>
            <div>
                <div id="qtySelector" class="quantity-col1">
                    <p class="quantity-label">Số lượng:</p>
                    <p class="tiki-number-input">
                    </p>
                    <div class="input-group bootstrap-touchspin">
                        <span class="input-group-btn">
                            <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                        </span>
                        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                        <input id="qty" type="tel" name="qty" value="1" min="1" class="form-control"
                            style="display: block;">
                        <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                        <span class="input-group-btn">
                            <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                        </span>
                    </div>
                    <p></p>
                </div>
                <div class="product-actions">
                    <button type="button" onclick="addCart_Qty(<?=$row_detail['id'] ?>)" class="btnAddToCart">MUA
                        NGAY</button>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div>
                <!--noindex-->
                <div class="social-share">
                    <b>Chia sẻ:</b>
                    <div id="share-buttons"></div>
                </div>
                <!--/noindex-->
            </div>
        </div>
    </div>
    <div class="clearfix margin-bottom-30"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="_mytab-detail">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#content" role="tab" data-toggle="tab">Chi Tiết Sản Phẩm</a></li>
                    <li><a href="#comment" role="tab" data-toggle="tab">Bình Luận</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="content">
                        <?=htmlspecialchars_decode($row_detail['noidung']) ?></div>
                    <div class="tab-pane fade" id="comment">
                    <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-width="" data-numposts="5"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($product) && count($product) > 0){?>
    <div style="padding: 15px;">
        <h3><i class="fab fa-product-hunt"></i> Sản phẩm tương tự</h3>
    </div>
    <div class="padding-left-10 padding-right-10">
        <div class="row">
            <?php  $stt = 1;
            foreach($product as $k => $v){?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 margin-bottom-10" style="padding: 5px;">
                <div class="_boxpr">
                    <div class="_imgsp">
                        <a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><img
                                src="<?=THUMBS.'/263x250x1/upload/product/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/263x250x1/assets/images/noimage.png';"
                                alt="<?=$v['ten'] ?>" /></a>
                    </div>
                    <div class="_boxname">
                        <div class="_namepr text-center"><a href="<?=$v['tenkhongdauvi'] ?>"
                                title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a>
                        </div>
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
            $stt++; }?>
        </div>
    </div>
    <?php }?>
</div>