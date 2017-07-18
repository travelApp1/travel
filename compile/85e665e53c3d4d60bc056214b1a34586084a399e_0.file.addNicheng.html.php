<?php
/* Smarty version 3.1.30, created on 2017-07-18 12:04:04
  from "D:\wamp\wamp\www\travel\template\index\addNicheng.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ddd144abac3_98652668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e665e53c3d4d60bc056214b1a34586084a399e' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\travel\\template\\index\\addNicheng.html',
      1 => 1500370182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ddd144abac3_98652668 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/back.js"><?php echo '</script'; ?>
>
    <style>
        label.error{
            position: absolute;
            right: 0;
            width: 200px;
            text-align: right;
            color: #00a2d4;
        }
        body{
            background: #fff;
        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav" style="background:#285BED;">
    <a class="history"><img src="<?php echo IMG_PATH;?>
/zzl-back.png" alt="" style="width:0.5rem;margin-top:0.2rem"></a>
    <h1 class="mui-title" style="color: #fff;">添加昵称</h1>
</header>
<div class="mui-content">
    <form id='login-form' class="mui-input-group">

        <div class="mui-input-row">
            <label>昵称</label>
            <input type="text" class="mui-input-clear mui-input addnc" placeholder="输入昵称" name="nicheng">
        </div>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
" class="midS">
        <button  class="mui-btn mui-btn-block mui-btn-primary" type="button" style="margin:0 auto;margin-top:8rem;width: 90%;">提交</button>
    </form>
    <?php echo '<script'; ?>
>
        $("button").click(function(){
            var nicheng=$(".addnc").val();
            var midS=$(".midS").attr("value");
            console.log(nicheng);
            $.ajax({
                url:"index.php?m=index&f=xiugai&a=addNcCon",
                type:"post",
                data:{
                    nicheng:nicheng,mid:midS
                },
                success:function(e){
                    if(e=="ok"){
                        alert("添加成功");
                    }else{
                        alert(e);
                    }
                }
            })
        })


    <?php echo '</script'; ?>
>
</div>
</body>
<?php echo '<script'; ?>
>
    $("#login-form").validate({
        //rules规则和上面直接用一样
        rules: {
            nicheng: {
                required: true
            }
        },
        //自定义后面显示的内容
        messages: {
            nicheng: {
                required: "必填"
            }
        }
    });

<?php echo '</script'; ?>
>
</html><?php }
}
