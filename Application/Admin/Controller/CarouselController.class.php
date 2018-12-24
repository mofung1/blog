<?php
namespace Admin\Controller;
use Think\Controller;

class CarouselController extends Controller {

    //栏目列表 
    public function carousel_list(){

    	$table = M('carousel');

    	$res = $table->select();

    	$this->assign('list',$res);

        $this->display("Carousel/carousel_list");
    }


    //栏目信息
    public function carousel_add() {

        $this->display("Carousel/carousel_add");

    }

    public function carousel_add_validate(){

        if($_POST) {
            $author = I('author'); 
            $title = I('title');  
            $content = I('content');   
              
            if (!empty($_FILES['image']['name'][0])) {$res_image = $this->image_upload('carousel/');if (!$res_image) {$this->ajaxReturn(21);}}   //失败
            else {$this->ajaxReturn(11);}

            if( $author == '') $this->ajaxReturn(12);   //为空
            if( $title == '') $this->ajaxReturn(13);   //为空
            if( $content == '') $this->ajaxReturn(14);   //为空
    
            $table_carousel = M('carousel');
            $table_carousel->startTrans();

            $data = array(
                'picture' => $res_image[0]['img'],
                'title' => $title,
                'author' => $author,
                'content' => $content,
                'add_time' => time(),
            );

            $res2 = $table_carousel->add($data);

            if($res2){$table_carousel->commit(); $this->ajaxReturn(1);}   //添加成功
            else {$table_carousel->rollback(); $this->ajaxReturn(2); }   //添加失败
        }

    }


    public function carousel_del_validate(){
        // $this->ajaxReturn(1);
        $id = I('id');
        $table = M('carousel');

        if ($id == "") {$this->ajaxReturn(3);}

        $condition = array('id'=>$id);
        $res = $table->where($condition)->delete();

        if ($res) {$this->ajaxReturn(1);}
        else{$this->ajaxReturn(2);}
    }



    public function image_upload($savePath,$name='image'){

        $config = array(
            'maxSize' => 3145728,
            'rootPath' => './Uploads/',
            'savePath' => $savePath,
            'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => true,
            'subName' => array('date', 'Ymd'),
        );

        $image = new \Think\Image();
        $upload = new \Think\Upload($config);

        $info = $upload->upload();
        if (!$info) {return null;}      //上传失败
        
        $host = $this->img_config['img_path'];

        $len = count($info);
        for ($i=0; $i<$len; $i++){
            $path[$i]['img'] = '/Uploads/' . $info[$i]['savepath'] . $info[$i]['savename'];
            $path[$i]['thumb'] = '/Uploads/' . $info[$i]['savepath'] . 'thumb' . $info[$i]['savename'];    // 缩略图地址

            $image = new \Think\Image();
            $image->open('.' . $path[$i]['img']);   // 制作缩略图
            $image->thumb(250, 250, \Think\Image::IMAGE_THUMB_FILLED)->save('.' . $path[$i]['thumb']);

            $path[$i]['img'] = $host.$path[$i]['img'];
            $path[$i]['thumb'] = $host.$path[$i]['thumb'];

        }

        return $path; //成功
    }
}