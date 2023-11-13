<?php 

	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
    
	$code ='';
    $id = (isset($_POST['id']) && $_POST['id'] > 0) ? htmlspecialchars($_POST['id']) : 0;
	$Qty = (isset($_POST['qty']) && $_POST['qty'] !='') ? htmlspecialchars($_POST['qty']) : '1';
	$code = md5($id);
    if($Qty < 1){
        $Qty = 1;
    }
    $cart->updatecart($id,$Qty);
    $product_order = $cart->get_product_id();  
	
?>
<?php if(isset($product_order) && count($product_order) > 0) {?>
<div class="modal-body">

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="active">
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
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
                            <td><a class="text-success" onclick="cartChange(<?=$v['id'] ?>, <?=($Qty -1) ?>);"
                                    href="javascript:;" title="Giảm số lượng"><i style="font-size: 16px;"
                                        class="fas fa-minus-square"></i></a> <?=$Qty ?> <a class="text-success"
                                    onclick="cartChange(<?=$v['id'] ?>, <?=($Qty + 1) ?>);" href="javascript:;"
                                    title="Thêm số lượng"><i style="font-size: 16px;"
                                        class="fas fa-plus-square"></i></a></td>
                            <td><?=number_format($gia)  ;?></td>
                            <td><?=number_format($thanhtien) ;?></td>
                            <td><a class="text-danger" onclick="cartRemove(<?=$v['id'] ?>);" href="javascript:;"><i
                                        style="font-size: 16px;" class="fas fa-times-circle"></i></a></td>
                        </tr>
                        <?php }?>
                        <tr class="active">
                            <td colspan="2"></td>
                            <td colspan="2"><strong>Tổng số:</strong></td>
                            <td colspan="2"><strong><?=$total_q ?></strong></td>
                        </tr>
                        <tr class="active">
                            <td colspan="2"></td>
                            <td colspan="2"><strong>Tổng tiền:</strong></td>
                            <td colspan="2"><strong><?=number_format($total_price)  ?> vnđ</strong></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <div class="text-right">
        <ul class="list-inline">
            <li><a class="btn _btngray" href="" data-dismiss="modal">Tiếp tục mua hàng</a>
            </li>
            <li><a class="btn _btnblack" href="order">Tiến hành thanh toán</a></li>
        </ul>
    </div>
</div>
<?php }else {?>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <h3>Không có sản phẩm nào trong giỏ hàng</h3>
        </div>
    </div>
</div>
<?php }?>