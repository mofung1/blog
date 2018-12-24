<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {

    public function index(){

        $this->login();
    }

//登录
    public function login(){

        $this->display("Login/login");
    }

//验证
    public function login_validate(){

        if ($_POST) {
            $name = I('admin_name');
            $password = I('password');
            if($name == "")$this->ajaxReturn(11);   //空
            if($password == "")$this->ajaxReturn(12);   //空

            $table = M('admin');
            $condition['admin_name'] = array('eq', $name);
            $res=$table->where($condition)->find();

            if ($res) {
                if($res['password'] == md5($name.$password)){

                    $_SESSION['admin'] = $name;
                    $_SESSION['admin_id'] = $res['id'];
                    $this->ajaxReturn(1);       // 成功
                }
                else {$this->ajaxReturn(2);}   //失败
            }
            else {$this->ajaxReturn(3);}    // 不存在
        }

        unset($_SESSION);
    }
    
//验证
    public function logout_validate(){

        unset($_SESSION['admin']);
        unset($_SESSION['admin_id']);
        $this->ajaxReturn(1);       // 成功

    }


}