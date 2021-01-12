<?php
namespace app\controller;

use app\BaseController;

// 找住在think镇facade村的Db来帮个忙
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        // Db提供了一个query方法，调用该方法可以进行数据查询
        // 使用select * from yunzhi_teacher查询数据库，并输出查询结果
        dump(Db::query('select * from yunzhi_teacher'));
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
