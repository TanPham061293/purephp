<div class="clearfix margin-bottom-30"></div>
<div class="pagewrap">
    <div class="row">
        <div class="col-md-12">
            <?php include TEMPLATE.LAYOUT.'breadcrumb.php'?>
            <div class="clearfix margin-bottom-30"></div>
        </div>
    </div>

    <form id="customers-form" action="" novalidate method="post" class="validation-cart">
        <input type="hidden" name="_csrf-frontend"
            value="ToIIGEJrkv6vElhUwNrEfoYoDsVGnT7AZLyPsJ087Wx52lB7AzvosZ95FBvw7P0PwGVvkyipf6024-LV03CoHg==">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInLeft">
                <div class="form-group field-customers-name required">
                    <label class="control-label" for="customers-name">Họ &amp; tên</label>
                    <input type="text" id="customers-name" class="form-control" name="ten" maxlength="255"
                        required>
                    <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group field-customers-email">
                    <label class="control-label" for="customers-email">E-mail</label>
                    <input type="text" id="customers-email" class="form-control" name="email"
                        maxlength="255" required>
                        <div class="invalid-feedback">Vui lòng nhập vào địa chỉ Email.</div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group field-customers-phone required">
                    <label class="control-label" for="customers-phone">Điện thoại</label>
                    <input type="text" id="customers-phone" class="form-control" name="dienthoai" maxlength="255"
                        required>
                        <div class="invalid-feedback">Vui lòng nhập vào số điện thoại.</div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group field-customers-address required">
                    <label class="control-label" for="customers-address">Địa chỉ nhận hàng</label>
                    <input type="text" id="customers-address" class="form-control" name="diachi" required>
                    <div class="invalid-feedback">Vui lòng nhập vào địa chỉ nhận hàng.</div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group field-customers-body">
                    <label class="control-label" for="customers-body">Ghi chú đơn hàng</label>
                    <textarea id="customers-body" class="form-control" name="ghichu" rows="2"></textarea>
                    <div class="invalid-feedback">Vui lòng nhập vào ghi chú đơn hàng.</div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group">
                    <input type="hidden" name ="thanhtoan">
                    <button type="submit" class="btn btn-primary">Gửi đơn hàng</button>
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow fadeInRight"
                style="visibility: visible; animation-name: fadeInRight;">
                <div class="_load">
                <?php if(isset($product_order) && count($product_order) > 0) {?>
                    <div class="_boxdh">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="active">
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $total_q = 0;
                    $total_price = 0;
                    foreach($product_order as $k => $v) {?>
                                    <tr>
                                        <td><img src="<?=THUMBS.'/700x647x1/upload/product/'.$v['photo'] ?>" width="50"
                                                onerror="this.src='thumbs/700x647x1/assets/images/noimage.png';"
                                                alt="<?=$v['tenvi'] ?>"></td>
                                        <td><strong><?=$v['tenvi'] ?></strong></td>
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
                                        <td><?=$Qty ?></td>
                                        <td><?=number_format($gia)  ;?></td>
                                        <td><?=number_format($thanhtien) ;?></td>
                                    </tr>
                                    <?php }?>
                                    <tr class="active">
                                        <td></td>
                                        <td colspan="2"><strong>Tổng số:</strong></td>
                                        <td colspan="2"><strong><?=$total_q ?></strong></td>
                                    </tr>
                                    <tr class="active">
                                        <td></td>
                                        <td colspan="2"><strong>Tổng tiền:</strong></td>
                                        <td colspan="2"><strong><?=number_format($total_price) ?> vnđ</strong></td>
                                    </tr>
                            </table>
                        </div>
                        <div class="clearfix margin-bottom-20"></div>
                        <div class="text-right">
                            <ul class="list-inline">
                                <li><a class="btn btn-primary" href="javascript:addCart_Qty()">Chỉnh sửa đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }else {?>
                
                    <div class="_boxdh">
                        <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                    </div>
                
                <?php }?>
            </div>
            
        </div>
    </form>
</div>
<style>
._slide {
    display: none;
}
</style>