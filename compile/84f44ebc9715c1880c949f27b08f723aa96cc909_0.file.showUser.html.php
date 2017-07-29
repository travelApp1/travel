<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:50:13
  from "D:\wamp\www\travel\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59781175c0a3f8_42198287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f44ebc9715c1880c949f27b08f723aa96cc909' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\showUser.html',
      1 => 1499674580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59781175c0a3f8_42198287 (Smarty_Internal_Template $_smarty_tpl) {
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
    <th>用户名</th>
    <th>昵称</th>
    <th>角色</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>
</td>
        <td></td>
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
