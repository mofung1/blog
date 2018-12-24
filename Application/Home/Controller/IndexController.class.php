<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	// $ip = get_client_ip();
     //    $this->assign('ip',$ip);
        if ($this->is_mobile()) {$this->assign('ismobile',1);}    //平台判断
        $this->ipset();
        $this->carousel_list();
        $this->article_list();
        $this->link_list();
        $this->rand_article();

        $this->display();
    }

    public function article_list(){
         //实例化Doc数据表模型
        $table = M('article');
        //调用count方法查询要显示的数据总记录数
        $count = $table->count();
        //echo $count;die;
        $pageNum = 5; // 每页显示2条数据
        $page = new \Think\Page($count,$pageNum);
        // 分页显示输出
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show = $page->show();
        $this->assign('page',$show);
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $res = $table->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();

        
        
        $this->assign('data',$res);
        // $this->display();
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
}