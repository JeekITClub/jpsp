<?php
namespace app\index\controller;
use think\Request;
use think\Db;
class Index extends \think\Controller
{
    /**
     * @return mixed
     */
    public function index()
    {

        return $this->fetch('index');

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
            Db::connect('mysql://root:@127.0.0.1:3306/jpsp#utf8');
            $week_sql_str='week'.$week;
            Db::table("club")->where('clubid',$club)->update([$week_sql_str=>1]);
            return $this->fetch('upload',['upload_message'=>'上传成功']);
            #$this->success('文件上传成功：'.$info->getRealPath());
        }else{
            $this->error($file->getError());
        }

    }
}
?>
