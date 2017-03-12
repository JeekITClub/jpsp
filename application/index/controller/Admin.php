<?php
/**
 * Created by PhpStorm.
 * User: wto
 * Date: 2017/3/5 0005
 * Time: 15:52
 */
namespace app\index\controller;
use think\Db;
use think\Request;

Class Admin extends \think\Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    public function admin()
    {
        $request=Request::instance();
        $username=$request->param()['username'];

        return $this->fetch('admin',["name"=>$username]);

           # return $this->fetch('admin',['name'=>'error']);



    }
}

?>