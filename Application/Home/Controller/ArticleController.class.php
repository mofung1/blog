<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
        if ($this->is_mobile()) {$this->assign('ismobile',1);}    //平台判断
        $this->ipset();
    	$this->link_list();
    	$this->article_list();
        $this->rand_article();
        $this->display('Article/index');
    }

    public function link_list(){
        $table = M('link');
        $res = $table->order('sort desc')->select();
        $this->assign('link',$res);
    }


    public function article_list(){
    	 //实例化Doc数据表模型
        $table = M('article');
        //调用count方法查询要显示的数据总记录数
        $count = $table->count();
        //echo $count;die;
        $page = new \Think\Page($count,5);
        // 分页显示输出
        $page->setConfig('first','首页');
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');
        $show = $page->show();
        
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $condition = array('cate'=>'PHP');
        $res = $table->where($condition)->limit($page->firstRow.','.$page->listRows)->select();

        $this->assign('data',$res);
        $this->assign('page',$show);
        // $this->display();
    }

    public function article_info(){

        $id = I('id');
        $table = M('article');
        $condition = array('id'=>$id);
        $res = $table->where($condition)->find();


        // if ($code == $_SESSION['code'] ) {
            // unset($_SESSION['code']);
            $res2 = $table->where($condition)->setInc('visitor',1);                
        // }

        $this->link_list();
        $this->rand_article();
        $this->ipset();
        if ($this->is_mobile()) {$this->assign('ismobile',1);}    //平台判断
        $this->assign('data',$res);
        $this->display('Article/article_info');
    }

}