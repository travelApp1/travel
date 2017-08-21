<?php
/* Smarty version 3.1.30, created on 2017-08-13 07:48:33
  from "D:\wamp\www\travel\template\index\zzl-editNicheng.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598fe8311634a4_98627224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94320aeaa0078a9564946932ddedf55520b76177' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\zzl-editNicheng.html',
      1 => 1500867792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598fe8311634a4_98627224 (Smarty_Internal_Template $_smarty_tpl) {
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
/mui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/messages_zh.js"><?php echo '</script'; ?>
>
    <style>
        label.error {
            position: absolute;
            right: 0;
            width: 200px;
            text-align: right;
            color: #00a2d4;
        }

        body {
            background: #fff;
        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav" style="background:#285BED;">
    <a href="<?php echo 'index.php?m=index&f=xiugai';?>
"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt=""
                                                  style="width:0.5rem;margin-top:0.2rem"></a>
    <h1 class="mui-title" style="color: #fff;">修改昵称</h1>
</header>
<div class="mui-content">
    <form id='login-form' class="mui-input-group" action="" method="post">
        <div class="mui-input-row">
            <label>旧昵称</label>
            <input type="text" class="mui-input-clear mui-input" value="<?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>
" name="oldname" readOnly="true">
        </div>


        <div class="mui-input-row">
            <label>新昵称</label>
            <input type="text" class="mui-input-clear mui-input newNC" placeholder="输入新昵称" name="uname">
        </div>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
" class="midS" name="mid">
        <button class="mui-btn mui-btn-block mui-btn-primary" type="submit"
                style="margin:0 auto;margin-top:8rem;width: 90%;">提交
        </button>
    </form>
    <?php echo '<script'; ?>
>
        $("button").click(function () {
            var nicheng = $(".newNC").val();
            var midS = $(".midS").attr("value");
            $.ajax({
                url: "index.php?m=index&f=xiugai&a=addNcCon",
                type: "post",
                data: {
                    nicheng: nicheng, mid: midS
                },
                success: function (e) {
                    if (e == "ok") {
                        alert("添加成功");
                        location.herf = "index.php?m=index&f=member&a=init";
                    } else {
                        alert(e);
                        location.herf = "index.php?m=index&f=xiugai&a=editpass";
                    }
                }
            })
        })
    <?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
