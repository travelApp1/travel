<?php
/* Smarty version 3.1.30, created on 2017-07-10 10:31:16
  from "D:\wamp\www\MVC\lvyou\template\admin\showRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59633b5470a245_22398470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c715a2b1cb383c5670dab344156eb39640ebfdb2' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\admin\\showRole.html',
      1 => 1499675414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59633b5470a245_22398470 (Smarty_Internal_Template $_smarty_tpl) {
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
    <th>角色</th>
    <th>角色码</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rid"];?>
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
