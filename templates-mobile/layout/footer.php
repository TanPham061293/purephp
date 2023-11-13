<div class="_foot">
    <div class="pagewrap">
        <div class="row">
            <div class="col-md-12">
                <div class="_dmfootchinh">
                    <h4>CÔNG TY TNHH SX TM <?=$setting['tenvi'] ?></h4>
                </div>

                <div class="_add-foot">
                    <?php if(isset($footer) && $footer['noidung'] !=''){?>
                    <?=htmlspecialchars_decode($footer['noidung']) ?>
                    <?php }else{?>
                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_dc.png"
                                        style="width: 30px; height: 30px;" /><?=$optsetting['diachi'] ?></span></span></span>
                    </p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" />&nbsp;Hotline: <?=$optsetting['hotline'] ?>
                                    - <?=$optsetting['dienthoai'] ?></span></span></span></p>

                    <p><span style="font-family:Tahoma,Geneva,sans-serif;"><span style="font-size:14px;"><span
                                    style="line-height:1;"><img alt=""
                                        src="http://caphemocnau.com/backend/web/uploads/images/icon_phone.png"
                                        style="width: 30px; height: 30px;" /><?=$optsetting['zalo'] ?>
                                    (Zalo)</span></span></span></p>

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
                    <?php }?>
                </div>
            </div>
            <div class="clearfix margin-bottom-20"></div>
            <div class="col-md-12">
                <div class="_dmfoot">Fanpage - Facebook</div>
                <div class="clearfix margin-bottom-20"></div>

                <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" width="1000"
                    data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?=$optsetting['fanpage']?>">
                            <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                        </blockquote>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="_bgcpr">
    <div class="pagewrap">
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- <div class="_copyright">Copyright © 2020 <?=$setting['tenvi'] ?>. </div> -->
            </div>
        </div>
    </div>
</div>
<div class="chat_zalo">
    <a href="https://zalo.me/<?=$optsetting['zalo'] ?>" target="_blank"><img src="assets/images/zalo.png" width="50px"
            alt="zalo"></a>
</div>
<style>
.chat_zalo {
    position: fixed;
    bottom: 80px;
    right: 15px;
    z-index: 99;
}
</style>

<div id="messages-facebook"><?=$addons->setAddons('messages-facebook', 'messages-facebook', 10);?></div>

<div class="hotline">
    <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <div class="phonering-alo-ph-img-circle">
            <a class="pps-btn-img " title="Liên hệ" href="tel:<?=$optsetting['hotline'] ?>"> <img
                    src="assets/images/quick-call-button-phone.png" alt="Liên hệ" width="50" class="img-responsive">
            </a>
        </div>
    </div>
    <style>
    /* HOTLINE */
    .phonering-alo-phone {
        position: fixed;
        visibility: hidden;
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 99 !important;
        right: 150px;
        bottom: -50px;
        left: -50px;
        display: block;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transition: visibility .5s;
        margin: 0;
    }

    .phonering-alo-phone.phonering-alo-show {
        visibility: visible
    }

    .phonering-alo-phone.phonering-alo-static {
        opacity: .6
    }

    .phonering-alo-phone.phonering-alo-hover,
    .phonering-alo-phone:hover {
        opacity: 1
    }

    .phonering-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        opacity: .1;
        /* -webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out; */
        /* animation:phonering-alo-circle-anim 1.2s infinite ease-in-out; */
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
        -webkit-animation: phonering-alo-circle-anim 1.1s infinite ease-in-out !important;
        animation: phonering-alo-circle-anim 1.1s infinite ease-in-out !important
    }

    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
        -webkit-animation: phonering-alo-circle-anim 2.2s infinite ease-in-out !important;
        animation: phonering-alo-circle-anim 2.2s infinite ease-in-out !important
    }

    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,
    .phonering-alo-phone:hover .phonering-alo-ph-circle {
        border-color: red;
        opacity: .5
    }

    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,
    .phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
        border-color: #272d6b;
        opacity: .5
    }

    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
        border-color: red;
        opacity: .5
    }

    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,
    .phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
        border-color: #ccc;
        opacity: .5
    }

    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
        border-color: #75eb50;
        opacity: .5
    }

    .phonering-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
        -webkit-animation: phonering-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        animation: phonering-alo-circle-fill-anim 1.7s infinite ease-in-out !important
    }

    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
        -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        opacity: 0 !important
    }

    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,
    .phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
        background-color: rgba(39, 45, 107, 0.5);
        opacity: .75 !important
    }

    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,
    .phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
        background-color: rgba(39, 45, 107, 0.5);
        opacity: .75 !important
    }

    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
        background-color: rgba(242, 20, 0, 0.56);
    }

    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,
    .phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
        background-color: rgba(204, 204, 204, 0.5);
        opacity: .75 !important
    }

    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        opacity: .75 !important
    }

    .phonering-alo-ph-img-circle {
        width: 50px;
        height: 50px;
        top: 75px;
        left: 75px;
        position: absolute;
        background: rgba(30, 30, 30, 0.1) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==) no-repeat center center;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out !important;
        animation: phonering-alo-circle-img-anim 1s infinite ease-in-out !important
    }

    .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
        -webkit-animation: phonering-alo-circle-img-anim 0 infinite ease-in-out !important;
        animation: phonering-alo-circle-img-anim 0 infinite ease-in-out !important
    }

    .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,
    .phonering-alo-phone:hover .phonering-alo-ph-img-circle {
        background-color: #00aff2;
    }

    .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,
    .phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
        background-color: #272d6b;
    }

    .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
        background-color: red;
    }

    .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,
    .phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
        background-color: #ccc;
    }

    .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
        background-color: #75eb50
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }

        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @keyframes phonering-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-webkit-keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @keyframes phonering-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-webkit-keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @keyframes phonering-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            transform: rotate(0) scale(1) skew(1deg)
        }
    }
    </style>
</div>

<div class="modal " id="myCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Giỏ Hàng Của Bạn</h4>
            </div>
            <div id="cartResult">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="back-top" hidden><i class="far fa-arrow-alt-circle-up"></i></div>