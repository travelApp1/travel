<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:34:04
  from "D:\wamp\www\travel\template\index\zzl-zf-yhk.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977ff9cb32183_28213756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46eb9d949ff74e8166b71fc9a989f8cd0ec71ab' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\zzl-zf-yhk.html',
      1 => 1500434151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977ff9cb32183_28213756 (Smarty_Internal_Template $_smarty_tpl) {
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
/zzl-zf-yhk.css">
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
<div class="back history"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt=""></div>
<div class="welcome">
    <img src="<?php echo IMG_PATH;?>
/zzl-zf.png" alt="" class="yhk">
    <a href="index.php?m=index&f=pay&a=addback"><img src="<?php echo IMG_PATH;?>
/zzl-choseyhk.png" alt="" class="jia"></a>
</div>
<div class="baoxian-xuanze">
    <section class="model-1">
        <div class="checkbox">
            <input type="checkbox"/>
            <label>
                <div class="zi">储蓄卡</div>
                <div class="zi" style="float: right;margin-right:0.4rem;
        ">信用卡</div>
            </label>
        </div>
    </section>
</div>
<div class="pay">
    <p>RMB.<span>899.90</span></p>
    <p style="line-height: 0.3rem;font-size: 0.25rem">本次消费需支付金额</p>
</div>
<div class="card-k">
    <div class="card">
        <p>CHOSE BAKCARD</p>
        <p style="margin-top:0rem;color: black;font-weight: 600;font-size: 0.26rem;margin-bottom: 0.2rem">银行卡选择</p>
        <div class="card-item">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>
        <div class="card-item" style="background: green">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>
        <div class="card-item" style="background: blue">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>
        <div class="card-item"  style="background:deepskyblue">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>
        <div class="card-item" style="background:indianred">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>
        <div class="card-item">
            <div class="icon"><img src="<?php echo IMG_PATH;?>
/zzl-yh-1.png" alt=""></div>
            <div class="yh">中国建设银行</div>
            <div class="yh" style="position: absolute;top:0.5rem;">6226 **** **** 8909</div>
        </div>

    </div>
</div>
<div class="zz">

</div>
</body>
<?php echo '<script'; ?>
>
    $(".card-item").click(function () {

    })
<?php echo '</script'; ?>
>
</html><?php }
}
