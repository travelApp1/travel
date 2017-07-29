<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:34:36
  from "D:\wamp\www\travel\template\admin\editCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977ffbc7ed727_35446353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87233ceeb27deaa90f1c0510bd7a97e7270aefb' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\editCategory.html',
      1 => 1500283259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977ffbc7ed727_35446353 (Smarty_Internal_Template $_smarty_tpl) {
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
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
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
            padding-top: 40px;
        }
    </style>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=category&a=editCon&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" name="rid">所属分类</label>
        <div class="col-sm-8">
            <select name="pid" id="" class="form-control">
                <option value="0">
                    --一级分类--
                </option>
                <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="分类名称" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">英文</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="英文" name="english" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['english'];?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">图片</label>
        <div class="col-sm-8 uploadBox">
            <input type="hidden" name="imgurl" class="imgurl">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">修改分类</button>
        </div>
    </div>
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

    obj.up("index.php?m=admin&f=category&a=upload",function (data) {
        console.log(data);
        document.querySelector(".imgurl").value=data;
    });    //跳转到未封装过的php
<?php echo '</script'; ?>
>
</html><?php }
}
