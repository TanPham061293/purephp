<?php
    if(!defined('SOURCES')) die("Error");

    /* Query allpage */
    $favicon = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('favicon','photo_static'));
    $logo = $d->rawQueryOne("select id, photo, options from #_photo where type = ? and act = ? limit 0,1",array('logo','photo_static'));
    //$logo1 = $d->rawQueryOne("select id, photo, options from #_photo where type = ? and act = ? limit 0,1",array('logo1','photo_static'));
    //$banner = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? limit 0,1",array('banner','photo_static'));
    //$banner_mobi = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? limit 0,1",array('banner_mobi','photo_static'));
    //$slogan = $d->rawQueryOne("select ten$lang as ten from #_static where type = ? limit 0,1",array('slogan'));
    $social = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoi'));
    $icon = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('icon'));
    $slider = $d->rawQuery("select ten$lang as ten, photo, link,mota$lang as mota from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));

    $social2 = $d->rawQuery("select ten$lang as ten, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoi2'));
    $splistmenu = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_product_list where type = ? and hienthi > 0 order by stt,id desc ",array('san-pham'));
    $splistmenu_service = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen,photo, id from #_news where type = ? and hienthi > 0  order by stt,id desc ",array('dich-vu'));

    $footer = $d->rawQueryOne("select ten$lang as ten, noidung$lang as noidung from #_static where type = ? limit 0,1",array('footer'));
    //$tagsProduct = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_tags where type = ? and noibat > 0 order by stt,id desc",array('san-pham'));
    //$tagsNews = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id from #_tags where type = ? and noibat > 0 order by stt,id desc",array('tin-tuc'));
    //$cs = $d->rawQuery("select ten$lang as ten, tenkhongdauvi, tenkhongdauen, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('chinh-sach'));
    $background = $d->rawQuery("select photo, tenvi from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('background'));
    if(isset($background) && count($background) > 0){
        $background_baogia ='';
        $background_footer ='';
        $background_dichvu ='';
        foreach($background as $k => $v){
            if( $v['tenvi'] == 'footer'){
                $background_footer = $v['photo'];
            }elseif($v['tenvi'] == 'Báo giá'){
                $background_baogia =$v['photo'];
            }else{
                $background_dichvu =$v['photo'];
            }
        }
        
    }
    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(isset($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            $data = array();
            $data['email'] = (isset($_REQUEST['emailNewsLetter']) && $_REQUEST['emailNewsLetter'] != '') ? htmlspecialchars($_REQUEST['emailNewsLetter']) : '';
            $data['ten'] = (isset($_REQUEST['fullname']) && $_REQUEST['fullname'] != '') ? htmlspecialchars($_REQUEST['fullname']) : '';
            $data['dienthoai'] = (isset($_REQUEST['phone']) && $_REQUEST['phone'] != '') ? htmlspecialchars($_REQUEST['phone']) : '';
            $data['noidung'] = (isset($_REQUEST['contactdk']) && $_REQUEST['contactdk'] != '') ? htmlspecialchars($_REQUEST['contactdk']) : '';

            $data['ngaytao'] = time();
            $data['type'] = 'dangkybaogia';

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$config_base);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }
?>