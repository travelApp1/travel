<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:52:23
  from "D:\wamp\www\travel\template\index\zzl-personal-shezhi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597811f79cf6f8_30838802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419fca3aded47b37423b25a4c3fdef2c8d013045' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\zzl-personal-shezhi.html',
      1 => 1501037933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597811f79cf6f8_30838802 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>session_start();
<?php echo '?>';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        window.onload=function () {
            var back=document.querySelector(".back");
            back.onclick=function(){
                history.back();
            }
        }
    <?php echo '</script'; ?>
>
</head>
<body>
<header class="mui-bar mui-bar-nav" style="background:#285BED;">
    <a herf="#" class="back"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt="" style="width:1.5rem;margin-top:0.6rem"></a>
    <h1 class="mui-title" style="color: #fff;">设置</h1>
</header>

<div class="mui-content">
    <ul class="mui-table-view">
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="#">
               我的收藏
            </a>
        </li>

        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="<?php echo 'index.php?m=index&f=xiugai&a=loginout';?>
">
                退出登录
            </a>
        </li>
    </ul>
</div>

</body>
</html><?php }
}
