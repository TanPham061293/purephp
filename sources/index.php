<?php  
	if(!defined('SOURCES')) die("Error");

	//$popup = $d->rawQueryOne("select ten$lang as ten, photo, link, hienthi from #_photo where type = ? and act = ? limit 0,1",array('popup','photo_static'));
   // $brand = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo from #_product_brand where type = ? and hienthi > 0 order by stt,id desc",array('san-pham'));
    //$pronb = $d->rawQuery("select id,giamoi,gia,giakm,photo,ten$lang as ten, tenkhongdauvi, tenkhongdauen  from #_product where type = ? and noibat > 0 and hienthi > 0",array('san-pham'));

    

    $splistnb_index_show = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id,photo from #_product_list where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));


    //$spcatnb_index_item = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id,photo from #_product_cat where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));

    //$newsnb = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo,luotxem from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('tin-tuc'));

    $service_index = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo1,photo, luotxem from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc",array('dich-vu'));
    
    
    //$album_index = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, mota$lang as mota, ngaytao, id, photo from #_product where type = ? and noibat > 0 and hienthi > 0 order by stt,id asc ",array('thu-vien-anh'));
    
    //$videonb = $d->rawQuery("select id,photo,link_video,ten$lang as ten from #_photo where noibat > 0 and type = ? and hienthi > 0",array('video'));
    //$partner = $d->rawQuery("select ten$lang as ten, link, photo from #_photo where type = ? and hienthi > 0 order by stt, id desc",array('doitac'));
    //$adv_index = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('adv'));
    $about_index = $d->rawQueryOne("select ten$lang as ten, photo,noidung$lang as noidung from #_static where type = ?  limit 0,1",array('gioi-thieu'));
 

    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>