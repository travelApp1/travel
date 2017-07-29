<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:28:33
  from "D:\wamp\www\travel\template\admin\showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59780c61c43741_92420502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7d2d94f80177313b9b004c29e9d2387c8834af' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\showCon.html',
      1 => 1500865325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59780c61c43741_92420502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .con {
            width: 38%;
            height: 120px;
            overflow: hidden;
        }
        td{
            margin: 0 5px;
            align-items: center;
            vertical-align: middle;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .opt{
            width:100px;
            height:40px;
            background: #cccc77;
            text-align: center;
            line-height: 40px;
            border-radius: 5px;
            background: url("<?php echo IMG_PATH;?>
/inputbg.png")center center no-repeat;
            background-size: 100%;
            color: #fff;
            margin: 10px;
        }
        .opt a{
            display: inline-block;
            width:100%;
            height:100%;
            color:#fff;
            text-decoration: none;
        }
        table,th,tr,td{
            margin-left: 10px;
            border: 1px solid #066794;
            border-collapse: collapse;
            text-align: center;
        }
        table{
            width:98%;
        }
        th{
            line-height: 40px;
        }
        .con>div{
            text-indent:2em;
            width:100%;
            height:100%;
            max-width: 100%;
            max-height: 120px;
            line-height: 37px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }
        .tr,td{
            height: 120px;
        }
        .ti{
            max-width:150px;
        }
    </style>
</head>
<body>

<div class="opt">
    <a href="index.php?m=admin&f=container&a=addCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">添加内容</a>
</div>
<table>
    <tr>
        <th>标题</th>
        <th>简介</th>
        <th>缩略图</th>
        <th>操作</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['container']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['container']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr class="tr">
        <td class="ti">
            <h3 class="h4">
                <?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>

            </h3>
        </td>
        <td class="con">
            <div><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</div>
        </td>
        <td>
            <img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" width="120" height="120" alt="">
        </td>
        <td><a href="index.php?m=admin&f=container&a=delCon&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">删除</a>
            <a href="index.php?m=admin&f=container&a=editCon&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">编辑</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
    <tr>
        没有任何内容
    </tr>
    <?php }?>
</table>
</body>
</html><?php }
}
