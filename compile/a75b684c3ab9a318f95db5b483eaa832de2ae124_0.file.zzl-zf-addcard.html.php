<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:34:07
  from "D:\wamp\www\travel\template\index\zzl-zf-addcard.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977ff9f15b175_56392814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75b684c3ab9a318f95db5b483eaa832de2ae124' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\zzl-zf-addcard.html',
      1 => 1500434560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977ff9f15b175_56392814 (Smarty_Internal_Template $_smarty_tpl) {
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
/zzl-zf-addcard.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
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
<a href="#"><div class="back history"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt=""></div></a>
<div class="welcome">
    <img src="<?php echo IMG_PATH;?>
/zzl-addcard-title.png" alt="" class="yhk">
</div>
<div class="card-k">
    <div class="card">
        <div class="finish"><img src="<?php echo IMG_PATH;?>
/zzl-addcard-finish.png" alt=""></div>
        <p>CARD INFORMATION</p>
        <p style="margin-top:0rem;color: black;font-weight: 600;font-size: 0.26rem;margin-bottom: 0.2rem">卡片信息采集</p>
        <div class="xian1"><img src="<?php echo IMG_PATH;?>
/zzl-xian1.png" alt=""></div>
        <div class="information">
            <div class="left">
                <div class="zi1">••Username</div>
                <img src="<?php echo IMG_PATH;?>
/zzl-xian2.png" alt="">
                <input type="text" placeholder="卡片用户名" class="shuru">
            </div>
            <div class="right">
                <img src="<?php echo IMG_PATH;?>
/zzl-addcard-icon1.png" alt="">
            </div>
        </div>
        <div class="xian3"><img src="<?php echo IMG_PATH;?>
/zzl-xian3.png" alt="" ></div>
        <div class="information">
            <div class="left">
                <div class="zi1">••Phone Number</div>
                <img src="<?php echo IMG_PATH;?>
/zzl-xian2.png" alt="">
                <input type="text" placeholder="银行卡片账号" class="shuru">
            </div>
            <div class="right">
                <img src="<?php echo IMG_PATH;?>
/zzl-addcard-icon2.png" alt="">
            </div>
        </div>
        <div class="xian3"><img src="<?php echo IMG_PATH;?>
/zzl-xian3.png" alt="" ></div>
        <div class="information">
            <div class="left">
                <div class="zi1">••Id Number</div>
                <img src="<?php echo IMG_PATH;?>
/zzl-xian2.png" alt="">
                <input type="text" placeholder="身份证号码" class="shuru">
            </div>
            <div class="right">
                <img src="<?php echo IMG_PATH;?>
/zzl-addcard-icon3.png" alt="">
            </div>
        </div>
        <div class="xian3"><img src="<?php echo IMG_PATH;?>
/zzl-xian3.png" alt="" ></div>
        <div class="information">
            <div class="left">
                <div class="zi1">••Phone Number</div>
                <img src="<?php echo IMG_PATH;?>
/zzl-xian2.png" alt="">
                <input type="text" placeholder="预留手机号" class="shuru">
            </div>
            <div class="right">
                <img src="<?php echo IMG_PATH;?>
/zzl-addcard-icon4.png" alt="">
            </div>
        </div>
        <div class="xian3"><img src="<?php echo IMG_PATH;?>
/zzl-xian3.png" alt="" ></div>
        <div style="margin: 0 auto;width: 98%;height: auto;">
            <a href="index.php?m=index&f=pay&a=backpay">
                <button type="submit">
                    <div class="zi">确认并提交</div>
                </button>
            </a>
        </div>
    </div>
</div>

</div>
</body>
</html><?php }
}
