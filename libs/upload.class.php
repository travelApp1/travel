<?php
//1.接口 2.接收数据 3.数据检查 4.移动到指定地方
class upload{
    public $type="image/jpej,image/png";
    public $size;
    public $root="upload";
    public $fullpath="";
    function __construct(){
        $this->size=1024*1024*10;
    }
    //1.接收数据
    private function accept($attr="file"){
        $this->data=$_FILES[$attr];
    }
    //2.验证
    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if(strrchr($this->type,$this->data["type"])&&$this->data["size"]<$this->size){
                return true;
            }
        }
        return false;
    }
    //3.定义路径
    private function customUrl(){
        //根目录是否存在
        if(!is_dir($this->root)){
            mkdir($this->root);
        }
        //创建分录目录
        $path=$this->root."/".date("y-m-d");
        if(!is_dir($path)){
            mkdir($path);
        }
        //创建文件的随机名字
        $name=md5(time().mt_rand(0,10000)).$this->data["name"];
        //整合完整的路径
        $this->fullpath=$path."/".$name;
    }
    //移动文件
    private function moveFile(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }

    public function move(){
        $this->accept();
        if( $this->check()){
            $this->customUrl();
            $this->moveFile();
            echo $this->fullpath;

        }else{
            echo "error";
        }

    }
}

//$obj=new upload();
//$obj->move();
////move_uploaded_file($_FILES["file"]["tmp_name"],"upload/");
//exit;
//
//header("content-type:text/html;charset=utf-8");
////1.判断用户上传的文件是不是用户要上传的 放在临时目录里面
////2.判断文件的大小类型 支持的类型网站上查
//
//$type=array("image/png","image/jpeg");
//$size=1024*1024*10;
////$_FILES  用于文件获取 相当于POST
//if(is_uploaded_file($_FILES["file"]["tmp_name"])){
//
//    $dir="upload";
//    if(!is_dir($dir)){
//        mkdir($dir);
//    }
//    $path=date("y-m-d");
//    if(!is_dir($dir."/".$path)){
//        mkdir($dir."/".$path);
//    }
//    $name=md5(time().mt_rand(0,100000)).$_FILES["file"]["name"];//时间戳 each time() mt_rand(0，10000) 随机数
//    $fullpath=$dir."/".$path."/".$name;
//    move_uploaded_file($_FILES["file"]["tmp_name"],$fullpath);//移动上传的文件 （名字，路径）

//}