<?php
/* Smarty version 3.1.30, created on 2017-07-15 00:39:14
  from "D:\wamp\www\travel\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969481275c5b0_87325005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ac078e596a09550aa1615efaff3b63869d3d1e' => 
    array (
      0 => 'D:\\wamp\\www\\travel\\template\\admin\\addCon.html',
      1 => 1500071927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969481275c5b0_87325005 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
<form action="index.php?m=admin&f=container&a=insertCon" class="box">
    标&nbsp&nbsp&nbsp题：<input type="text" name="title"><br>
    价&nbsp&nbsp&nbsp格：<input type="text" name="price"><br>
    关键字：<input type="text" name="keywords"><br>
    人员数：<input type="text" name="people"><br>
    欢迎度：<input type="text" name="popular"><br>
    简介：<br><textarea name="jianjie" id="" cols="30" rows="10"></textarea><br>
    内容：
    <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:700px;height:320px;" name="con"><?php echo '</script'; ?>
>
    <br>
    图片：
    <div class="uploadBox"></div>
    <br>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" name="cid">
    <input type="hidden" name="imgurl" class="imgurl">
    推荐位：
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
:
    <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <br>
    <input type="button" class="add" value="添加">

</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');

    var obj = new upload();
    obj.size = 1024 * 1024 * 10;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadBox")
    });

    obj.up("index.php?m=admin&f=container&a=upload", function (data) {
        console.log(data);
        document.querySelector(".imgurl").value = data;
    });    //跳转到未封装过的php

    $(".add").click(function () {
        var str = $(".box").serialize();
        $.ajax({
            url: "index.php?m=admin&f=container&a=insertCon",
            type: "post",
            data: str,
            success: function (e) {
                alert(e)
                if (e=="ok") {
                    alert("插入成功");
                    location.href="index.php?m=admin&f=container&a=addCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
";
                }
            }
        });
    });


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
