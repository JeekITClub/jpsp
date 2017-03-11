<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    public function index()
    {
        parent::__construct();
        return $this->fetch('index',
            ['id'=>'1', 'name'=>1, 'datetime'=>1,"url"=>'1']
        );
    }

    public function upload(){
        parent::__construct();
        $file = request()->file('upload_file');
        $path=ROOT_PATH . 'public' . DS . 'uploads';

        $info = $file->move($path);
        if($info){
        // 成功上传后 获取上传信息
        // 输出 jpg
            echo $info->getExtension();
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg

            echo $info->getFilename();

        }else{
        // 上传失败获取错误信息
            echo $file->getError();
        }

        return $this->fetch('upload',['upload_message'=>$path]);
}
}
