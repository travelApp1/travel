<?php
class lists extends main{
    function add(){
        $db=new db("lists");
        if(isset($_GET["status"])){
            $where="and lists.status=".$_GET["status"];
            $where1="where lists.status=".$_GET["status"];
        }else{
            $where="";
            $where1="";

        }
        $num=$db->select("select count(sid) as sid from lists  ".$where1);
        $page=new page();
        $page->pageNum=5;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
        $this->smarty->assign("pages",$str);

        $sql="select lists.* ,category.cname ,member.mname from lists,category,member where lists.cid=category.cid and lists.mid=member.mid ".$where." order by lists.stime desc ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("listsAdd.html");
    }

    function edit(){
        $sid=$_GET["sid"];
        $mid=$_GET["mid"];
        $db=new db("lists");
        $result=$db->setField("status")->where("sid={$sid}")->select();
        $this->smarty->assign("status",$result[0]["status"]);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("mid",$mid);
        $this->smarty->display("editLists.html");
    }

    function editStatus(){
        $sid=$_POST["sid"];
        $mid=$_POST["mid"];
        $status=$_POST["status"];
        $db=new db("lists");
        if($db->where("sid={$sid}")->update("status={$status}")>0){

            $db=new db("");
            $db->db->autocommit(false);
            $result1=$db->db->query("select * from lists where status=4 and mid={$mid}");

            $num=mysqli_num_rows($result1);

            if($num>3){

                $result2=$db->db->query("update member set mrole=1 where mid={$mid}");
                $result3=!null;


            }else{
                $result2=$db->db->query("update member set mrole=0 where mid={$mid}");

                $result1=$db->db->query("select * from lists where status=3 and mid={$mid}");
               $num= mysqli_num_rows($result1);

               if($num>3){
                   $result3=$db->db->query("update member set mrole=2 where mid={$mid}");
               }
                $result3=!null;
            }

            if($result1&&$result2&&$result3){
                $db->db->commit();
                $db->db->autocommit(true);
               $this->jump("修改成功","index.php?m=admin&f=lists&a=add");
            }else{
                $this->jump("修改失败","index.php?m=admin&f=lists&a=add");
            }


      



        }


    }

}