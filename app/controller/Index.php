<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        // 找app\model命名空间的Teacher来帮忙
        $teacher = new \app\model\Teacher();

        // 获取teacher表中的所有数据
        $teachers = $teacher->select();
        dump($teachers);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
