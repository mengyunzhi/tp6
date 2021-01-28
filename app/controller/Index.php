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

        // 分别获取张三和李四
        $zhangsan = $teachers[0];
        $lisi = $teachers[1];

        return "<table>
                    <tr>
                        <th>序号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>邮箱</th>
                        <th>用户名</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>$zhangsan[name]</td>
                        <td>$zhangsan[sex]</td>
                        <td>$zhangsan[email]</td>
                        <td>$zhangsan[username]</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>$lisi[name]</td>
                        <td>$lisi[sex]</td>
                        <td>$lisi[email]</td>
                        <td>$lisi[username]</td>
                    </tr>
                </table>";
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
