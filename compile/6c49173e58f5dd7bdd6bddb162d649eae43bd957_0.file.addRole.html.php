<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:50:17
  from "D:\wamp\www\travel\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59781179901c14_92919152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c49173e58f5dd7bdd6bddb162d649eae43bd957' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addRole.html',
      1 => 1499675914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59781179901c14_92919152 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" method="post" action="index.php?m=admin&f=role&a=addCon">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="rname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">角色码</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="number" name="rid">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">添加角色</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
