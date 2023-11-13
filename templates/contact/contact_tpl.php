<div class="pagewrap">
    <div class="row">
        <div class="col-md-12">
            <?php include TEMPLATE.LAYOUT.'breadcrumb.php'?>
            <div class="clearfix margin-bottom-30"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 wow fadeInLeft">
            <div class="_box-add-contact">
                <?php if(isset($lienhe) && $lienhe['noidungvi'] != ''){?>
                <?=htmlspecialchars_decode($lienhe['noidungvi']) ?>
                <?php }else{?>
                <div>
                    <h2><?=$setting['tenvi'] ?></h2>
                </div>
                <div>
                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_dc.png"
                                        style="width: 30px; height: 30px;" /><?=$optsetting['diachi'] ?></span></span></span>
                    </p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" />&nbsp;Hotline: <?=$optsetting['hotline'] ?>
                                    &ndash;&nbsp;<?=$optsetting['dienthoai'] ?></span></span></span></p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" />Đặt hàng:
                                    <?=$optsetting['zalo'] ?>&nbsp;(Zalo)</span></span></span></p>

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

                </div>
                <?php }?>
            </div>
            <div class="clearfix margin-bottom-20"></div>
            <div id="googleMap"> <?=htmlspecialchars_decode($optsetting['toado_iframe']) ?></div>
            <div class="clearfix margin-bottom-15"></div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 wow fadeInRight">
            <form id="contact-form" action="lien-he" novalidate method="post" class="validation-contact">

                <div class="form-group field-contactform-name required">
                    <label class="control-label" for="contactform-name">Họ &amp; tên</label>
                    <input type="text" id="contactform-name" class="form-control" name="ten" required>
                    <div class="invalid-feedback">Vui lòng nhập vào họ tên.</div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-email required">
                    <label class="control-label" for="contactform-email">Địa chỉ E-mail</label>
                    <input type="text" id="contactform-email" class="form-control" name="email" required>
                    <div class="invalid-feedback">Vui lòng nhập vào địa chỉ Email.</div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-phone required">
                    <label class="control-label" for="contactform-phone">Số điện thoại</label>
                    <input type="text" id="contactform-phone" class="form-control" name="dienthoai" required>
                    <div class="invalid-feedback">Vui lòng nhập vào Số điện thoại.</div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-subject required">
                    <label class="control-label" for="contactform-subject">Tiêu đề</label>
                    <input type="text" id="contactform-subject" class="form-control" name="tieude" required>
                    <div class="invalid-feedback">Vui lòng nhập vào tiêu đề.</div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-body required">
                    <label class="control-label" for="contactform-body">Nội dung</label>
                    <textarea id="contactform-body" class="form-control" name="noidung" rows="6" required></textarea>
                    <div class="invalid-feedback">Vui lòng nhập vào nội dung.</div>
                    <p class="help-block help-block-error"></p>
                </div>
                <div class="form-group field-contactform-verifycode">
                    <label class="control-label" for="contactform-verifycode">Mã bảo vệ</label>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-0">
                            <input type="text" id="contactform-verifycode" class="form-control" name="verifyCode" required></div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-right-0">
                            <div class="load_captcha" onclick="load_captcha()">
                                <input type="text" class="captcha" name="res_captcha"
                                    value="<?=$func->random_string(6)?>" readonly>

                              
                                <a style="display: inline;" href="javascript:;" id="fox"><i
                                        class="fas fa-sync-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback">Vui lòng nhập vào mã bảo vệ.</div>
                    <p class="help-block help-block-error">Mã bảo vệ không chính xác.</p>
                </div>
                <!-- ================ -->

                <!-- =============== -->


                <div class="form-group">
                    <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    <?php  $cap = $_SESSION['captcha'] ;?>
                    <button type="submit" class="btn btn-primary" name="submit-contact" onclick="check_captcha('<?=$cap ?>')">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>