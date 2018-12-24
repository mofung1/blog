<?php
namespace Home\Controller;
use Think\Controller;
class PhotoController extends BaseController {
    public function index(){
    	$this->ipset();
    	$table = M('photo');
    	$count = $table->count();
        $pageNum = 8;
        $page = new \Think\Page($count,$pageNum);
        $page -> setConfig('first','首页');
        $page -> setConfig('prev','上一页');
        $page -> setConfig('next','下一页');
        $page -> setConfig('last','末页');
        $show = $page->show();
        $this->assign('page',$show);
    	$res = $table->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign('data',$res);
        $this->display('Photo/index');
    }

}