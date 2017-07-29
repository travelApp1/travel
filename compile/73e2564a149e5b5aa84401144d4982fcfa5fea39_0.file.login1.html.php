<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:16:24
  from "D:\wamp\www\travel\template\index\login1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59780988bb2918_41418722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73e2564a149e5b5aa84401144d4982fcfa5fea39' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\login1.html',
      1 => 1501037933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59780988bb2918_41418722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>登录页面</title>
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
    <style>
        h3 {
            color: white;
            font-size: 0.3rem;
            position: absolute;
            left: 38%;
            top: 15%;
            z-index: 10;
            line-height: 0.56rem;
            text-align: center;
        }

        .an {
            top: 0 !important;
        }

        input {
            outline: 0;
            color: #000;
        }
        button{
            outline: 0;
        }
    </style>
</head>
<body>
<div class="beijing">
    <div class="an">
        <a href="javascript:;" class="history"> <img src="<?php echo IMG_PATH;?>
/6.png" style="width: 100%;height: 100%"></a>
    </div>
    <div class="touxiang">
        <div class="lv">
            <div class="qing">
                <div class="tout">
                    <img src="<?php echo IMG_PATH;?>
/4.jpg" style="width: 100%;height: 100%">
                </div>

            </div>
        </div>
    </div>
    <div class="wan1">MS.ANDY</div>
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
        <!-- <span>WELCOME TO HERE</span></div> -->
        <p>LOOK AT DIFFERENT SCENERY AND</p>
        <p style="margin-top: 0.05rem">FEEL DIFFERENT LIFE</p>
        <form class="loginBox" >
            <div class="waibiankuang">
                <img src="<?php echo IMG_PATH;?>
/16.png" class="jing"
                     style="width: 3.04rem;height: 0.48rem;position: absolute;top: 0.1rem;left: 20%;z-index:10;opacity: 0;">
                <img src="<?php echo IMG_PATH;?>
/8.png" class="font-tou">
                <img src="<?php echo IMG_PATH;?>
/9.png" class="font-tou1">
                <input type="text" placeholder="请您输入用户名" class="dl" value="" name="mname">
                <input type="password" placeholder="请您在此输入密码" class="pass" value="" name="mpass">

            </div>
            <div class="erci">
                <div class="xiaolandian"></div>
                <div class="xiaolvdian"></div>
                <div class="lijizhuce"><a href="<?php echo 'index.php?m=index&f=login&a=reg1';?>
" style="color: #fff" ;">立即注册</a>
                </div>
                <div class="lijizhuce zhaohui"><a href="" style="color: #fff">找回密码</a>
                </div>
                <div class="xiaolandian you"></div>
                <div class="xiaolvdian you"></div>
            </div>
            <button type="button" class="anniu zhong willLogin" style="border-radius: 0.4rem">
                <img src="<?php echo IMG_PATH;?>
/5.png" alt="">
                <h3>登 录</h3>
            </button>
        </form>
    </div>


    <?php echo '<script'; ?>
>
        //登陆
        $(".willLogin").click(function(){
            var str=$(".loginBox").serialize();
            $.ajax({
                url:"index.php?m=index&f=login&a=willLogin",
                type:"post",
                data:str,
                success:function(e){
                    if(e=="ok"){
                        alert(e);
                        location.href="index.php?m=index&f=member";
                    }else{
                        alert(e);
                        location.href="index.php?m=index&f=login&a=login1";
                    }
                }
            });

            $("input[type=text]").val("");
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
