<?php
class category extends main{
    function add(){
        $db=new db("category");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->display("addCategory.html");
    }

    function addCon(){
        $pid=$_POST["pid"];
        $cname=$_POST["cname"];
        $english=$_POST["english"];
        $db=new db("category");
        if($db->insert("pid={$pid},cname='{$cname}',english='{$english}'")){
            $this->jump("添加成功","index.php?m=admin&f=category&a=add");
        }
    }

    function show(){
        $db=new db("category");
        $result=$db->select();
        $this->smarty->assign("category",$result);
        $this->smarty->display("showCategory.html");
    }

    function del()
    {
        $cid = $_GET["cid"];
        $db = new db("category");
        if($db->where("pid=$cid")->select()){
            $this->jump("有子类不可删除", "index.php?m=admin&f=category&a=show");
        }else if ($db->where("cid=$cid")->del() > 0) {
            $this->jump("删除成功", "index.php?m=admin&f=category&a=show");
        }
    }

    function edit()
    {
        $cid = $_GET["cid"];
        $db = new db("category");
        $result = $db->where("cid=$cid")->select();
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->assign("category", $result);
        $this->smarty->display("editCategory.html");
    }

    function editCon()
    {
        $cid = $_GET["cid"];
        $cname = $_POST["cname"];
        if (empty($cname)) {
            echo "分类名称不能为空";
        }
        $pid=$_POST["pid"];
        $db = new db("category");
        $result = $db->where("cid=$cid")->select();
        foreach ($result as $v) {
            if ($pid == $v["pid"] && $cname = $v["cname"]) {
                $this->jump("修改成功", "index.php?m=admin&f=category&a=show");
                exit;
            }
        }
        if ($db->where("cid=$cid")->update("cname='$cname',pid='$pid'") > 0) {
            $this->jump("修改成功", "index.php?m=admin&f=category&a=show");
        }
    }
}