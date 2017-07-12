<?php

class member extends main
{

    function add()
    {
        $this->smarty->display("addMember.html");
    }

    function addCon()
    {
        $mname = $_POST["mname"];
        if (empty($mname)) {
            echo "会员名称不能为空";
        }
        $mpass = $_POST["mpass"];
        if (empty($mpass)) {
            echo "密码不能为空";
        }

        $nicheng = $_POST["nicheng"];
        $mphoto = $_POST["imgurl"];
        $db = new db("member");
        $re = $db->select();
        foreach ($re as $v) {
            if ($mname == $v["mname"]) {
                $this->jump("此会员名已存在", "index.php?m=admin&f=member&a=add");
                exit;
            }
        }
        $mpass = md5($mpass);
        if ($db->insert("mname='{$mname}',mpass='{$mpass}',nicheng='{$nicheng}',mphoto='{$mphoto}'") > 0) {
            $this->jump("添加成功", "index.php?m=admin&f=member&a=add");
        }
    }

    function upload()
    {
        $obj = new upload();
        $obj->move();
    }

    function del()
    {
        $mid = $_GET["mid"];
        $db = new db("member");
        if ($db->where("mid=$mid")->del() > 0) {
            $this->jump("删除成功", "index.php?m=admin&f=member&a=show");
        }
    }

    function edit()
    {
        $mid = $_GET["mid"];
        $db = new db("member");
        $result = $db->where("mid=$mid")->select();
        $this->smarty->assign("result", $result);
        $this->smarty->display("editMember.html");
    }

    function editCon()
    {
        $mid = $_GET["mid"];
        $mname = $_POST["mname"];
        if (empty($mname)) {
            echo "会员名称不能为空";
        }
        $nicheng = $_POST["nicheng"];
        if (empty($nicheng)) {
            echo "昵称不能为空";
        }
        $db = new db("member");
        $result = $db->where("mid=$mid")->select();
        foreach ($result as $v) {
            if ($mname == $v["mname"] && $nicheng = $v["nicheng"]) {
                $this->jump("修改成功", "index.php?m=admin&f=member&a=show");
                exit;
            }
        }
        if ($db->where("mid=$mid")->update("mname='$mname',nicheng='$nicheng'") > 0) {
            $this->jump("修改成功", "index.php?m=admin&f=member&a=show");
        }
    }

    function show()
    {
        $db = new db("member");

        $result = $db->select();
        $this->smarty->assign("result", $result);

        $this->smarty->display("showMember.html");
    }
}