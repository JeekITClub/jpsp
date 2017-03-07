<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $view=new View();
        return $view->fetch($id,$name,$datetime,$url)
    }
}
