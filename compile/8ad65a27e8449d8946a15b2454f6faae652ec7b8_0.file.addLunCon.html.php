<?php
/* Smarty version 3.1.30, created on 2017-07-26 08:09:42
  from "D:\wamp\www\travel\template\admin\addLunCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59783226cdf8c1_60053400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad65a27e8449d8946a15b2454f6faae652ec7b8' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addLunCon.html',
      1 => 1501044807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59783226cdf8c1_60053400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
    <style>
        body{
            padding: 0 15px;
            padding-top: 50px;
        }
    </style>
</head>

<body>
<form class="form-horizontal center" method="post" action="index.php?m=admin&f=member&a=addCon">

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">轮播图</label>
        <div class="col-sm-8 uploadBox">
            <input type="hidden" name="imgurl" class="imgurl">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">添加会员</button>
        </div>
    </div>
</form>
</body>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');

    var obj = new upload();
    obj.size = 1024 * 1024 * 10;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadBox")
    });

    obj.up("index.php?m=admin&f=member&a=upload",function (data) {
        console.log(data);
        document.querySelector(".imgurl").value=data;
    });    //跳转到未封装过的php
<?php echo '</script'; ?>
>
</html><?php }
}
