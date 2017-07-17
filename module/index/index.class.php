<?php
class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $this->smarty->display("hkb-sp.html");
    }

    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
    }

    function show(){
        $db=new db("category");
        $result=$db->select();
        $this->smarty->assign("category",$result);
        $this->smarty->display("index.html");
    }
}