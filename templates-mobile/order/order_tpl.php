<div class="pagewrap">
    <div class="_box-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="_title-dm">Giỏ hàng</div>
            </div>
        </div>
        <div class="clearfix margin-bottom-20"></div>
        <form id="customers-form" novalidate action="order" method="post" class="validation-cart">
            <input type="hidden" name="_csrf-frontend"
                value="6pFZ6qwhmYnmQ-Y-YVPolRzy1TR5akx4fnVYDlNRhpmM4juj6072578bpVY7CoTmc8LkYxofKBkzLylCYGG3zw==">
            <div class="row">
                <div class="col-xs-12 wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="form-group field-customers-name required">
                        <label class="control-label" for="customers-name">Họ &amp; tên</label>
                        <input type="text" id="customers-name" class="form-control" name="Customers[name]"
                            maxlength="255" required>
                            <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-email">
                        <label class="control-label" for="customers-email">E-mail</label>
                        <input type="text" id="customers-email" class="form-control" name="Customers[email]"
                            maxlength="255" required>
                            <div class="invalid-feedback">Vui lòng nhập vào địa chỉ Email.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-phone required">
                        <label class="control-label" for="customers-phone">Điện thoại</label>
                        <input type="text" id="customers-phone" class="form-control" name="Customers[phone]"
                            maxlength="255" required>
                            <div class="invalid-feedback">Vui lòng nhập vào số điện thoại.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-address required">
                        <label class="control-label" for="customers-address">Địa chỉ nhận hàng</label>
                        <input type="text" id="customers-address" class="form-control" name="Customers[address]"
                        required>
                            <div class="invalid-feedback">Vui lòng nhập vào địa chỉ nhận hàng.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-customers-body">
                        <label class="control-label" for="customers-body">Ghi chú đơn hàng</label>
                        <textarea id="customers-body" class="form-control" name="Customers[body]" rows="3"></textarea>
                        <div class="invalid-feedback">Vui lòng nhập vào ghi chú đơn hàng.</div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name ="thanhtoan">
                        <button type="submit" class="btn _btnblack">Gửi đơn hàng</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="clearfix margin-bottom-30"></div>

        <div class="_load">
            <?php if(isset($product_order) && count($product_order) > 0) {?>
            <div class="_boxdh">
                <div class="row">
                    <?php 
                    $total_q = 0;
                    $total_price = 0;
                    foreach($product_order as $k => $v) {?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-left-0">
                        <div><img src="<?=THUMBS.'/700x647x1/upload/product/'.$v['photo'] ?>"
                                onerror="this.src='thumbs/700x647x1/assets/images/noimage.png';" alt="<?=$v['tenvi'] ?>"
                                style="width: 100%;"></div>
                    </div>
                    <?php 
                            $Qty =1;
                            foreach($_SESSION['cart'] as $k1 => $v1){
                                if($v1['productid'] == $v['id']){
                                    $Qty =$v1['qty'];
                                    $gia = ($v['giamoi'] != 0) ? $v['giamoi'] : $v['gia'];
                                    $thanhtien = $Qty * $gia;
                                    $total_q += $Qty;
                                    $total_price +=$thanhtien;
                                }
                            }
                            ?>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padding-left-0">
                        <div><strong><?=$v['tenvi'] ?></strong></div>
                        <div>Số lượng: <strong><?=$Qty ?></strong></div>
                        <div>Đơn giá: <strong><?=number_format($gia)  ;?></strong></div>
                        <div>Thành tiền: <strong><?=number_format($thanhtien) ;?></strong></div>
                    </div>
                    <div class="clearfix margin-bottom-10"></div>
                    <?php }?>
                    <div class="col-md-12">
                        <div>
                            <div><strong>Tổng số: <?=$total_q ?></strong></div>
                        </div>
                        <div>
                            <div><strong>Tổng tiền: <?=number_format($total_price) ?> vnđ</strong></div>
                        </div>
                    </div>
                    <div class="clearfix margin-bottom-20"></div>
                    <div class="col-md-12">
                        <div class="text-right">
                            <ul class="list-inline">
                                <li><a class="btn _btngray" href="javascript:addCart_Qty()">Chỉnh sửa đơn hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else {?>s
            <div class="col-md-12">
                <div class="_boxdh">
                    <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
</div>