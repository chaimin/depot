<?php
namespace app\index\controller;
use think\Db;
class Index
{
    public function index(Input $input, Output $output)
    {
//        echo 111;
                $admin_cate_id = db::name('admin')->where('id',1)->value('admin_cate_id');
        $where = [];
        $where['admin_cate_id'] = $admin_cate_id + 1;
        db::name('admin')->where('id',1)->update($where);
    }

    public function foraa()
    {
        echo 222;
    }

    public function foraa11()
    {
        echo 444;
    }
    protected function execute(Input $input, Output $output)
    {
        echo 333;
//        $admin_cate_id = db::name('admin')->where('id',1)->value('admin_cate_id');
//        $where = [];
//        $where['admin_cate_id'] = $admin_cate_id + 1;
//        if(db::name('admin')->where('id',1)->update($where))
//        {
//            echo 11;
//        }
//        else
//        {
//            echo 22;
//        }
    }
}
