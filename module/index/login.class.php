<?php

class login extends indexMain
{
    function init()
    {
        $this->smarty->display("login.html");
    }

    function reg1()
    {
        $this->smarty->display("reg.html");
    }

    function reg()
    {

        $mname = $_POST["mname"];

        if (empty($mname)) {
            echo "用户不能为空";
            exit;
        }
        $db = new db("member");
        $result = $db->where("mname='{$mname}'")->select();
        if (count($result) > 0) {
            echo "用户名存在";
            exit;
        }

        $mpass = $_POST["mpass"];
        if (empty($mpass)) {
            echo "密码不能为空";
            exit;
        }
        $mpass1 = $_POST["mpass1"];
        if (empty($mpass1)) {
            echo "确认密码不能为空";
            exit;
        }

        if ($mpass != $mpass1) {
            echo "两次密码不一致";
            exit;
        }

        $mpass = md5($mpass);
        $mphone = $_POST["mphone"];
        if ($db->insert("mname='{$mname}',mpass='{$mpass}',mphone='{$mphone}'")) {
            echo "ok";
            exit;
        }
        echo "用户名或密码有误";
        exit();
    }

    function login1()
    {
        if ($this->session->get("indexLogin")) {
            $this->jump("已登录", "index.php?m=index&f=index&a=show");
        }
        $this->smarty->display("login1.html");
    }

    function willLogin()
    {
        $mname = $_POST["mname"];
        if (empty($mname)) {
            echo "用户不能为空";
            exit;
        }
        $mpass = $_POST["mpass"];
        if (empty($mpass)) {
            echo "密码不能为空";
            exit;
        }
        $db = new db("member");
        $result = $db->select();

        foreach ($result as $v) {
            if ($v["mname"] == $mname) {
                if ($v["mpass"] == md5($mpass)) {
                    $this->session->set("indexLogin", "yes");
                    $this->session->set("mname", $v["mname"]);
                    $this->session->set("mid", $v["mid"]);
                    $this->session->set("mphoto", $v["mphoto"]);
//                    $this->session->set("nicheng",$v["nicheng"]);
//                    $this->session->set("mrole",$v["mrole"]);
//                    $near=$this->session->get("near")?$this->session->get("near"):"index.php";

                    echo "ok";
                    exit();
                }
            }
        }

        echo "用户名或密码有误";
        exit();
    }

    function logout()
    {
        $this->session->clear();
        echo "ok";
    }
}