<div class="pagewrap">
    <div class="_bgheader">
        <div class="row">
            <div class="col-xs-2 padding-right-0">
                <span id="hamburger" class="mm-sticky">
                    <a href="#menu" class="mburger mburger--tornado">
                        <b></b>
                        <b></b>
                        <b></b>
                    </a>
                </span>
            </div>
            <div class="col-xs-8 padding-left-5 padding-right-5">
                <form class="_frmsearch" action="tim-kiem" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" value=""
                            placeholder="Bạn tìm gì hôm nay?" onkeypress="doEnter('event','keyword')"> <span
                            class="input-group-btn">
                            <button type="submit" class="btn _btnsearch" onclick="onSearch('keyword')"><img
                                    src="assets/images/iconsearch.png" alt="iconsearch"></button> </span>
                    </div>
                </form>
            </div>
            <div class="col-xs-2 padding-left-0">
                <div class="_cartheader">
                    <a class="_iconcart" href="javascript:addCart_Qty();">
                        <img src="assets/images/iconcart.png" alt="Giỏ hàng"> <span class="_count"><?=$cart->get_quanty_total() ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="_banner">
        <div class="row">
            <div class="col-xs-12 text-center padding-left-0 padding-right-0">
                <div class="_logo">
                    <div><a href=""><img src="<?=THUMBS.'/146x163x1/upload/photo/'.$logo['photo'] ?>"
                                onerror="this.src='thumbs/146x163x1/assets/images/noimage.png';" alt="logo"
                                style="max-width:100%;"></a></div>
                </div>

            </div>
        </div>
    </div>
    
</div>
<nav id="menu">

        <ul>
            <li>
                <a class="_active-home <?=($com =='' || $com =='index') ?"current" :''; ?>" href="index" title="Trang chủ">
                   Trang chủ
                </a>
            </li>
            <li>
                <a class="<?=($com =='gioi-thieu') ?"current" :''; ?>" href="gioi-thieu" title="Giới Thiệu">
                    Giới Thiệu
                </a>
            </li>
            <li>
                <a href="san-pham" title="Sản phẩm" class="<?=($com =='san-pham') ?"current" :''; ?>">
                    Sản phẩm </a>
                <?php if(isset($splistmenu) && count($splistmenu) > 0){?>
                <div class="grid-container2">
                    <ul>
                        <?php foreach($splistmenu as $k => $v){?>
                        <li>
                            <a class="" href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>">
                                <?=$v['ten'] ?>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php }?>
            </li>
            <li>
                <a href="dich-vu" title="Dịch Vụ" class="<?=($com =='dich-vu') ?"current" :''; ?>">
                    Dịch Vụ </a>
                <?php if(isset($splistmenu_service) && count($splistmenu_service) > 0){?>
                <div class="grid-container2">
                    <ul>
                        <?php foreach($splistmenu_service as $k=> $v){?>
                        <li>
                            <a class="" href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>">
                                <?=$v['ten'] ?>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php }?>
            </li>
            <li>
                <a class="<?=($com =='tin-tuc') ?"current" :''; ?>" href="tin-tuc" title="Tin tức & sự kiện">
                    Tin tức & sự kiện
                </a>
            </li>
            <li>
                <a class="<?=($com =='lien-he') ?"current" :''; ?>" href="lien-he" title="Liên hệ">
                    Liên hệ
                </a>
            </li>
        </ul>

    </nav>