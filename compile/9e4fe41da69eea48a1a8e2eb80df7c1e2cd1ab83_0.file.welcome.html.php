<?php
/* Smarty version 3.1.30, created on 2017-07-10 05:05:13
  from "D:\wamp\www\MVC\lvyou\template\admin\welcome.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5962eee9a3f5b6_53989390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e4fe41da69eea48a1a8e2eb80df7c1e2cd1ab83' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\admin\\welcome.html',
      1 => 1499655290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5962eee9a3f5b6_53989390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400");
        .text-js {
            opacity: 0;
        }

        .cursor {
            display: block;
            position: absolute;
            height: 100%;
            top: 0;
            right: -5px;
            width: 2px;
            /* Change colour of Cursor Here */
            background-color: white;
            z-index: 1;
            -webkit-animation: flash 0.5s none infinite alternate;
            animation: flash 0.5s none infinite alternate;
        }

        @-webkit-keyframes flash {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes flash {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        * {
            margin: 0;
            /*margin-top: 10%;*/
            padding: 0;
            boz-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            background:url("<?php echo IMG_PATH;?>
/himg/100.jpg") center center no-repeat;
            background-size: 100%;
            /*background: linear-gradient(135deg, green, yellow);*/
            height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .headline {
            margin: 20px;
            color: white;
            font-size: 28px;
            text-align: center;
            font-family: "苹方";
        }
        .headline h1 {
            letter-spacing: 1.6px;
            font-weight: 300;
        }

        .twitterLink {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 10px 15px;
            z-index: 3;
        }
        .twitterLink svg {
            width: 25px;
        }
        .xinxi{
            position: absolute;
            right: 10%;
            bottom:18%;
            width: 200px;
            height: auto;
            /*background: black;*/
        }
        p{
            width: 100%;
            text-align: center;
            color: #fff;
            font-size: 20px;
        }

    </style>
</head>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
<body>
    <div class="type-js headline">
        <h1 class="text-js">欢迎进入新闻管理系统</h1>
     </div>
    <div class="xinxi">
        <p>系统信息:<br>5.0.1版本</p>
        <p>操作环境:<br>php+apach+mysql</p>
    </div>

</body>
<?php echo '<script'; ?>
>

    function autoType(elementClass, typingSpeed){
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function(){
            thhis.css("opacity",1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for(var i = 0; i < amntOfChars; i++){
                (function(i,char){
                    setTimeout(function() {
                        newString += char;
                        thhis.text(newString);
                    },i*typingSpeed);
                })(i+1,text[i]);
            }
        },1500);
    }

    $(document).ready(function(){
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js",200);


    });
<?php echo '</script'; ?>
>
</html><?php }
}
