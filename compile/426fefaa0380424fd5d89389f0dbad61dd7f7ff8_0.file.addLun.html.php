<?php
/* Smarty version 3.1.30, created on 2017-07-26 08:09:41
  from "D:\wamp\www\travel\template\admin\addLun.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597832255596f5_40074856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '426fefaa0380424fd5d89389f0dbad61dd7f7ff8' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addLun.html',
      1 => 1501049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597832255596f5_40074856 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">

    <style>
        table{
            margin-top: 40px!important;
            width: 80%!important;
            margin:0 auto;
        }
    </style>
</head>
<body>
<table class="table table-bordered">
    <th>id</th>
    <th>列表名</th>
    <th>操作</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=lunbo&a=addLunCon">添加轮播</a>
            <a href="" style="margin-left: 20px">查看轮播</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
