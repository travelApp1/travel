<?php
class container extends main{
    function add(){
        $this->smarty->display("addC.html");
    }

    function insertCon(){
        $cid=$_POST["cid"];
        $title=$_POST["title"];
        $con=$_POST["con"];
        $jianjie=$_POST["jianjie"];
        $imgurl=$_POST["imgurl"];
        $keywords=$_POST["keywords"];
        $price=$_POST["price"];
        $popular=$_POST["popular"];
        $people=$_POST["people"];
        $posid=empty($_POST["posid"])?"0":implode(";",$_POST["posid"]);
        $db=new db("lists");
        if($db->insert("cid={$cid},title='{$title}',con='{$con}',jianjie='{$jianjie}',keywords='{$keywords}',price={$price},people={$people},popular={$popular},imgurl='{$imgurl}',posid='{$posid}'")){
           echo "ok";
        }
    }

    function addCon(){
        $cid=$_GET["cid"];
        $this->smarty->assign("cid",$cid);
        $db=new db("position");
        $result=$db->select();
        $this->smarty->assign("position",$result);
        $this->smarty->display("addCon.html");
    }




    function showCon(){
        $cid=$_GET["cid"];
        $db=new db("lists");
        $result=$db->where("cid=$cid")->select();
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("container",$result);
        $this->smarty->display("showCon.html");
    }

    function show(){
        $db=new db("category");
        $tree=new tree();
        $tree->getTree2(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("showCategory1.html");
    }

    function upload()
    {
        $obj = new upload();
        $obj->move();
    }
}