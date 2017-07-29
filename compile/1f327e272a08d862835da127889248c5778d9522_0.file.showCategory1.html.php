<?php
/* Smarty version 3.1.30, created on 2017-07-26 04:55:51
  from "D:\wamp\www\travel\template\admin\showCategory1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597804b70c5059_05557758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f327e272a08d862835da127889248c5778d9522' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\showCategory1.html',
      1 => 1499824137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597804b70c5059_05557758 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

    </style>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $("li span").click(function () {
                $(this).nextAll("ul").toggle();
            })

        })
    <?php echo '</script'; ?>
>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

</body>
</html>
<?php }
}
