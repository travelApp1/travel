<?php
/* Smarty version 3.1.30, created on 2017-07-10 12:21:58
  from "D:\wamp\www\MVC\lvyou\template\admin\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59635546799e19_69742742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf6546eccb22bcbe9864a1e6bb01ea6ce2f7f31' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\lvyou\\template\\admin\\addCon.html',
      1 => 1499682077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59635546799e19_69742742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
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
<form action="addcon-concon.php">
    标&nbsp&nbsp&nbsp题：<input type="text" name="title"><br>
    关键字：<input type="text" name="keywords"><br>
    简介：<br><textarea name="jianjie" id="" cols="30" rows="10"></textarea><br>
    内容：<?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:700px;height:320px;" name="con"><?php echo '</script'; ?>
><br>
    图片：<div class="uploadBox"></div><br>
    <input type="hidden" value="" name="cid">
    <input type="hidden" name="imgurl" class="imgurl">
    推荐位：
    <input type="checkbox" name="posid[]" value="">
    <br>
    <input type="submit" value="添加">

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

    obj.up("upload.php",function (data) {
        console.log(data);
        document.querySelector(".imgurl").value=data;
    });    //跳转到未封装过的php
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
