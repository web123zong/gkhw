<?php


namespace app\admin\controller;

use think\Request;
class Test
{
    public function hello($id,$name,$age)
    {
        var_dump(input('param.'));die;
        return $id.'|'.$name.'|'.$age;
    }
}