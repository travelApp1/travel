<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:36:52
  from "D:\wamp\www\travel\template\admin\addC.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59780e545f0624_06012489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f6aca208e971394878e4cd577f403647c41e68' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addC.html',
      1 => 1501040097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59780e545f0624_06012489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html,body{
            width:100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .categoryCon{
            width:20%;
            height:100%;
            border-right: 2px solid #000;
            box-sizing: border-box;
            float: left;
        }
        .showCon{
            width:80%;
            height:100%;
            float: left;
            /*background: url("<?php echo IMG_PATH;?>
/w1.jpg")center center no-repeat;*/
            /*background-size: 100%;*/
        }
    </style>
</head>
<body>
<iframe src="index.php?m=admin&f=container&a=show&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" frameborder="0" class="categoryCon" name="categoryCon"></iframe>

<iframe src="" frameborder="0" class="showCon" name="showCon"></iframe>
</body>
</html><?php }
}
