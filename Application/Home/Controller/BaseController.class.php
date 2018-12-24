<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function index(){
    	
        $this->carousel_list();
        $this->link_list();
        $this->display();
    }

    public function ipset(){
        $ip = get_client_ip();
        $this->assign('ip',$ip);
    }

    public function carousel_list(){
        $table = M('carousel');
        $res = $table->select();
        $this->assign('banner',$res);
    }

    public function link_list(){
        $table = M('link');
        $res = $table->order('sort desc')->select();
        $this->assign('link',$res);
    }

    // 随机文章
    public function rand_article(){
        $table =  M('article');
        $res = $table->limit('5')->order('rand()')->field('id,title')->select();
        $this->assign('rand_article',$res);
    }

    //平台判断
    protected function is_mobile(){
        $agent = $_SERVER['HTTP_USER_AGENT'];      
        if(preg_match('/android/i',$agent)
            ||preg_match('/iphone/i',$agent)
            ||preg_match('/ipad/i',$agent)
            ||(preg_match('/windows/i',$agent)
            &&preg_match('/phone/i',$agent))){
            //移动设备
            return true;
        }else {
            return false;
        }        
    }


    public function search_list(){
        if ($this->is_mobile()) {$this->assign('ismobile',1);}    //平台判断
        $this->ipset();
        $this->link_list();
        $this->rand_article();

        $search = I('post.search');
        // dump($search);
        if(!empty($search)){
            $condition['title'] = array('like','%'.$search.'%');//封装模糊查询 赋值到数组
        }
        $table = M('article');
        

        $count = $table->count();
        $page = new \Think\Page($count,5);
        $page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $show = $page->show();
        $this->assign('page',$show);
        

        $res = $table->where($condition)->limit($page->firstRow.','.$page->listRows)->select();
        if (!$res) {
            $res = $table->select();
        }
        // dump($res);
        $this->assign('data',$res);
        $this->display('Base/search_list');

    }


}