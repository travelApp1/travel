<?php
/* Smarty version 3.1.30, created on 2017-07-18 11:32:57
  from "D:\wamp\wamp\www\travel\template\index\zzl-personal-xiugai.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dd5c90ad674_41162093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4a1cb59c5a76f4a7e407efb67a64c324eaabdd8' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\travel\\template\\index\\zzl-personal-xiugai.html',
      1 => 1500370182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dd5c90ad674_41162093 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--<?php echo '<?php
';?>session_start();
<?php echo '?>';?>-->
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
                location.href=history.go(-1);
            }
        }
    <?php echo '</script'; ?>
>
</head>
<body>
<header class="mui-bar mui-bar-nav" style="background:#285BED;">
    <a herf="#" class="back"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt="" style="width:1.5rem;margin-top:0.6rem"></a>
    <h1 class="mui-title" style="color: #fff;">修改</h1>
</header>

<div class="mui-content">
    <ul class="mui-table-view">
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="<?php echo 'index.php?m=index&f=xiugai&a=photo';?>
">
                上传头像
            </a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['flag']->value) {?>
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="index.php?m=index&f=xiugai&a=editNicheng&mid=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
                修改昵称
            </a>
        </li>
        <?php } else { ?>
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="index.php?m=index&f=xiugai&a=addNicheng&mid=<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
                添加昵称
            </a>
        </li>
        <?php }?>
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="<?php echo 'index.php?m=index&f=xiugai&a=editpass';?>
">
                修改密码
            </a>
        </li>
    </ul>
</div>

</body>
</html><?php }
}
