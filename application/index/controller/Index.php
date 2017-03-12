<?php
namespace app\index\controller;
use think\Request;

class Index extends \think\Controller
{
    public function index()
    {
        $url=ROOT_PATH.'/public/'.DS.'download'.DS."post.doc";
        $str="<a href=\"".$url."\"".">下载表格</a>";
        return $this->fetch('index',
            ["url"=>$str]
        );
    }

    public function upload(Request $request)
    {
        $file=$request->file('upload_file');
        if(empty($file)){
            $this->error('请选择上传文件');
        }
        $week=$_POST['week'];
        $club=$_POST['club'];
        $file_save_name='Week'.$week."Club".$club;
        $info=$file->validate(['ext'=>'docx,doc'])->move(ROOT_PATH.'public'.DS.'uploads',$file_save_name);
        if($info){
            $this->success('文件上传成功：'.$info->getRealPath());
        }else{
            $this->error($file->getError());
        }
        return $this->fetch('upload', ['upload_message' => $_FILES['upload_file']['name']]);
    }
}
?>
