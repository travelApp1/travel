<?php
/* Smarty version 3.1.30, created on 2017-08-12 13:26:56
  from "D:\wamp\www\travel\template\index\eidtPhoto.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598ee600367121_12852234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f08295321321ff9bfd6e400873311de71914e1' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\eidtPhoto.html',
      1 => 1500432526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ee600367121_12852234 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
    <style>
        body{
            font-size: 0.24rem;
        }
        .container{
            padding: 0.1rem 0.3rem;
            padding-bottom: 1rem;
            background: #fff;
        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav" style="background:#285BED;">
    <a href="<?php echo 'index.php?m=index&f=xiugai&a=photo';?>
"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt="" style="width:0.5rem;margin-top:0.2rem"></a>
    <h1 class="mui-title" style="color: #fff;">上传头像</h1>
</header>
<div class="container">
    <form action="index.php?m=index&f=xiugai&a=editPhotoCon" method="post">
        <div class="uploadBox" style="margin-top: 1rem;"></div>
        <input type="hidden" name="cid"">
        <input type="hidden" name="id"">
        <input type="hidden" name="imgurl" class="imgurl">
        <input type="submit" value="提交" style="margin-left: 4.5%;margin-top:2rem;width: 90%;height: 1rem">
    </form>
</div>
</body>
<?php echo '<script'; ?>
>
    var obj = new upload();
    obj.size = 1024 * 1024 * 10;
    obj.selectBtnStyle.background = "pink";
    obj.createView({
        parent: document.querySelector(".uploadBox")
    });

    obj.up("index.php?m=index&f=xiugai&a=upload", function (data) {
        console.log(data);
        document.querySelector(".imgurl").value = data;
    });    //跳转到未封装过的php

<?php echo '</script'; ?>
>
</html><?php }
}
