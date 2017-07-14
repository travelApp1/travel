<?php
/* Smarty version 3.1.30, created on 2017-07-12 12:37:33
  from "D:\wamp\www\travel\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965fbed74c040_57965735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5996a46e85867f237d58bf497187f2295587ab' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\index.html',
      1 => 1499653938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965fbed74c040_57965735 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <style>
        body, html {
            color: #fff;
        }

        form {
            width: 300px;
            height: 370px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            padding-left: 30px;
            padding-right:30px;
            padding-bottom: 30px;
            background: rgba(0, 177, 45, 0.4);
            margin-top: 10%;
            z-index: 100;
        }

        html {
            overflow: hidden
        }

        canvas {
            position: relative;
        }
        .reset{
            float: right;
        }
    </style>
</head>
<body>

<canvas id="canvas" style="background:#111"></canvas>
<form method="post" action="<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=check">
    <h3 style="text-align: center">用户登陆</h3>
    <div class="form-group">
        <label >Username</label>
        <input type="text" class="form-control" name="uname" placeholder="Username">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" name="upass"  placeholder="Password">
    </div>
    <div class="form-group">
        <label  style="display:block;">Code</label>
        <input type="text" class="form-control yanzheng"  placeholder="Code" name="code">
        <img src="<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=code" alt="" onclick="this.src='<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=code'">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-default reset">Reset</button>
</form>

</body>
<?php echo '<script'; ?>
 type="text/javascript">

    window.onload = function () {
        //获取画布对象
        var canvas = document.getElementById("canvas");
        //获取画布的上下文
        var context = canvas.getContext("2d");
        //获取浏览器屏幕的宽度和高度
        var W = window.innerWidth;
        var H = window.innerHeight;
        //设置canvas的宽度和高度
        canvas.width = W;
        canvas.height = H;
        //每个文字的字体大小
        var fontSize = 16;
        //计算列
        var colunms = Math.floor(W / fontSize);
        //记录每列文字的y轴坐标
        var drops = [];
        //给每一个文字初始化一个起始点的位置
        for (var i = 0; i < colunms; i++) {
            drops.push(0);
        }

        //运动的文字
        var str = "javascript html5 canvas";
        //4:fillText(str,x,y);原理就是去更改y的坐标位置
        //绘画的函数
        function draw() {
            context.fillStyle = "rgba(0,0,0,0.05)";
            context.fillRect(0, 0, W, H);
            //给字体设置样式
            context.font = "700 " + fontSize + "px  微软雅黑";
            //给字体添加颜色
            context.fillStyle = "#00cc33";//可以rgb,hsl, 标准色，十六进制颜色
            //写入画布中
            for (var i = 0; i < colunms; i++) {
                var index = Math.floor(Math.random() * str.length);
                var x = i * fontSize;
                var y = drops[i] * fontSize;
                context.fillText(str[index], x, y);
                //如果要改变时间，肯定就是改变每次他的起点
                if (y >= canvas.height && Math.random() > 0.99) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        };

        function randColor() {
            var r = Math.floor(Math.random() * 256);
            var g = Math.floor(Math.random() * 256);
            var b = Math.floor(Math.random() * 256);
            return "rgb(" + r + "," + g + "," + b + ")";
        }

        draw();
        setInterval(draw, 30);
    };

<?php echo '</script'; ?>
>
</html><?php }
}
