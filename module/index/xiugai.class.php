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
        $nicheng=$_POST["nicheng"];
        $mid=$_POST["mid"];
        $db=new db("member");
        if(empty($nicheng)){
            echo "昵称不能为空";
            exit;
        }
        if($db->where("nicheng='$nicheng'")->select()){
            echo "昵称已存在";
            exit;
        }
        $result=$db->where("mid=$mid")->update("nicheng='{$nicheng}'");
        if($result>0){
            $this->session->set("nicheng",$nicheng);
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
        $result = $db->where("mid=$mid")->select();
        $oldpass=md5($oldpass);
        foreach ($result as $v) {
            if ($v["mpass"] == $oldpass) {
                if($upass==$upass1){
                    $upass=md5($upass);
                    if( $db->where("mid=$mid")->update("mpass='$upass'")){
                        $this->session->clear();
                        $this->jump("修改成功","index.php?m=index&f=login&a=login1");
                        exit();
                    }
                    $this->jump("修改失败","index.php?m=index&f=xiugai&a=editpass");
                    exit();
                }
            }else{
                $this->jump("旧密码不正确","index.php?m=index&f=xiugai&a=editpass");
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
            echo "<script>alert('修改头像成功');location.href='index.php?m=index&f=member&a=init';</script>";
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