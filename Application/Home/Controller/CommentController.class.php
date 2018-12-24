<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;  // 导入分页类
class CommentController extends BaseController {
    public function index(){
        if ($this->is_mobile()) {$this->assign('ismobile',1);}    //平台判断
        $this->ipset();
        $this->link_list();
        $this->rand_article();

    	$table = M('comment');
        $count = $table->count();
        $pageNum = 5; // 每页显示2条数据
        $Page = new Page($count,$pageNum);// 实例化分页类 传入总记录数，每页显示几条  
        // $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        // $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        $show = $Page->show();// 分页显示输出 
    	$res = $table->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('data',$res);
        $this->assign('page',$show);// 赋值分页输出  
        $this->display('Comment/index');
    }

    public function comment_validate(){
    	$name = I('name');
    	$contact = I('contact');
    	$comment = I('comment');
    	if ($name =="") {$this->ajaxReturn(21);}
    	if ($contact =="") {$this->ajaxReturn(22);}
		if ($comment =="") {$this->ajaxReturn(23);}

		$data['name'] = $name;
		$data['contact'] = $contact;
		$data['comment'] = $comment;
		$data['time'] =time();
		$table = M('comment');
		$res = $table->add($data);
		if ($res) {$this->ajaxReturn(1);}
		else{$this->ajaxReturn(2);}
    	
    }

    // public function link_list(){
    //     $table = M('link');
    //     $res = $table->order('sort desc')->select();
    //     $this->assign('link',$res);
    // }

}