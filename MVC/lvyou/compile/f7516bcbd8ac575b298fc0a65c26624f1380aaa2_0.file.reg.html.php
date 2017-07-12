<?php
/* Smarty version 3.1.30, created on 2017-07-11 11:34:21
  from "D:\wamp\www\MVC\lvyou\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59649b9d6f4015_19367643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7516bcbd8ac575b298fc0a65c26624f1380aaa2' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\index\\reg.html',
      1 => 1499765530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59649b9d6f4015_19367643 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>登录</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,
    	maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/style.css">
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
/back.js"><?php echo '</script'; ?>
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
        form{
            position: relative;
        }
        label.error{
            position: absolute;
            top: 1.7rem;
            left: 0;
            right: 0;
            margin: auto;
            width: 3.7rem;
            height: 0.6rem;
            border-radius: 0.2rem;
            background: #272e39;
            border: 0.02rem solid #fff;
            font-size: 0.26rem;
            font-family: '苹方';
            color: red;
            text-align: center;
            line-height: 0.6rem;
        }
        .an{
            top: 0!important;
        }
        .anniu11{
            width: 3.11rem;
            height: 0.81rem;
            border-radius: 0.4rem;
            background: url('<?php echo IMG_PATH;?>
/5.png') center;
            background-size: cover;
            color: #fff;
            font-family: '苹方';
            font-size: 0.28rem;
            position: absolute;
            right: 0;
            left: 0;
            bottom: 0.2rem;
            margin: auto;
        }
        #myform{
            height: 8.8rem;
        }
        .ljdl{
            margin-top: 5rem;
            margin-left: 0.4rem;
        }
    </style>
</head>
<body>
<div class="beijing">
    <div class="an"><a href="javascript:;" class="history"> <img src="<?php echo IMG_PATH;?>
/6.png" style="width: 100%;height: 100%"></a></div>
    <div class="wan3">POOR<span>·</span>TRAVEL</div>
    <div class="wan2">.穷.途.陌.路.</div>
    <div class="xx">
        <div class="xian">
            <div class="lvx"></div>
        </div>
        <div class="qiu">
            <div class="baiqiu">

            </div>
        </div>
        <div class="xian x1">
            <div class="lvx l1"></div>
        </div>
    </div>
    <div class="wel">
        <span>WELCOME TO COME IN</span></div>
    <div class="zhucebeijing">
        <form id="myform" class="regBox">
            <!-- <div class="box"></div> -->
            <img src="<?php echo IMG_PATH;?>
/8.png" class="font-tou f1">
            <img src="<?php echo IMG_PATH;?>
/11.png" class="font-tou f2">
            <img src="<?php echo IMG_PATH;?>
/9.png" class="font-tou f3">
            <img src="<?php echo IMG_PATH;?>
/9.png" class="font-tou f4">
            <input type="text" placeholder="请你设置自己的用户名" class="yonghuming" name="mname">
            <input type="text" placeholder="请填写你的手机号码" class="yonghuming y1" name="mphone" id="phone">
            <input type="password" placeholder="请设置六位密码" class="yonghuming y2" name="mpass" id='first'>
            <input type="password" placeholder="请再次确认密码" class="yonghuming y3" name="mpass1">
            <div class="lijizhuce ljdl"><a href="<?php echo 'index.php?m=index&f=login&a=login1';?>
">已有账号，立即登录</a>
            </div>
            <input type="button" class="anniu11 willReg" value="注 册">
        </form>
    </div>
</div>


</body>

<?php echo '<script'; ?>
>
    $(".willReg").click(function(){
        var str=$(".regBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=reg",
            type:"post",
            data:str,
            success:function(e){
                if(e=="ok"){
                    alert(e);
                    location.href="index.php?m=index&f=login&a=login1";
                }else{
                    alert(e);
                    location.href="index.php?m=index&f=login&a=reg1";
                }
            }
        });
        $("input").val("");
    });

    $("#myform").validate({
        rules:{
            mpass:{
                required:true
            },
            mpass1:{
                required:true,
                equalTo:"#first"   //和上一个相同
            },
            mname:{
                required:true,
                maxlength:12
            },

            mphone:{
                required:true,
                minlength:11,
                maxlength:11
            }
        },
        //自定义后面显示的内容
        messages:{
            mname:{
                required:"用户名必须有6到8位字母组成"
            },

            mphone:{
                required:"请正确填写手机号码!",
                minlength:"请正确填写手机号码!",
                maxlength:"请正确填写手机号码!"
            },
            mpass:{
                required:"两次密码不一致"
            },
            mpass1:{
                required:"两次密码不一致"
            }
        }
    })


<?php echo '</script'; ?>
>

</html><?php }
}
