<?php
/**
 * Created by PhpStorm.
 * User: wto
 * Date: 2017/3/5 0005
 * Time: 15:52
 */
namespace app\admin\controller;

Class Index
{
    public function index()
    {

    }
}
/*
*文件上传类
**/
class upfile{
    private $file_size;//上传源文件大小
    private $file_tem;//上传文件临时储存名
    private $file_name;//上传文件名
    private $file_type;//上传文件类型
    private $file_max_size=2000000;//允许文件上传最大
    private $file_folder="uploadFiles";//文件上传路径
    private $over_write=false;//是否覆盖同名文件
//允许上传图片的类型
    private $allow_type=array('image/jpg','image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','image/x-png');


//构造类，file:上传文件域
    function __construct($file){
        $this->file_name=$_FILES[$file]['name'];//客户端原文件名
        $this->file_type=$_FILES[$file]['type'];//文件类型
        $this->file_tem=$_FILES[$file]['tmp_name'];//储存的临时文件名，一般是系统默认
        $this->file_size=$_FILES[$file]['size'];//文件大小
    }

//如果文件夹不存在则创建文件夹
    function creatFolder($f_path){
        if(!file_exists($f_path)){
            mkdir($f_path,0777);
        }
    }

//判断文件是不是超过上传限制
    function is_big(){
        if($this->file_size>$this->file_max_size){
            echo "文件太大，超过限制！";
            exit;
        }
    }

//检查文件类型
    function check_type(){
        if(!in_array($this->file_type,$this->allow_type)){
            echo "上传文件类型不正确";
            exit;
        }
    }

//检查文件是否存在
    function check_file_name(){
        if(!file_exists($this->file_tem)){
            echo "上传文件不存在";
            exit;
        }
    }

//检查是否有同名文件，是否覆盖
    function check_same_file($filename){
        if(file_exists($filename)&&$this->over_write!=true){
            echo "同名文件已存在！";
            exit;
        }
    }

//移动文件
    function move_file($filename,$destination){
        if(!move_uploaded_file($filename,$destination)){
            echo "移动文件出错";
            exit;
        }
    }

//检查文件是否是通过 HTTP POST 上传的
    function is_upload_file(){
        if(!is_uploaded_file($this->file_tem)){
            echo "文件不存在";
            exit;
        }
    }

//获得文件后缀名
    function getext(){
        $ext=$this->file_name;
        $extstr=explode('.',$ext);
        $count=count($extstr)-1;
        return $extstr[$count];
    }

//新建文件名
    function set_name(){
        return time().".".$this->getext();
    }

//建立以年月日为文件夹名
    function creat_mulu(){
        $this->creatFolder("../../upload/".date(Ymd));
        return "upload/".date(Ymd);
    }

//生成的文件名
    function files_name(){
        $name=$this->set_name();
        $folder=$this->creat_mulu();
        return "../../".$folder."/".$name;
    }

//上传文件
    function upload_file(){
        $f_name=$this->files_name();
        move_uploaded_file($this->file_tem,$f_name);
        return $f_name;
    }


}
?>