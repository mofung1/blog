<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

    // public function index(){
    //     $res = M('users')->select();

    //     if (($_SESSION['user_id'] > 0) && ($_SESSION['user_check']==md5($_SESSION['user_id'])) ){
    //         $this->display("Index/index");
    //     }
    //     else{
    //         $this->display('Login/login');
    //     }
    // }
    public function index(){

        $admin =  $_SESSION['admin'];

        if ($admin == "") {
            $this->redirect('login/login');
        }

        $this->assign("admin",$admin);   
        $this->display("Index/index");
    }

    public function welcome(){

        $ip = $_SERVER['REMOTE_ADDR'];
        $server_ip = $_SERVER['SERVER_ADDR'];
        $this->assign('is_mysql',$is_mysql);
        $this->assign('php_version',PHP_VERSION);
        $this->assign('php_os',PHP_OS);
        $this->assign('server',$_SERVER['SERVER_SOFTWARE']);
        $this->assign('ip',$ip);
        $this->assign('server_ip',$server_ip);
        $this->display("Index/welcome");
    }


}