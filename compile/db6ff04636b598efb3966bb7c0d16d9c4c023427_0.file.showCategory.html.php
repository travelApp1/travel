<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:44:33
  from "D:\wamp\www\travel\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597802113274b3_06366644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6ff04636b598efb3966bb7c0d16d9c4c023427' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\showCategory.html',
      1 => 1501037070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597802113274b3_06366644 (Smarty_Internal_Template $_smarty_tpl) {
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
    <th>分类名</th>
    <th>缩略图</th>
    <th>操作</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td><img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" style="width: 100px;height: 100px"></td>
        <td>
            <a href="index.php?m=admin&f=category&a=del&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a>
            <a href="index.php?m=admin&f=category&a=edit&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
