<?php
class role extends main {
    function add(){
        $this->smarty->display("addRole.html");
    }

    function del(){

    }

    function addCon(){
        $rname=$_POST["rname"];
        $rid=$_POST["rid"];
        $db=new db("role");
        $re=$db->select();
        foreach ($re as $v){
            if($rname==$v["rname"]){
                $this->jump("此角色名已存在","index.php?m=admin&f=role&a=add");
                exit;
            }
        }
        if($db->insert("rname='{$rname}',rid='{$rid}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=role&a=add");
        }
    }
    
    function showRole(){
        $db=new db("role");
        $result=$db->select();
        $this->smarty->assign("role",$result);
        $this->smarty->display("showRole.html");
    }


}