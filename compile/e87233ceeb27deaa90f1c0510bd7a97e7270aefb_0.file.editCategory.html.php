<?php
/* Smarty version 3.1.30, created on 2017-07-14 15:46:56
  from "D:\wamp\www\travel\template\admin\editCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968cb50ce23b1_62085146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e87233ceeb27deaa90f1c0510bd7a97e7270aefb' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\editCategory.html',
      1 => 1499822040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968cb50ce23b1_62085146 (Smarty_Internal_Template $_smarty_tpl) {
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
</html><?php }
}
