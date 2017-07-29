<?php
/* Smarty version 3.1.30, created on 2017-07-26 05:13:07
  from "D:\wamp\www\travel\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597808c338d005_13684673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897252aa77f402230694a1ad745ed317fa906a1c' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\index\\index.html',
      1 => 1501038785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597808c338d005_13684673 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <style>
        body {
            background: #f3f6f8;
        }

        @font-face {
            font-family: 'iconfont';  /* project id 349046 */
            src: url('//at.alicdn.com/t/font_8yd5ejvzdrt3xr.eot');
            src: url('//at.alicdn.com/t/font_8yd5ejvzdrt3xr.eot?#iefix') format('embedded-opentype'),
            url('//at.alicdn.com/t/font_8yd5ejvzdrt3xr.woff') format('woff'),
            url('//at.alicdn.com/t/font_8yd5ejvzdrt3xr.ttf') format('truetype'),
            url('//at.alicdn.com/t/font_8yd5ejvzdrt3xr.svg#iconfont') format('svg');
        }

        .iconfont {
            font-family: "iconfont";
            font-size: 0.35rem;
            font-style: normal;
            color: #fff;
        }

        header {
            width: 100%;
            height: 5.2rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-index-bg1.png") center center no-repeat;
            background-size: 100%;
            float: left;
            position: relative;
        }

        .bt {
            width: 2.4rem;
            height: 0.8rem;
            margin: 0 auto;
            margin-top: 0.5rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-title.png") center center no-repeat;
            background-size: 100%;
            position: relative;
        }

        .icon1 {
            width: 0.44rem;
            height: 0.44rem;
            background: pink;
            position: absolute;
            top: -0.2rem;
            left: -2.1rem;
            background: url("<?php echo IMG_PATH;?>
/index-zhuye.png") center center no-repeat;
            background-size: 100%;
        }

        .icon2 {
            width: 1rem;
            height: 1rem;
            background: pink;
            position: absolute;
            top: -0.33rem;
            right: -2.6rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-foot4.png") center center no-repeat;
            background-size: 100%;
        }

        .sousuo {
            width: 100%;
            height: 0.7rem;

            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: -1rem;
            margin: auto;
            /*background: pink;*/
        }

        .sousuo1 {
            width: 85%;
            height: 0.6rem;
            outline: none;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            margin: auto;
        }

        .sousuo-tu {
            width: 10%;
            height: 85%;
            background: url("<?php echo IMG_PATH;?>
/zzl-sousuo(1).png") center center no-repeat;
            background-size: 60%;
            float: right;
            position: absolute;
            right: 0.6rem;
            top: 0.05rem;
            margin: auto;
        }

        .situ {
            width: 100%;
            height: 7.5rem;
            position: absolute;
            top: 3rem;
            padding: 0 0.6rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            position: absolute;
        }
        .situ>a{
            width: 47%;
            height: 47%;
        }
        .situ li img{
            width: 1.6rem;
            height:1.6rem;
            margin-left: 22%;
            margin-top: 15%;
        }
        .situ .item1 {
            width: 100%;
            height: 100%;
            background: yellow;
            float: left;
            background: url("<?php echo IMG_PATH;?>
/zzl-1.png") center center no-repeat;
            background-size: 100%;
        }

        .situ .item1>img{
            border-radius: 50%;
        }
        .item1, .item2, .item3, .item4 {
            border-radius: 0.2rem;
            box-shadow: 0.1rem 0.1rem 0.2rem rgba(0, 0, 0, 0.2);
        }

        .situ .item2 {
            width: 47%;
            height: 47%;
            background: yellow;
            float: right;
            background: url("<?php echo IMG_PATH;?>
/zzl-2.png") center center no-repeat;
            background-size: 100%;
        }

        .situ .item3 {
            width: 47%;
            height: 47%;
            background: yellow;
            float: left;
            margin-top: 0.25rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-3.png") center center no-repeat;
            background-size: 100%;
        }

        .situ .item4 {
            width: 47%;
            height: 47%;
            background: yellow;
            float: right;
            margin-top: 0.25rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-4.png") center center no-repeat;
            background-size: 100%;
        }

        li h6 {
            font-size: 0.2rem;
            text-align: center;
            color: #285bed;
            font-weight: 600;
        }

        .tuijian {
            width: 100%;
            height: 4.2rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-bg2.png") center center no-repeat;
            background-size: 100%;
            float: left;
            margin-top: 6rem;
        }

        .xq-k {
            width: 100%;
            height: auto;
            /*background: pink;*/
            float: left;
            margin-bottom: 1rem;
        }

        .xq {
            width: 90%;
            height: 6.5rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-xq.png") center center no-repeat;
            background-size: 110%;
            float: left;
            margin-left: 0.4rem;
            position: relative;
        }

        .xq h6 {
            font-size: 0.3rem;
            position: absolute;
            top: 0.5rem;
            left: 0.5rem;
            color: #285bed;
            font-weight: 600;
        }

        .xq .guanjian {
            width: 100%;
            height: 0.5rem;
            /*background:green;*/
            position: absolute;
            top: 1rem;
            padding: 0 0.4rem;
        }

        .xq .guanjian .gjz {
            width: 20%;
            height: 100%;
            float: left;
            background: url("<?php echo IMG_PATH;?>
/zzl-guanjian.png") center center no-repeat;
            background-size: 100%;
            margin-right: 0.1rem;
            text-align: center;
            font-size: 0.25rem;
            line-height: 0.5rem;
            color: blue;
        }

        .xq img {
            width: 83%;
            height: 3rem;
            position: absolute;
            top: 1.7rem;
            left: 0.5rem;
        }

        .xq .zi {
            width: 83%;
            height: 0.8rem;
            /*background: pink;*/
            position: absolute;
            bottom: 0.7rem;
            left: 0.5rem;
            font-size: 0.2rem;
            line-height: 0.4rem;
            -webkit-line-clamp: 2;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 1rem;
            background: url("<?php echo IMG_PATH;?>
/zzl-index3.png") center center no-repeat;
            background-size: 100%;
        }

        .foot {
            position: absolute;
            margin-top: 0.25rem;
            margin-left: 0.8rem;
        }

        .foot1 {
            position: absolute;
            margin-top: 0.25rem;
            margin-left: 2.8rem;
        }

        .foot2 {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: 4.75rem;
        }

        .foot3 {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: 6.5rem;
        }

        .active {
            color: #3EFFA5;
        }

    </style>
</head>
<body>
<header>
    <div class="bt">
        <div class="icon1"></div>
        <div class="icon2"></div>
    </div>
    <div class="sousuo">
        <input class="sousuo1" type="text" placeholder="请在此查找您需要的内容">
        <div class="sousuo-tu"></div>
    </div>
    <ul class="situ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="index.php?m=index&f=lists">
            <li class="item1">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value["imgurl"];?>
" alt="">
                <h6 ><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</h6>
                <h6><?php echo $_smarty_tpl->tpl_vars['v']->value["english"];?>
</h6>

            </li>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
</header>
<div class="tuijian" style="position: relative">
    <div class="kuai"
         style="position: absolute;width: 0.5rem;height: 0.5rem;top:1.75rem;right:1.65rem;font-size: 0.3rem;text-align: center;color: blue">
        11
    </div>
    <div class="kuai"
         style="position: absolute;width: 0.5rem;height: 0.5rem;top:1.75rem;right:1rem;font-size: 0.3rem;text-align: center;color: blue">
        11
    </div>
    <div class="kuai"
         style="position: absolute;width: 0.5rem;height: 0.5rem;top:1.75rem;right:0.35rem;font-size: 0.3rem;text-align: center;color: blue">
        11
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    var times = document.querySelectorAll(".kuai");
    var target = new Date(2017, 7, 12, 0, 0, 0);
    setInterval(function () {
        var now = new Date();
        var cha = target.getTime() - now.getTime();
        var hours = Math.floor(cha / (1000 * 60 * 60));
        var minutes = Math.floor(cha / (1000 * 60) % 60);
        var seconds = Math.floor(cha / 1000 % 60);

        times[0].innerHTML = hours < 10 ? "0" + hours : hours;
        times[1].innerHTML = minutes < 10 ? "0" + minutes : minutes;
        times[2].innerHTML = seconds < 10 ? "0" + seconds : seconds;
    }, 1000);
<?php echo '</script'; ?>
>


<div class="xq-k">
    <div class="xq">
        <h6>新加坡实惠往返</h6>
        <ul class="guanjian">
            <li class="gjz">travel</li>
            <li class="gjz">travel</li>
        </ul>
        <img src="<?php echo IMG_PATH;?>
/zzl-xq-tu.png" alt="">
        <div class="zi">更面临着极大的人生挑战那就地生存下去更临着极大的人面临着极大的人生挑战那就地生存下去更面临着极大的人生挑战那就地生存下去..</div>
    </div>
    <div class="xq">
        <h6>新加坡实惠往返</h6>
        <ul class="guanjian">
            <li class="gjz">travel</li>
            <li class="gjz">travel</li>
        </ul>
        <img src="<?php echo IMG_PATH;?>
/zzl-xq-tu.png" alt="">
        <div class="zi">更面临着极大的人生挑战那就地生存下去更面临着极大的人临着极大的人生挑战那就地生存下去更面临着极大的人生挑战那就地生存下去..</div>
    </div>
    <div class="xq">
        <h6>新加坡实惠往返</h6>
        <ul class="guanjian">
            <li class="gjz">travel</li>
            <li class="gjz">travel</li>
        </ul>
        <img src="<?php echo IMG_PATH;?>
/zzl-xq-tu.png" alt="">
        <div class="zi">更面临着极大的人生挑战那就地生存下去更面临着极大的人临着极大的人生挑战那就地生存下去更面临着极大的人生挑战那就地生存下去..</div>
    </div>
</div>
<footer>
    <a href="#">
        <div class="iconfont foot active">&#xe63a;</div>
    </a>
    <a href="<?php echo 'index.php?m=index&f=sou&a=init';?>
">
        <div class="iconfont foot1">&#xe616;</div>
    </a>
    <a href="#">
        <div class="iconfont foot2">&#xe62c;</div>
    </a>
    <a href="<?php echo 'index.php?m=index&f=member';?>
">
        <div class="iconfont foot3">&#xe601;</div>
    </a>
</footer>
</body>
<?php echo '<script'; ?>
>
    $(".iconfont").click(function () {
        var index = $(".iconfont").index(this);
        $(".iconfont").filter(".active").removeClass("active").end().eq(index).addClass("active");
    });
    $(".icon2").click(function () {
        location.href = "index.php?m=index&f=member";
    })

<?php echo '</script'; ?>
>
</html><?php }
}
