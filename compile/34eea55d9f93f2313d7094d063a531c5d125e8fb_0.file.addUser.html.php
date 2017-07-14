<?php
/* Smarty version 3.1.30, created on 2017-07-14 16:24:21
  from "D:\wamp\www\travel\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968d415949761_02331135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34eea55d9f93f2313d7094d063a531c5d125e8fb' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addUser.html',
      1 => 1499672140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968d415949761_02331135 (Smarty_Internal_Template $_smarty_tpl) {
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
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        body{
            padding: 0 15px;
            padding-top: 50px;
        }

    </style>
</head>

<body>
<form class="form-horizontal center" method="post" action="index.php?m=admin&f=user&a=addCon">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label" name="rid">选择角色</label>
        <div class="col-sm-8">
            <select name="rid" id="" class="form-control">
                <option value="">
                    --选择角色--
                </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

                </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="uname">
        </div>
    </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-8">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="upass">
    </div>
</div>

    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword3" placeholder="昵称" name="nicheng">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">添加用户</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
