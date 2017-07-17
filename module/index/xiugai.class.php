<?php
class xiugai extends indexMain{
    function init(){
        $mid=$this->session->get("mid");
        $this->smarty->assign("mid",$mid);
        $this->smarty->assign("flag",$this->session->get("nicheng"));
        $this->smarty->display("zzl-personal-xiugai.html");
    }
    function photo(){
        $this->smarty->assign("mphoto",$this->session->get("mphoto"));
        $this->smarty->display("zzl-photo.html");
    }
    function editNicheng(){
        $mid=$_GET["mid"];
        $this->smarty->assign("mid",$mid);
        $this->smarty->assign("nicheng",$this->session->get("nicheng"));
        $this->smarty->display("zzl-editNicheng.html");
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
        $db=new db("member");
        if(empty($nicheneg)){
            echo "昵称不能为空";
            exit;
        }
        if($db->where("nicheng=$nicheneg")->select()){
            echo "昵称已存在";
            exit;
        }
        if($db->where("mid=$mid")->update("nicheng='$nicheneg'")>0){
            $this->session->set("nicheng",$nicheneg);
            echo "ok";
            exit;
        }
        echo "error";
    }

    function check(){
        $oldpass = $_POST["oldpass"];
        $upass = $_POST["upass"];
        $upass1 = $_POST["upass1"];
        $mid=$this->session->get("mid");
        $db = new db("member");
        $result = $db->select();
        foreach ($result as $v) {
            if ($v["mpass"] == md5($oldpass)) {
                if($upass==$upass1){
                    $upass=md5($upass);
                    if( $db->where("mid=$mid")->update("mpass='$upass'")){
                        $this->session->clear();
                        echo "<script>alert('ok');location.href='index.php?m=index&f=login&a=login1';</script>";
                        exit();
                    }
                    echo "<script>alert('失败');</script>";
                    exit();
                }
            }else{
                echo "旧密码不正确";
                exit;
            }
        }
    }
    
    function editPhoto(){
        $this->smarty->display("eidtPhoto.html");
    }
    function editPhotoCon(){
        $mid=$this->session->get("mid");
        $imgurl=$_POST["imgurl"];
        $db=new db("member");
        $result=$db->update("mphoto='{$imgurl}' where mid={$mid}");
        if($result>0){
            $this->session->set("mphoto",$imgurl);
            echo "<script>alert('修改头像成功');location.href='index.php?m=index&f=xiugai&a=photo';</script>";
            exit;
        }else{
            echo "<script>alert('修改头像失败');</script>";
            exit;
        }
    }
    function upload(){
        $obj = new upload();
        $obj->move();
    }
}