<?php
/**
 * Created by PhpStorm.
 * User: wto
 * Date: 2017/3/5 0005
 * Time: 15:52
 */
namespace app\index\controller;
use app\index\model\Club;
use think\Db;
use think\Request;
use user\controller\User;

Class Admin extends \think\Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    public function admin()
    {

        /*
         *!empty($_POST['username'])&&!empty($_POST['password'])
         */
        if(1==1) {
            #$username =$_POST['username'];
            #$password =$_POST['password'];
            /*
             * $username="admin"&&$password="jpsp0302"
             */
            if(1==1){
                function getData(){
                    global $tablecontent;
                    for($i=1;$i<=10;$i++){
                        $data=Club::get($i);
                        $tablecontent=$tablecontent."<td>".$data['clubid']."</td>".
                        "<td>".$data['clubname']."</td>".
                        "<td>".$data['week1']."</td>".
                        "<td>".$data['week2']."</td>".
                        "<td>".$data['week3']."</td>".
                        "<td>".$data['week4']."</td>".
                        "<td>".$data['week5']."</td>".
                        "<td>".$data['week6']."</td>".
                        "<td>".$data['week7']."</td>".
                        "<td>".$data['week8']."</td>".
                        "<td>".$data['week9']."</td>".
                        "<td>".$data['week10']."</td>".
                        "<td>".$data['week11']."</td>".
                        "<td>".$data['week12']."</td>".
                        "<td>".$data['week13']."</td>".
                        "<td>".$data['week14']."</td>".
                        "<td>".$data['week15']."</td>".
                        "<td>".$data['week16']."</td>".
                        "<td>".$data['week17']."</td>".
                        "<td>".$data['week18']."</td>".
                        "<td>".$data['week19']."</td>".
                        "<td>".$data['week20']."</td";
                    }
                    return $tablecontent;
                }

                $username="1";
                $table=getData();
               return $this->fetch('admin',["name"=>$username,"tablecontent"=>$table]);
            }else{
                $this->error('密码错误');
            }
        }else{
            $this->error("未填写密码");
        }




           # return $this->fetch('admin',['name'=>'error']);



    }
}

?>
