<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends IndexController {

    public function index(){
        $this->admin_list();
    }



    //1管理员列表
    public function admin_list(){
        $res = M('admin')->field('id,admin_name,add_time')->select();
        $this->assign('list', $res);
        $this->display();
    }


    //2管理员--密码修改
    public function admin_pwd_edit() {
        if ($_GET) {
            $res = M('admin')->where(array('id'=>$_GET['id']))->field('id,admin_name')->find();
            $this->assign('data', $res);
            $this->display();
        }
    }


    //2管理员密码修改验证
    public function admin_pwd_validate() {

        $admin_id = I('id');
        $old_pwd = I('old_pwd');
        $password = I('password');
        $admin_name = I('admin_name');
        
        if ($_POST) {
            if ($old_pwd == "") {$this->ajaxReturn(11);}
            if ($password == "") {$this->ajaxReturn(12);}

            $table = M('admin');
            $condition['id']=array('eq',$admin_id);
            $res=$table->where($condition)->find();

            if ($res) {
                if ($res['password'] == md5($admin_name.$old_pwd)) {
                    $data['password'] = md5($admin_name.$password);
                    $res=$table->where($condition)->save($data);

                    if ($res !== false) {$this->ajaxReturn(1);} // 成功
                    else {$this->ajaxReturn(2);}    // 失败
                } else {$this->ajaxReturn(21);}  // 原始密码错误

            } else {$this->ajaxReturn(3);}  // 不存在
        }
    }

    //3管理员添加验证
    public function admin_add_validate(){

        $admin_name = I('admin_name');
        $password = I('password');
        $password2 = I('password2');

        if($_POST){
            if ($admin_name == "") {$this->ajaxReturn(11);}
            if ($password == "") {$this->ajaxReturn(12);}
            if ($password2 == "") {$this->ajaxReturn(13);}

            if ($password !== $password2) {$this->ajaxReturn(14);}

            $data['admin_name'] = $admin_name;
            $condition['admin_name']=array('eq',$data['admin_name']);
            $table = M('admin');
            $res=$table->where($condition)->find();

            if ($res) {$this->ajaxReturn(21);}     // 已存在
            else{
                $data['admin_name'] = $admin_name;
                $data['password']=md5($admin_name.$password);
                $data['add_time']=time();

                $res=$table->add($data);

                if ($res) {$this->ajaxReturn(1);}
                else {$this->ajaxReturn(2);}
            }
        }
    }

    //4管理员删除验证×
    
    public function admin_del_validate(){

        if($_POST){
            $table = M('admin');
            $id = I('id');
            $condition['id'] = array('eq',$id); $res=$table->where($condition)->find(); // 根据条件更新记录

            if($res){
                $res=$table->where($condition)->delete(); // 根据条件更新记录

                if ($res) {$this->ajaxReturn(1);}   //成功
                else {$this->ajaxReturn(2);}   //失败
            }
            else {$this->ajaxReturn(3);}   //不存在
        }
    }
    

}