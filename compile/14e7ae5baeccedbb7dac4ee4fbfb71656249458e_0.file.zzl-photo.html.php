<?php
/* Smarty version 3.1.30, created on 2017-07-18 11:33:01
  from "D:\wamp\wamp\www\travel\template\index\zzl-photo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dd5cdb545b4_75067152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e7ae5baeccedbb7dac4ee4fbfb71656249458e' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\travel\\template\\index\\zzl-photo.html',
      1 => 1500370182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dd5cdb545b4_75067152 (Smarty_Internal_Template $_smarty_tpl) {
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
/zzl-photo.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <style>
        .touch{
            border-radius: 50%;
            border: 2px solid #1e8ee9;
        }
        .touch>img{
            list-style: none;
            border: 0;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<a href="<?php echo 'index.php?m=index&f=xiugai';?>
"><div class="back"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt=""></div></a>
    <div class="title">
        <img src="<?php echo IMG_PATH;?>
/zzl-photo-title.png" alt="">
    </div>
    <div class="kuang-k">
        <div class="kuang">
            <div class="dian"></div>
            <div class="chose">
                <img src="<?php echo IMG_PATH;?>
/zzl-photo-chose.png" alt="">
            </div>
            <div class="touch">
                <?php if ($_smarty_tpl->tpl_vars['mphoto']->value) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['mphoto']->value;?>
" alt="">
                <?php } else { ?>
                <img src="<?php echo IMG_PATH;?>
/14.png" alt="">
                <?php }?>
            </div>
            <div class="shangchuan">
                <img src="<?php echo IMG_PATH;?>
/zzl-photo-shangchuan.png" alt="">
            </div>
            <ul class="foot">
                <li class="item">
                    <img src="<?php echo IMG_PATH;?>
/zzl-photo-foot.png" alt="">
                    <div class="zi">相册</div>
                    <div class="zi1">PHOTO ALBNM</div>
                </li>
                <li class="item">
                    <img src="<?php echo IMG_PATH;?>
/zzl-photo-foot.png" alt="">
                    <div class="zi"> &nbsp;拍照</div>
                    <div class="zi1"> &nbsp;DENGLUHERE</div>
                </li>
            </ul>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
>
    $(".shangchuan").click(function () {
        location.href="index.php?m=index&f=xiugai&a=editPhoto";
    })
<?php echo '</script'; ?>
>
</html><?php }
}
