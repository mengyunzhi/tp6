<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
        public function index()
        {
            // think镇facade村的Db提供了一个query方法，调用该方法可以进行数据查询
            // 使用select * from yunzhi_teacher查询数据库
            $teachers = \think\facade\Db::query('select * from yunzhi_teacher');
            
            // 调用tp提供的dump方法，友好的输出查询结果
            dump($teachers);

            dump($teachers[0]);

            dump($teachers[0]['name']);

            echo $teachers[0]['name'];
        }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
