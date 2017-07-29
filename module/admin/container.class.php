<?php
class container extends main{
    function add(){
        $type=$_GET["type"];
        $this->smarty->assign("type",$type);
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
        $result=$db->insert("cid={$cid},title='{$title}',con='{$con}',jianjie='{$jianjie}',imgurl='{$imgurl}',keywords='{$keywords}',price={$price},popular={$popular},people={$people},posid='{$posid}'");
        if($result>0){
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

    function delCon(){
        $cid=$_GET["cid"];
        $id=$_GET["id"];
        $db=new db("lists");
        if($db->where("id=$id")->del()){
            $this->jump("删除成功","index.php?m=admin&f=container&a=showCon&cid=$cid");
        }
    }

    function editCon(){
        $cid=$_GET["cid"];
        $id=$_GET["id"];
        $db=new db("lists");
        $result=$db->where("id=$id")->select();
        $this->smarty->assign("listcon",$result);
        $db1=new db("position");
        $position=$db1->select();
        $this->smarty->assign("position",$position);
        $this->smarty->display("editCon.html");
    }

    function editConCon(){
        $id=$_POST["id"];
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
        $result=$db->update("cid={$cid},title='{$title}',con='{$con}',jianjie='{$jianjie}',keywords='{$keywords}',price={$price},people={$people},popular={$popular},imgurl='{$imgurl}',posid='{$posid}' where id={$id}");
        if($result>0){
            echo "<script>alert('修改成功');location.href='index.php?m=admin&f=container&a=editCon&id={$id}&cid={$cid}'</script>";
            exit;
        }
        echo "<script>alert('修改失败');</script>";
        exit;
    }

    function showCon(){
        $cid=$_GET["cid"];
        $db=new db("lists");
        $result=$db->where("cid=$cid")->select();
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("container",$result);
        $this->smarty->display("showCon.html");
    }

    function showCon1(){
        $cid=$_GET["cid"];
        $db=new db("lists");
        $result=$db->where("cid=$cid")->select();
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("container",$result);
        $this->smarty->display("showCon1.html");
    }

    function show(){
        $type=$_GET["type"];
        $db=new db("category");
        $tree=new tree();
        $tree->getTree2(0,0,"-",$db->db,"category",$type);
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("showCategory1.html");
    }

    function upload()
    {
        $obj = new upload();
        $obj->move();
    }

    function removeImg(){
        $id=$_GET["id"];
        $db=new db("lists");
        $result=$db->where("id=$id")->insert("imgurl=''");
        if($result>0){
            echo "ok";
        }
    }
}