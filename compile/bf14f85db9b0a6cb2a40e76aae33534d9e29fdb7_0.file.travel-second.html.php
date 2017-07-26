<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:26:30
  from "D:\wamp\www\travel\template\index\travel-second.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977fdd6118233_03034528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf14f85db9b0a6cb2a40e76aae33534d9e29fdb7' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\travel-second.html',
      1 => 1500436930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977fdd6118233_03034528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zzl-travel-second.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/back.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="bt">
        <div class="icon1  history"></div>
        <div class="icon2"></div>

    </div>
    <div class="sousuo">
        <input  class="sousuo1" type="text" placeholder="请在此查找您需要的内容">
        <div class="sousuo-tu"></div>
    </div>
</header>


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/zzl-lv-banner.png" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/zzl-lv-banner.png" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/zzl-lv-banner.png" alt=""></div>
        <div class="swiper-slide"><img src="<?php echo IMG_PATH;?>
/zzl-lv-banner.png" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next" style="height: 0.5rem"></div>
    <div class="swiper-button-prev" style="height: 0.5rem"></div>
</div>

<div class="xq-t"></div>
<ul class="xq">
    <a href="index.php?m=index&f=xiang">
        <li class="xqy">
            <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
            <h6>大理丽江</h6>
        </li>
    </a>
    <li class="xqy">
        <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
        <h6>大理丽江</h6>
    </li>
    <li class="xqy">
        <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
        <h6>大理丽江</h6>
    </li>
    <li class="xqy">
        <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
        <h6>大理丽江</h6>
    </li>
    <li class="xqy">
        <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
        <h6>大理丽江</h6>
    </li>
    <li class="xqy">
        <img src="<?php echo IMG_PATH;?>
/zzl-lv-xq1.png" alt="">
        <h6>大理丽江</h6>
    </li>

    <footer>
        <a href="#">
            <div class="iconfont foot active">&#xe63a;</div>
        </a>
        <a href="<?php echo 'index.php?m=index&f=sou&a=init';?>
">
            <div class="iconfont foot1">&#xe616;</div>
        </a>
        <a href="#">
            <div class="iconfont foot2">&#xe62c;</div>
        </a>
        <a href="<?php echo 'index.php?m=index&f=member';?>
">
            <div class="iconfont foot3">&#xe601;</div>
        </a>
    </footer>




    </body>
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });

    $(".iconfont").click(function () {
        var index=$(".iconfont").index(this);
        $(".iconfont").filter(".active").removeClass("active").end().eq(index).addClass("active");
    });

    $(".icon2").click(function () {
        location.href = "index.php?m=index&f=member";
    })
<?php echo '</script'; ?>
>


</html><?php }
}
