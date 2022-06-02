<?php
namespace app\index\controller;
use think\Db; // 引用数据库操作类
class Index
{
    public function index()
    {
        return var_dump(Db::name('_teacher')->find());
    }
}
