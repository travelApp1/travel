<?php
/* Smarty version 3.1.30, created on 2017-07-12 05:48:18
  from "D:\wamp\www\travel\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59659c02741b58_27402778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c9bd69cbe261e8052e22c8c51c812e31605b06b' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\main.html',
      1 => 1499759412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59659c02741b58_27402778 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
</head>
<style>
    *{
        padding: 0;margin: 0;border:0;
        box-sizing: border-box;
        list-style: none;
    }
    a{
        color: #12C43E;
    }
    body,html{
        width: 100%;
        height: 100%;
        background-image:url("<?php echo IMG_PATH;?>
/himg/33.png");
        overflow: hidden;
    }
    header{
        width: 100%;
        height:7%;
        background:black;

        font-size:20px;
        line-height:50px;
        text-align: center;
        color:#fff;
    }
    .header-k{
        width: 90%;
        height: 100%;
        margin:0 auto;
    }
    .header-k .zi{
        float:left;
    }
    .header-k .back{
        float: right;
        font-size: 18px;
        line-height: 60px;
    }

    .neirong{
        width: 95%;
        height:93%;
        overflow: hidden;
        margin:0 auto;
        margin-top:20px;

    }

    .left {
        width: 20%;
        height:auto;
        /*background: green;*/
        float: left;
        cursor: pointer;
    }
    .gr{
        width:100%;
        height: auto;
        /*background: #fff;*/
        background: rgba(255,255,255,1);

        margin-bottom: 30px;
        float: left;
    }
    .gr .title{
        width: 80%;
        height: 30px;
        border-bottom: 2px solid #b0b0b0;
        margin:0 auto;
        margin-top: 10px;
        font-size: 16px;
        line-height: 30px;
        color:#0A892C;
        font-weight: 700;
    }
    .gr img{
        width: 100%;
        height: 150px;
        padding:20px 30px;
    }
    .gr .zi{
        width: 100%;
        height: auto;
        padding:0 30px;
        text-align: center;
        line-height: 20px;
    }
    .right {
        width:78%;
        height:95%;
        overflow: hidden;
        background: rgba(255,255,255,1);
        float: right;
    }
    iframe{
        width: 100%;
        height:100%;
        /*overflow: hidden;*/
        /*min-height: 800px;*/
    }
    .h5{
        width: 100%;
        height: auto;
        max-height: 330px;
        overflow-y: auto;
        overflow-x: hidden;

        /*background: #fff;*/
        background: rgba(255,255,255,1);
        padding: 20px 30px;
        float: left;
    }
    .h5 a{
        /*color:#D30000;*/
        font-size: 14px;
        text-decoration: dashed;
    }
    .small{
        display: none;

        width: 80%;
        margin:0 auto;
        margin-top: -8px;
        margin-bottom: 10px;


    }
    .small li{
        width: 100%;
        color: black;
        text-align: center;
        line-height: 25px;
        border-radius: 5px;
        background:rgba(0,0,0,0.6);
        margin-bottom: 2px;
    }
    .anniu{
        width: 100%;
        height: 30px;
        background: green;
        border-radius: 10px;
        text-align: center;
        line-height: 30px;
        margin-bottom: 10px;
        color:#fff;
    }
    .back{
        font-size: 30px;
    }

</style>
<?php echo '<script'; ?>
>
    $(function () {
        $("li span").click(function () {
            $(this).nextAll("ul").slideToggle();
        });
        var myDate = new Date();
        var mytime=myDate.toLocaleString( );      //获取当前时间
        $(".back").html(mytime);
    })
<?php echo '</script'; ?>
>
<body>
<header>
    <div class="header-k">
        <div class="zi">欢迎 <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span> 进入新闻管理系统</div>
        <div class="back"></div>
    </div>
</header>
<div class="neirong">
    <div class="left">
        <div class="gr">
            <div class="title">行者直播</div>
            <a href="../senlinyuzhuang/html/sy.php" target="_blank"><img src="<?php echo IMG_PATH;?>
/himg//1.jpg" alt=""></a>
            <!--            <div class="zi">公司地址:太原市小店区</div>-->
            <div class="zi" style="margin-bottom: 20px;color: #0C912E"><a href="<?php echo 'index.php?m=admin&f=login&a=logout';?>
" target="_blank">进入主页</a> &nbsp;<a href="<?php echo 'index.php?m=admin&f=login&a=logout';?>
">退出登录</a></div>
        </div>
        <div class="h5">
            <?php if ($_smarty_tpl->tpl_vars['rid']->value == 1) {?>
            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">用户管理</div></span>
                    <ul class="small">
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=user&a=add';?>
" target="iframe">添加用户</a>
                        </li>
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=user&a=showUser';?>
" target="iframe">查看用户</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">角色管理</div></span>
                    <ul class="small">
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=role&a=add';?>
" target="iframe">添加角色</a>
                        </li>
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=role&a=showRole';?>
" target="iframe">查看角色</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <?php }?>
            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">会员管理</div></span>
                    <ul class="small">
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=member&a=add';?>
" target="iframe">添加会员</a>
                        </li>
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=member&a=show';?>
" target="iframe">查看会员</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">分类管理</div></span>
                    <ul class="small">
                        <li>
                            <a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类</a>
                        </li>
                        <li>
                            <a href="index.php?m=admin&f=category&a=show" target="iframe">查看分类</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">内容管理</div></span>
                    <ul class="small">
                        <li>
                            <a href="<?php echo 'index.php?m=admin&f=container&a=add';?>
" target="iframe">添加内容</a>
                        </li>
                        <li>
                            <a href="posshow.php" target="iframe">查看内容</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <ul>
                <li>
                    <a href="javaScript:;"></a><span><div class="anniu">清空数据表</div></span>
                </li>

            </ul>
        </div>
    </div>
    <div class="right">
        <iframe src="<?php echo 'index.php?m=admin&f=login&a=welcome';?>
" frameborder="0" name="iframe"></iframe>
    </div>
</div>

</body>
</html><?php }
}
