<?php
namespace Admin\Controller;
use Think\Controller;

class DatabaseController extends IndexController {


    //数据库备份
    public function database_list() {
        $res = M('database')
            ->join('LEFT JOIN blog_admin ON blog_admin.id = blog_database.admin_id')
            ->field('blog_admin.admin_name, blog_database.*')
            ->select();
        $this->assign('list', $res);
        $this->display();
    }


    //数据库信息
    public function database_info() {
        $id = I('id');
        if($_GET) {
            $res = M('database')
                ->join('LEFT JOIN blog_admin ON blog_admin.id = blog_database.admin_id')
                ->field('blog_admin.admin_name, blog_database.*')
                ->where(array('database_id'=>$id))
                ->find();
            $this->assign('data', $res);
            $this->display();
        }
    }

    //数据库备份
    public function database_backup() {
        if($_GET) {
            $this->display();
        }
    }


    //数据库备份验证
    public function database_backup_validate(){

        if($_POST){
            if ($_POST['database_name'] == '') {$this->ajaxReturn(11);} //为空
            if ($_POST['remark'] == '') {$this->ajaxReturn(12);}//为空

            $dir_root=$_SERVER['DOCUMENT_ROOT'].__ROOT__;
            $dir_path="./database/";
            $dir=$dir_path;

            $file_name=date("YmdHis",time()).".sql";
            $file_path=$dir.$file_name;

            if (!is_dir($dir)) {mkdir($dir, '0777' );}          //不存在 建目录
            if(file_exists($file_path)){$this->ajaxReturn(13);}    //存在

            //文件头
            $info = "-- ----------------------------\r\n";
            $info .= "-- 日期 ".date("Y-m-d H:i:s",time())."\r\n";
            $info .= "-- MySQL Database".C('DB_NAME')."\r\n";
            $info .= "-- Create By ".$_SESSION['admin_id']."\r\n";
            $info .= "-- ----------------------------\r\n\r\n";

            if(!file_put_contents($file_path,$info,FILE_APPEND)) {$this->ajaxReturn(15);}    //写入错误

            $model = M('');
            $sql="show tables"; $result=$model->query($sql); //查询所有表

            foreach ($result as $k=>$v){
                //查询表结构
                $val = $v['tables_in_'.C('DB_NAME')];   //获取表名
                $sql_table = "show create table ".$val;
                $res = $model->query($sql_table);

                $info_table = "-- ----------------------------\r\n";
                $info_table .= "-- Table structure for `".$val."`\r\n";
                $info_table .= "-- ----------------------------\r\n\r\n";
                $info_table .= "DROP TABLE IF EXISTS `".$val."`;\r\n\r\n";
                $info_table .= $res[0]['create table'].";\r\n\r\n";

                //查询表数据
                $info_table .= "-- ----------------------------\r\n";
                $info_table .= "-- Data for the table `".$val."`\r\n";
                $info_table .= "-- ----------------------------\r\n\r\n";

                //添加表头信息
                if(!file_put_contents($file_path,$info_table,FILE_APPEND)) {$this->ajaxReturn(15);}    //写入错误

                $sql_data = "select * from ".$val;
                $data = $model->query($sql_data);

                $count= count($data);
                if($count<1) continue;
                foreach ($data as $key => $value){
                    $sqlStr = "INSERT INTO `".$val."` VALUES (";
                    foreach($value as $v_d){
                        $v_d = str_replace("'","\'",$v_d);
                        $sqlStr .= "'".$v_d."', ";
                    }
                    //需要特别注意对数据的单引号进行转义处理
                    //去掉最后一个逗号和空格
                    $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
                    $sqlStr .= ");\r\n";

                    //添加单条信息
                    if(!file_put_contents($file_path,$sqlStr,FILE_APPEND)) {$this->ajaxReturn(15);}    //写入错误
                }

                $info = "-- ----------------------------\r\n";
                $info .= "-- End"."\r\n";
                $info .= "-- ----------------------------\r\n\r\n";

                //end
                if(!file_put_contents($file_path,$info,FILE_APPEND)) {$this->ajaxReturn(15);}    //写入错误

            }

            //储存到数据库
            $db_data['database_name'] = $_POST['database_name'];
            $db_data['path'] = $dir_path.$file_name;
            $db_data['remark'] = $_POST['remark'];
            $db_data['add_time'] = time();
            $db_data['admin_id'] = $_SESSION['admin_id'];

            $table = M('database');
            $res = $table->add($db_data);

            if ($res) {$this->ajaxReturn(1);}   //成功
            else {$this->ajaxReturn(2);}   //失败

        }
    }

    //6数据库恢复验证
    public function database_recovery_validate(){

        if($_POST){

            $id = I('id');
            $res = M('database')->where(array('database_id'=>$id))->find();

            if($res){
                $file_path=$_SERVER['DOCUMENT_ROOT'].__ROOT__.$res['path'];
                if(!file_exists($file_path)){$this->ajaxReturn(11);}    //不存在

                $model = M();
                $sql_file = file_get_contents($file_path);
                $res=$model->execute($sql_file);

                if ($res !== false) {$this->ajaxReturn(1);}   //成功
                else {$this->ajaxReturn(2);}   //失败

            } else {$this->ajaxReturn(3);}   //不存在
        }
    }

}