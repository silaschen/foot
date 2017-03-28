<?php 
/**
* the common class,there is some the function that we can use in other classes.
Author :liondog
2017 03 23
*/
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
            function _initialize() {
            $rbac=new \Org\Util\Rbac();  
            //检测是否登录，没有登录就打回设置的网关  
               $rbac::checkLogin();  
               //检测是否有权限没有权限就做相应的处理  
            if(!$rbac::AccessDecision()){  
                echo '<script type="text/javascript">alert("没有权限");</script>';  
            
            } 
 }

    #检测登录#
    public function CheckLogin(){
        if (!$_SESSION['uid']) $this->redirect('User/login');

    }
    
	#上传图片#
  public function loadimg(){
    $upload = new \Think\Upload();// 实例化上传类  
        $upload->maxSize   =     3145728 ;// 设置附件上传大小  
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录  
        $upload->savePath  =      ''; // 设置附件上传（子）目录  
        // 上传文件   
        $info   =   $upload->uploadOne($_FILES['files']);  
        if(!$info) {// 上传错误提示错误信息  
            //$this->error($upload->getError());  
           echo json_encode(array('ret'=>0,'error'=>$upload->getError())); 
        }else{// 上传成功 获取上传文件信息  
            //$this->display('templateList');  
            $file =  "Uploads/".$info['savepath'].$info['savename'];  
            echo json_encode(array('ret'=>1,'file'=>$file));
        }  
  }




}


 ?>