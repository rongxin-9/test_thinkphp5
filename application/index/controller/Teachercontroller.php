<?php
namespace app\index\controller;
use think\Controller;   // 用于与V层进行数据传递
use app\common\model\Teacher;   // 教师模型 带有别名
/**
* 教师管理
*/

class TeacherController extends Controller
{
	public function index()
    {
        $Teacher = new Teacher;
        $teachers = $Teacher->select();
        
        // 向V层传数据
        $this->assign('teachers',$teachers);
        
        // 取回打包后的数据
        $htmls=$this->fetch();
        
        // 将数据返回给用户
        return $htmls;
        
     //   // 获取第0个数据
//        $teacher = $teachers[0];
//        
//        // 获取第0个数据
//        dump($Teacher,1,'$Teacher');
//        dump($teachers,1,'$teachers');
//        dump($teacher,1,'$teacher');
//        var_dump($teacher->getData('name'));
//        echo $teacher->getData('name');
//        return $teacher->getData('name');
    }
}