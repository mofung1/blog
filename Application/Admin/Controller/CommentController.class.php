<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller {

    //列表 
    public function comment_list(){

    	$table = M('comment');

    	$res = $table->select();

    	$this->assign('list',$res);

        $this->display("Comment/comment_list");
    }


    //信息
    public function comment_info() {

    	$id = I('id');

    	$table = M('comment');
        $res = $table->where(array('id'=>$id))->find();

        $this->assign('data', $res);
  
        $this->display("Comment/comment_info");

    }

    public function comment_del_validate(){

        $id = I('id');
        $table = M('comment');

        if ($id == "") {$this->ajaxReturn(2);}

        $condition = array('id'=>$id);
        $res = $table->where($condition)->delete();

        if ($res) {$this->ajaxReturn(1);}
        else{$this->ajaxReturn(2);}
    }


}