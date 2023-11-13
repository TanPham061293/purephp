<div class="menu-res">

    <div class="menu-bar-res">

        <a id="hamburger" href="#menu" title="Menu"><span></span></a>

        <div class="search-res">

            <div class="search-grid ">

                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>"
                    onkeypress="doEnter(event,'keyword2');" />

                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>

            </div>

        </div>

    </div>

    <nav id="menu">

        <ul class="sky-mega-menu sky-mega-menu-anim-flip">
            <li>
                <a class="_active-home <?=($com =='' || $com =='index') ?"current" :''; ?>" href="" title="Trang chủ">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a class="<?=($com =='gioi-thieu') ?"current" :''; ?>" href="gioi-thieu" title="Giới Thiệu">
                    Giới Thiệu
                </a>
            </li>
            <li aria-haspopup="true">
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
            <li aria-haspopup="true">
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
            <li id="nutsearch"><i class="fas fa-search"></i></li>
            <div class="_frmTK _box-search">
                <form class="_frmsearch" action="tim-kiem" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control search_moi" name="keyword" value=""
                            placeholder="Enter keyword.." onkeypress="doEnter('event','keyword')">
                        <span class="input-group-btn">
                            <button type="submit" class="btn _btnsearch" onclick="onSearch('keyword')"><i
                                    class="fas fa-search"></i></button> </span>
                    </div>
                </form>
            </div>
        </ul>

    </nav>

</div>