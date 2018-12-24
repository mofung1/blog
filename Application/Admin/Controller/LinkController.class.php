<?php
namespace Admin\Controller;
use Think\Controller;

class LinkController extends Controller {

    //栏目列表 
    public function link_list(){

    	$table = M('link');

    	$res = $table->order('sort desc')->select();

    	$this->assign('list',$res);

        $this->display("Link/link_list");
    }


    //栏目信息
    public function link_info() {

    	$id = I('id');

    	$table = M('link');
        $res = $table->where(array('id'=>$id))->find();

        $this->assign('data', $res);
  
        $this->display("Link/link_info");

    }

    //栏目添加
    public function link_add() {
  
        $this->display("Link/link_add");

    }

    public function link_add_validate(){
        $title = I('title');
        $sort = I('sort');
        $url = I('url');
        $desc = I('desc');

        if ($title == "") {$this->ajaxReturn(11);}
        if ($url == "") {$this->ajaxReturn(12);}

        $table = M('link');

        $res1 = $table->where(array('title'=>$title))->find();

        if ($res1) {$this->ajaxReturn(21);}


        $data['title'] = $title;
        $data['url'] = $url;
        $data['sort'] = $sort;
        $data['desc'] = $desc;

        $res2 = $table->add($data);

        if ($res2) {$this->ajaxReturn(1);}
        else{ $this->ajaxReturn(2); }


    }


    //栏目信息
    public function link_edit() {

        $id = I('id');

        $table = M('link');
        $res = $table->where(array('id'=>$id))->find();

        $this->assign('data', $res);
  
        $this->display("Link/link_edit");

    }

    public function link_update_validate(){

        // $this->ajaxReturn($_POST);

        $table = M('link');

        $id = I('id');
        $title = I('title');
        $url = I('url');
        $sort = I('sort');
        $desc = I('desc');

        if ($title == "") {$this->ajaxReturn(11);}
        if ($url == "") {$this->ajaxReturn(12);}

        $res1 = $table->where(array('id'=>$id))->find();
        if (!$res1) {$this->ajaxReturn(3);}
        

        $data['title'] = $title;
        $data['sort'] = $sort;
        $data['desc'] = $desc;
        $data['url'] = $url;

        $res2 = $table->where(array('id'=>$id))->save($data);

        if ($res2 !== false) {$this->ajaxReturn(1);}
        else{ $this->ajaxReturn(2); }


    }


    public function link_del_validate(){
        // $this->ajaxReturn(1);
        $id = I('id');
        $table = M('link');

        if ($id == "") {$this->ajaxReturn(2);}

        $condition = array('id'=>$id);
        $res = $table->where($condition)->delete();

        if ($res) {$this->ajaxReturn(1);}
        else{$this->ajaxReturn(2);}
    }


}