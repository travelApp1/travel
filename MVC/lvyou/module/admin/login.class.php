<?php

class login extends main
{
    function init()
    {

        if ($this->session->get("logined")) {
            echo "<script>location.href='index.php?m=admin&f=login&a=main'</script>";
            exit;
        }
        $num = mt_rand(50, 100);
        $this->session->set("position", $num);
        $this->smarty->assign("position", $num);
        $this->smarty->display("index.html");
    }

    function code()
    {
        $obj = new code();
        $obj->codeUrl = "demo.ttf";
        $obj->output();

        $obj->current = strtolower($obj->current);
        $this->session->set("code", $obj->current);
    }

    function check()
    {
        $code = strtolower($_POST["code"]);
        if ($code != $this->session->get("code")) {
            $this->jump("验证码有误", "index.php?m=admin&f=login");
            exit;
        }

        $uname = $_POST["uname"];
        $upass = md5($_POST["upass"]);
        $db = new db("user");
        $result = $db->select();
        foreach ($result as $v) {
            if ($uname == $v["uname"]) {
                if ($upass == $v["upass"]) {
                    $this->session->set("login", "yes");
                    $this->session->set("logined", "yes");
                    $this->session->set("uname", $uname);
                    $this->session->set("rid", $v["rid"]);
                    echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                    exit;
                }
            }
        }
        $this->jump("登录失败", "index.php?m=admin&f=login");
    }

    function main()
    {
        if ($this->session->get("login")) {
            $this->smarty->assign("uname", $_SESSION["uname"]);
            $this->smarty->assign("rid", $_SESSION["rid"]);

            $this->smarty->display("main.html");
        } else {
            echo "<script>alert('请登陆');location.href='index.php?m=admin&f=login'</script>";
        }
    }

    function checkcode()
    {
        $position = $_POST["position"];
        if ($position == $_SESSION["position"]) {
            $this->session->set("codeok", "ok");
            echo "ok";

        } else {
            echo "no";
        }
    }

    function logout()
    {
        $this->session->clear();
        echo "<script>alert('退出成功');location.href='index.php?m=admin&f=login'</script>";
    }

    function welcome()
    {
        $this->smarty->display("welcome.html");
    }
}
