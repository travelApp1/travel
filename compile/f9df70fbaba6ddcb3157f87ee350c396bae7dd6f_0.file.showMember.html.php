<?php
/* Smarty version 3.1.30, created on 2017-07-29 04:17:03
  from "D:\wamp\www\travel\template\admin\showMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597bf01f3d10c8_30286448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9df70fbaba6ddcb3157f87ee350c396bae7dd6f' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\showMember.html',
      1 => 1500095295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597bf01f3d10c8_30286448 (Smarty_Internal_Template $_smarty_tpl) {
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
    <th>头像</th>
    <th>操作</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>
</td>
        <td><img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['mphoto'];?>
" alt="" style="width: 100px;height: 100px;"></td>
        <td>
            <a href="index.php?m=admin&f=member&a=del&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">删除</a>
            <a href="index.php?m=admin&f=member&a=edit&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
" style="margin-left: 20px">编辑</a>
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
