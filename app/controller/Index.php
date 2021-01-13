<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        // think镇facade村的Db提供了一个query方法，调用该方法可以进行数据查询
        // 使用select * from yunzhi_teacher查询数据库，并输出查询结果
        dump(\think\facade\Db::query('select * from yunzhi_teacher'));
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
