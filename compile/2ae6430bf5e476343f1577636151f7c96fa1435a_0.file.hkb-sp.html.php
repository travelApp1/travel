<?php
/* Smarty version 3.1.30, created on 2017-07-18 11:31:31
  from "D:\wamp\wamp\www\travel\template\index\hkb-sp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dd57339a3b9_43830832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae6430bf5e476343f1577636151f7c96fa1435a' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\travel\\template\\index\\hkb-sp.html',
      1 => 1500370182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dd57339a3b9_43830832 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>闪屏</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
    	maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/base.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/style.css">
	<link rel="stylesheet" href="<?php echo JS_PATH;?>
/swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
	<style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide img{
    	width: 100%;
    	height: 100%;
    }
    </style>
</head>
<body>
<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/hkb-sp1_03.png" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/hkb-sp2_03.png" alt=""></div>
            <div class="swiper-slide tiyan"><img src="<?php echo IMG_PATH;?>
/hkb-sp3_03.png" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.min.js"><?php echo '</script'; ?>
>

    <!-- Initialize Swiper -->
    <?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
        $(".tiyan").click(function () {
            location.href="index.php?m=index&f=index&a=show";
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
