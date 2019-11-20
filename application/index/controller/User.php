<?php
namespace app\index\controller;
use think\Db;
class User
{
    //Input $input, Output $output
    public function index()
    {

        $admin_cate_id = db::name('admin')->where('id',1)->value('admin_cate_id');
        $where = [];
        $where['admin_cate_id'] = $admin_cate_id + 1;
        if(db::name('admin')->where('id',1)->update($where))
        {
             echo 11;
        }
        else
        {
            echo 22;
        }
    }
}
