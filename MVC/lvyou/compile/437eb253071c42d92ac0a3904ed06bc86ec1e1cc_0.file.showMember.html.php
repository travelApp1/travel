<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:48:30
  from "D:\wamp\www\MVC\lvyou\template\admin\showMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596571de0a4368_04478488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437eb253071c42d92ac0a3904ed06bc86ec1e1cc' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\admin\\showMember.html',
      1 => 1499820502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596571de0a4368_04478488 (Smarty_Internal_Template $_smarty_tpl) {
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
