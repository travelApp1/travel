<?php
class xiugai extends indexMain{
    function init(){
        $flag=$this->session->get("nicheng");
        $mid=$this->session->get("mid");
        $this->smarty->assign("mid",$mid);
        $this->smarty->assign("flag",$flag);
        $this->smarty->display("zzl-personal-xiugai.html");
    }
    function photo(){
        $this->smarty->display("zzl-photo.html");
    }
    function editname(){
        $this->smarty->assign("nicheng",$this->session->get("nicheng"));
        $this->smarty->display("zzl-editName.html");
    }
    function editpass(){

        $this->smarty->display("zzl-editPass.html");
    }
    function loginout(){
        $this->session->clear();
        echo "<script>alert('退出登录');location.href='index.php?m=index&f=index&a=show';</script>";
    }
    function addNicheng(){
        $mid=$_GET["mid"];
        $this->smarty->assign("mid",$mid);
        $this->smarty->display("addNicheng.html");
    }

    function addNcCon(){
        $nicheneg=$_POST["nicheng"];
        $mid=$_POST["mid"];
        echo "$nicheneg";
        echo "$mid";
        exit;
        $this->session->set("nicheng",$nicheneg);
        $db=new db("member");
        if($db->where("mid=$mid")->update("nicheng=$nicheneg")>0){
            echo "ok";
        }else{
            echo "error";
        }
    }

    function check(){
        alert(1);
        $oldpass = $_POST["oldpass"];
        $upass = $_POST["upass"];
        $upass1 = $_POST["upass1"];
        $mid=$this->session->get("mid");
        if (empty($mpass)) {
            echo "密码不能为空";
            exit;
        }

        $db = new db("member");
        $result = $db->select();
        foreach ($result as $v) {
            if ($v["mpass"] == md5($oldpass)) {
                if($upass==$upass1){
                    if( $db->where("mid=$mid")->update("mpass=$upass")){
                        echo "ok";
                    }
                    echo "修改失败";
                }
            }else{
                echo "旧密码不正确";
                exit;
            }
        }
    }
}