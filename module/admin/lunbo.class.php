<?php

class lunbo extends main{

    function init(){
        $db=new db("lists");
        $result=$db->setField("id,title")->select();
        $this->smarty->assign("title",$result);
        $this->smarty->display("addLun.html");
    }

    function addLunCon(){
        $this->smarty->display("addLunCon.html");
    }
    function addLun(){
        $this->smarty->display("addLunCon.html");
    }

}
