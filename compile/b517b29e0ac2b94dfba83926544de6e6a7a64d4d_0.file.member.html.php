<?php
/* Smarty version 3.1.30, created on 2017-07-18 11:31:59
  from "D:\wamp\wamp\www\travel\template\index\member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dd58f40a572_32330990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b517b29e0ac2b94dfba83926544de6e6a7a64d4d' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\travel\\template\\index\\member.html',
      1 => 1500370182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dd58f40a572_32330990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yjr_person.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $(".banner-fh").click(function () {
                history.go(-1);
            })
        });
    <?php echo '</script'; ?>
>
</head>
<body>
<header>
    <div class="bannerk">
        <div class="zhe"></div>
        <div class="banner-title">
            <div class="banner-fh">
                <img src="<?php echo IMG_PATH;?>
/yjr_per_fh.png" alt="">
            </div>
            <div class="banner-fx">
                <img src="<?php echo IMG_PATH;?>
/yjr_per_fx.png" alt="">
            </div>
        </div>
        <div class="banner-two">
            <div class="banner-tx">
                <?php if ($_smarty_tpl->tpl_vars['mphoto']->value) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['mphoto']->value;?>
" alt="">
                <?php } else { ?>
                <img src="<?php echo IMG_PATH;?>
/14.png" alt="">
                <?php }?>
            </div>
            <div class="bianji">
                <a href="<?php echo 'index.php?m=index&f=xiugai';?>
">
                    <img src="<?php echo IMG_PATH;?>
/yjr_per_bj.png" alt="">
                </a>
            </div>
            <div class="shezhi">
                <a href="<?php echo 'index.php?m=index&f=shezhi';?>
">
                    <img src="<?php echo IMG_PATH;?>
/yjr_per_sz.png" alt="">
                </a>
            </div>
        </div>
        <p class="banner-three">
            <?php echo $_smarty_tpl->tpl_vars['mname']->value;?>

        </p>
        <p class="banner-four">
            I like this music so  make me  amazing
        </p>
        <p class="banner-sl">··············</p>
        <p class="banner-wjx">
            <img src="<?php echo IMG_PATH;?>
/yjr_per_wjx.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yjr_per_wjx.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yjr_per_wjx.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yjr_per_wjx.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yjr_per_wjx.png" alt="">
        </p>
    </div>
</header>
<div class="neirong">
    <div class="nr-title"></div>
    <div class="nr-nr">
        <div class="nr-nr-one">
            <h3 class="nr-nr-title">Travel life rich and colorful</h3>
            <div class="like">
                <div class="like-zi">like</div>
                <div class="like-zi">share</div>
            </div>
            <div class="jing">
                <img src="<?php echo IMG_PATH;?>
/yjr_per_jing.png" alt="">
            </div>
            <div class="chart">
                <div class="chart-one"></div>
                <div class="chart-two">
                    <div class="chart-liuyan"></div>
                    <div class="chart-two-right">
                        <p class="chart-liu-zi1">5689</p>
                        <p class="chart-liu-zi2">CHARM</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="nr-nr-one">
            <h3 class="nr-nr-title">Travel life rich and colorful</h3>
            <div class="like">
                <div class="like-zi">like</div>
                <div class="like-zi">share</div>
            </div>
            <div class="jing">
                <img src="<?php echo IMG_PATH;?>
/yjr_per_jing.png" alt="">
            </div>
            <div class="chart">
                <div class="chart-one"></div>
                <div class="chart-two">
                    <div class="chart-liuyan"></div>
                    <div class="chart-two-right">
                        <p class="chart-liu-zi1">5689</p>
                        <p class="chart-liu-zi2">CHARM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php }
}
