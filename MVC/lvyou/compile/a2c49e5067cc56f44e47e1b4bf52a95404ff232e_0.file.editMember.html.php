<?php
/* Smarty version 3.1.30, created on 2017-07-11 09:34:12
  from "D:\wamp\www\MVC\lvyou\template\admin\editMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59647f742206d1_30306074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2c49e5067cc56f44e47e1b4bf52a95404ff232e' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\admin\\editMember.html',
      1 => 1499758448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59647f742206d1_30306074 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<form class="form-horizontal center" method="post" action="index.php?m=admin&f=member&a=editCon&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">会员名称</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="mname" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
">
        </div>
    </div>
    <!--<div class="form-group">-->
        <!--<label for="inputPassword3" class="col-sm-2 control-label">密码</label>-->
        <!--<div class="col-sm-8">-->
            <!--<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="mpass">-->
        <!--</div>-->
    <!--</div>-->

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword3" placeholder="昵称" name="nicheng" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nicheng'];?>
">
        </div>
    </div>
    <!--<div class="form-group">-->
        <!--<label for="inputPassword3" class="col-sm-2 control-label">头像</label>-->
        <!--<div class="col-sm-8 uploadBox">-->
            <!--<input type="hidden" name="imgurl" class="imgurl">-->
        <!--</div>-->
    <!--</div>-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">修改会员</button>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</form>
</body>
<?php echo '<script'; ?>
>
//    var ue = UE.getEditor('editor');
//
//    var obj = new upload();
//    obj.size = 1024 * 1024 * 10;
//    obj.selectBtnStyle.background = "red";
//    obj.createView({
//        parent: document.querySelector(".uploadBox")
//    });
//
//    obj.up("index.php?m=admin&f=member&a=upload",function (data) {
//        console.log(data);
//        document.querySelector(".imgurl").value=data;
//    });    //跳转到未封装过的php
<?php echo '</script'; ?>
>
</html><?php }
}
