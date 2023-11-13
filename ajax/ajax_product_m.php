<?php 

	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	@$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 4;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$idType = (isset($_GET['type']) && $_GET['type'] !='') ? htmlspecialchars($_GET['type']) : '';
	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	/* Math url */
	if($idList > 0 && $idType !='')
	{
		$tempLink .= "&idList=".$idList."&type=".$idType;
		$where .= " and ".$idType." = ".$idList;
	}

	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo, gia, giakm, type,hot,masp from #_product where type='san-pham' $where and hienthi > 0 and noibat > 0 order by stt,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sqlCache,'result',7200);
    $icon = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('icon'));

	/* Count all data */
	//$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	//$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if(isset($items) && count($items) > 0) {
	$i =1;
	foreach($items as $k => $v){?>
<div class="col-xs-6 text-center wow fadeInDown padding-right-5"
    style="visibility: visible; animation-name: fadeInDown;">
    <div class="_boxpr">
        <div class="_imgsp">
            <a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><img
                    src="<?=THUMBS.'/263x250x1/upload/product/'.$v['photo'] ?>"
                    onerror="this.src='thumbs/263x250x1/assets/images/noimage.png';" alt="<?=$v['ten'] ?>" /></a>
        </div>
        <div class="_boxname">
            <div class="_namepr text-center"><a href="<?=$v['tenkhongdauvi'] ?>" title="<?=$v['ten'] ?>"><?=$v['ten'] ?></a></div>
            <div class="text-center">
			<div class="_pricekm">Giá:
                <?=($v['gia'] != 0) ? number_format($v['gia']) .' đ' : '<a href="lien-he" title="Liên hệ">Liên hệ</a>';?>
            </div>            </div>
        </div>
    </div>
	<?php if($i % 2 == 0){?>
		<div class="clearfix margin-bottom-20"></div>
	<?php }?>
</div>
<?php $i++;} }else{?>
<div class="alert alert-warning" role='alert'>
    <strong>Nội dung đang cập nhật.</strong>
</div>
<?php }?>