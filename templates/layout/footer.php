<div class="_foot" style="background: url(<?=THUMBS.'/1349x743x1/upload/photo/'.$background_footer ?>);">
    <div class="pagewrap">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="_dmfootchinh">
                    <div class="_dmfoot">Liên hệ với chúng tôi</div>
                    <h4>CÔNG TY TNHH SX TM <?=$setting['tenvi'] ?></h4>
                </div>
                <div class="_add-foot">
                    <?php if(isset($footer) && $footer['noidung'] !=''){?>
                    <?=htmlspecialchars_decode($footer['noidung']) ?>
                    <?php }else{?>
                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_dc.png"
                                        style="width: 30px; height: 30px;" /><?=$optsetting['diachi'] ?></span></span></span>
                    </p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" />&nbsp;Hotline: <?=$optsetting['hotline'] ?>
                                    - <?=$optsetting['dienthoai'] ?></span></span></span></p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" /><?=$optsetting['zalo'] ?>
                                    (Zalo)</span></span></span></p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_mail.png"
                                        style="width: 30px; height: 30px;" />&nbsp;Email:
                                    <?=$optsetting['email'] ?></span></span></span></p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_webiste.png"
                                        style="width: 30px; height: 30px;" />&nbsp;Website: <strong><a
                                            href="index.html"><span
                                                style="color:null;"><?=$optsetting['website'] ?></span></a></strong></span></span></span>
                    </p>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 padding-right-0 padding-left-0">
                <div class="_dmfoot">Fanpage - Facebook</div>
                <?=$addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10);?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-left-60">
                <div class="_dmfoot">Bản đồ</div>
                <div class="khung_map">
                    <?=htmlspecialchars_decode($optsetting['toado_iframe']) ?>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="_bgcpr">
    <div class="pagewrap">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <!-- <div class="_copyright">Copyright © 2020 <?=$setting['tenvi'] ?>. </div> -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <div class="_thongke">
                    <ul class="list-inline margin-bottom-0">
                        <li>Online: <?=$online ?></li>
                        <li>Truy cập tháng: <?=$counter['month'] ?></li>
                        <li>Tổng: <?=$counter['total'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="call-now-button ui-draggable ui-draggable-handle" id="draggable">
    <div>
        <a href="tel:<?=($optsetting['dienthoai'] !='') ? $optsetting['dienthoai'] : $optsetting['hotline'] ?>"
            id="quickcallbutton" title="Call Now">
            <div class="quick-alo-ph-circle active"></div>
            <div class="quick-alo-ph-circle-fill active"></div>
            <div class="quick-alo-phone-img-circle shake"></div>
        </a>
    </div>
</div>

<!-- <div class="fb-livechat"> -->
<div id="messages-facebook"><?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?></div>
<!-- </div> -->
<div class="chat_zalo">
    <a href="https://zalo.me/<?=$optsetting['zalo'] ?>" target="_blank"><img src="assets/images/zalo.png" width="60px"
            alt="zalo"></a>
</div>

<div class="modal " id="myCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Giỏ Hàng Của Bạn</h4>
            </div>
            <div id="cartResult">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="_cartheader">
    <a class="_iconcart"  href="javascript:addCart_Qty();">
        <img src="assets/images/iconcart.png" alt="Giỏ hàng"><span class="_count"><?=$cart->get_quanty_total() ?></span>
    </a>
</div>