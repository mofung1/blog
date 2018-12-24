<?php
namespace Admin\Controller;
use Think\Controller;

class CateController extends Controller {

    //栏目列表 
    public function category_list(){

    	$table = M('cate');

    	$res = $table->order('sort desc')->select();

    	$this->assign('list',$res);

        $this->display("Cate/category_list");
    }


    //栏目信息
    public function category_info() {

    	$id = I('id');

    	$table = M('cate');
        $res = $table->where(array('id'=>$id))->find();

        $this->assign('data', $res);
  
        $this->display("Cate/category_info");

    }

    //栏目添加
    public function category_add() {
  
        $this->display("Cate/category_add");

    }

    public function category_add_validate(){
        $catename = I('catename');
        $show_in_nav = I('show_in_nav');
        $sort = I('sort');
        $catedesc = I('catedesc');

        if ($catename == "") {$this->ajaxReturn(11);}

        $table = M('cate');

        $res1 = $table->where(array('catename'=>$catename))->find();

        if ($res1) {$this->ajaxReturn(21);}


        $data['catename'] = $catename;
        $data['show_in_nav'] = $show_in_nav;
        $data['sort'] = $sort;
        $data['catedesc'] = $catedesc;
        $data['add_time'] = time();

        $res2 = $table->add($data);

        if ($res2) {$this->ajaxReturn(1);}
        else{ $this->ajaxReturn(2); }


    }


    //栏目信息
    public function category_edit() {

        $id = I('id');

        $table = M('cate');
        $res = $table->where(array('id'=>$id))->find();

        $this->assign('data', $res);
  
        $this->display("Cate/category_edit");

    }

    public function category_update_validate(){
        $id = I('id');
        $catename = I('catename');
        $show_in_nav = I('show_in_nav');
        $sort = I('sort');
        $catedesc = I('catedesc');

        if ($catename == "") {$this->ajaxReturn(11);}

        $table = M('cate');

        $data['catename'] = $catename;
        $data['show_in_nav'] = $show_in_nav;
        $data['sort'] = $sort;
        $data['catedesc'] = $catedesc;
        $data['add_time'] = time();

        $res2 = $table->where(array('id'=>$id))->save($data);

        if ($res2 !== false) {$this->ajaxReturn(1);}
        else{ $this->ajaxReturn(2); }


    }


    public function category_del_validate(){
        // $this->ajaxReturn(1);
        $id = I('id');
        $table = M('cate');

        if ($id == "") {$this->ajaxReturn(2);}

        $condition = array('id'=>$id);
        $res = $table->where($condition)->delete();

        if ($res) {$this->ajaxReturn(1);}
        else{$this->ajaxReturn(2);}
    }


}