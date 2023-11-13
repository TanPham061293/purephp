<?php
	include "ajax_config.php";
	
	if($_POST['id'] > 0){

		$album_index_ajax = $d->rawQuery("select photo from table_gallery where id_photo = ? and com='product' and type = ? and kind='man' and val = ? and hienthi > 0 order by stt,id desc limit 0,12",array($_POST['id'],'thu-vien-anh','thu-vien-anh'));
	}

?>

	<?php foreach($album_index_ajax as $k => $v) { ?>
		<div class="box-album-index" >
			<div class="box-item-album">
		        <a class=" text-decoration-none" rel="album-<?=$k?>" href="<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$_POST['name'].' '.($k+1)?>">
		            <span class="pic-album scale-img"><img onerror="this.src='<?=THUMBS?>/393x282x1/assets/images/noimage.png';" src="<?=THUMBS?>/393x282x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$_POST['name'].' '.($k+1)?>"/></span>
		        </a>
			</div>
		</div>
	<?php }?>

