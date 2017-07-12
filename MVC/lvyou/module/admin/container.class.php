<?php
class container extends main{
    function add(){
        $this->smarty->display("addC.html");
    }

    function addCon(){
        $pid=$_POST["pid"];
        $cname=$_POST["cname"];
        $db=new db("category");
        if($db->insert("pid={$pid},cname='{$cname}'")){
            $this->jump("添加成功","index.php?m=admin&f=category&a=add");
        }
    }

    function showCat(){
        $db=new db("");
        $tree=new tree();
        $tree->getTree3(0, 0, $db, "category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("categoryCon.html");


//        $db=new db("category");
//        $result=$db->select();
//        $this->smarty->assign("category",$result);
//        $this->smarty->display("categoryCon.html");
    }
}