<?php
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller {

    public function index(){

        $table = M('article');
        $res = $table->select();

        $this->assign('list',$res);

        $this->display("Article/article_list");
    }   

    //文章信息
    public function article_info() {
        if($_GET) {
            $id = I('id');
            $res = M('article')->where(array('id'=>$id))->find();
            $this->assign('data', $res);
            $this->display();
        }
    }

    //文章编辑
    public function article_edit() {

        $id = I('id');

        $table = M('article');
        $res = $table->where(array('id'=>$id))->find();

        $table_cate = M('cate');
        $res2 = $table_cate->select();

        $this->assign('list',$res2);

        $this->assign('data', $res);
        $this->display("article/article_edit");

    }

    //文章新增
    public function article_add(){
        $table = M('cate');
        $res = $table->select();

        $this->assign('list',$res);
        $this->display("Article/article_add");

    }

    //文章编辑验证
    public function article_update_validate(){
        if($_POST) {
            if($_POST['title'] == '') $this->ajaxReturn(11);   //为空
            if($_POST['author'] == '') $this->ajaxReturn(12);   //为空
            if($_POST['desc'] == '') $this->ajaxReturn(13);   //为空
            if($_POST['content'] == '') $this->ajaxReturn(14);   //为空
//            if($_POST['link'] == '') $this->ajaxReturn(15);   //为空

            $table_article = M('article');


            if (!empty($_FILES['image']['name'][0])) {$res_image = $this->image_upload('article/');if (!$res_image) {$this->ajaxReturn(21);}}   //失败
            else {$this->ajaxReturn(16);}
            //@

            if (!empty($_POST['content'])) {$content = $this->ueditor_upload($_POST['content']); if (!$content) {$this->ajaxReturn(21);}}    //失败
            else {$this->ajaxReturn(17); }

            $table_cate = M('cate');
            $condition_cate = array('id'=>$_POST['menu_id']);
            $res_cate = $table_cate->where($condition_cate)->getField('catename');

            $condition_article = array('id'=>$_POST['id']);
            $res=$table_article->where($condition_article)->find();
            if($res) {
                if ($res['title'] !== $_POST['title']) {
                    $condition = array('title'=>$_POST['title']); $res=$table_article->where($condition)->find();
                    if ($res) {$this->ajaxReturn(22);}   //存在
                }

                $data = null;
                $data = array(
                    'title' => $_POST['title'],
                    'cate' => $res_cate,
                    'author' => $_POST['author'],
                    'is_show' => $_POST['is_show'],
                    'desc' => $_POST['desc'],
                    'pic' => $res_image[0]['img'],
                    'content' => $content,
                    'time' => time(),
                );

                if ($res_image[0]['img']) {$data['pic']=$res_image[0]['img'];}

                $res=$table_article->where($condition_article)->save($data);

                if($res !== false){ $this->ajaxReturn(1);}   //成功
                else { $this->ajaxReturn(2);} //失败
            } else {$this->ajaxReturn(3);}   //不存在
        }
    }

    //文章添加验证
    public function article_add_validate() {
        if($_POST) {
            // $this->ajaxReturn($_FILES);
            if($_POST['title'] == '') $this->ajaxReturn(11);   //为空
            if($_POST['author'] == '') $this->ajaxReturn(12);   //为空
            if($_POST['desc'] == '') $this->ajaxReturn(13);   //为空
           // if($_POST['link'] == '') $this->ajaxReturn(15);   //为空

            if (!empty($_FILES['image']['name'][0])) {$res_image = $this->image_upload('article/');if (!$res_image) {$this->ajaxReturn(21);}}   //失败
            else {$this->ajaxReturn(16);}
            //@

            if (!empty($_POST['content'])) {$content = $this->ueditor_upload($_POST['content']); if (!$content) {$this->ajaxReturn(21);}}    //失败
            else {$this->ajaxReturn(17); }

            $table_cate = M('cate');
            $condition_cate = array('id'=>$_POST['menu_id']);
            $res_cate = $table_cate->where($condition_cate)->getField('catename');

            $table_article = M('article');
            $table_article->startTrans();

            $condition = array('title'=>$_POST['title']);
            $res1 = $table_article->where($condition)->count();
            if($res1) {$this->ajaxReturn(22);}  

            $data = array(
                'title' => $_POST['title'],
                'cate' => $res_cate,
                'author' => $_POST['author'],
                'is_show' => $_POST['is_show'],
                'desc' => $_POST['desc'],
                'pic' => $res_image[0]['img'],
                'content' => $content,
                'time' => time(),
            );

            $res2 = $table_article->add($data);

            if($res2){$table_article->commit(); $this->ajaxReturn(1);}   //添加成功
            else {$table_article->rollback(); $this->ajaxReturn(2); }   //添加失败
        }
    }

    //文章删除验证
    public function article_del_validate(){
        if($_POST){
            $id = I('id');
            $res = M('article')->where(array('article_id'=>$id))->find();

            if($res) {
                $res = M('article')->where(array('article_id'=>$id))->delete();
                if ($res) {$this->ajaxReturn(1);}   //成功
                else { $this->ajaxReturn(2);}   //失败

            } else { $this->ajaxReturn(3);}   //不存在
        }
    }

    //文章下架验证
    public function article_unshelve_validate(){

        if($_POST){
            $id = I('id');

            $res = M('article')->where(array('id'=>$id))->delete();
            if ($res !== false) {$this->ajaxReturn(1);}   //成功
            else { $this->ajaxReturn(2);}   //失败
        }
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


    //编辑器图片上传
    public function ueditor_upload($content){
        return $content; //成功

    }

    public function save_info(){  
        $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("./Public/Ueditor/php/config.json")), true);  
        $action = $_GET['action'];  
        switch ($action) {  
            case 'config':  
                $result = json_encode($ueditor_config);  
                break;  
                /* 上传图片 */  
            case 'uploadimage':  
                /* 上传涂鸦 */  
            case 'uploadscrawl':  
                /* 上传视频 */  
            case 'uploadvideo':  
                /* 上传文件 */  
            case 'uploadfile':  
                $upload = new \Think\Upload();  
                $upload->maxSize = 3145728;  
                $upload->rootPath = './Uploads/ueditor/';  
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                $upload->subName = array('date', 'Ymd');  
                $info = $upload->upload();  
                if (!$info) {  
                    $result = json_encode(array(  
                            'state' => $upload->getError(),  
                    ));  
                } else {  
                    $url = __ROOT__ . "/Uploads/ueditor/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];  
                    $result = json_encode(array(  
                            'url' => $url,  
                            'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                            'original' => $info["upfile"]['name'],  
                            'state' => 'SUCCESS'  
                    ));  
                }  
                break;  
            default:  
                $result = json_encode(array(  
                'state' => '请求地址出错'  
                        ));  
                        break;  
        }  
        /* 输出结果 */  
        if (isset($_GET["callback"])) {  
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {  
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';  
            } else {  
                echo json_encode(array(  
                        'state' => 'callback参数不合法'  
                ));  
            }  
        } else {  
            echo $result;  
        }  
    }  

}