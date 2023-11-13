<?php
// session_start();

// $captcha = new captcha(280,60);
$captcha->captcha_noise(); // Add noise to captcha image
$captcha->captcha_blur(); // Blur captcha image

echo $captcha->captcha_image();

// echo $captcha->captcha_text();
?>

    <!-- <img src="bg_dm.png" alt=""> -->
