<?php 
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Page;
/**
* 
*/
class AccessController extends CommonController
{
	#权限管理之节点#
    public function nodelist(){
        $this->checklogin();
        $this->nav = "5";
     
      if (IS_GET) {
        $p = I("p",'1');
          $map['status'] = array("egt",0);
            
            $model = M('think_node'); // 实例化User对象

            $map['pid'] = 1;
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $list = $model->where($map)->page($p.',10')->select();


            foreach ($list as $key => $value) {
                $list[$key]['child'] = $this->GetChild($value['id']);
            }
            $this->assign('list',$list);// 赋值数据集
           

            $count      = $model->where($map)->count();// 查询满足要求的总记录数
            $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
            //分页跳转的时候保证查询条件
            $page->rollPage = 5 ;
            foreach($map as $key=>$val) {
                $Page->parameter[$key]   =   urlencode($val);
            }
            $show = $Page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
          
            $this->display(); // 输出模板

      }else{
            if (IS_AJAX) {
                
                $id = I("id");
                $t = I("t");
                $r = M("think_node")->where(array("id"=>$id))->setField("status",$t);
                if ($r) {
                    $data['msg'] = "Oprete successfully";
                    $data['code'] = 1;
                }else{
                    $data['code'] = 0;
                    $data['msg'] = "operate failuer";
                }
                $this->ajaxReturn($data);
            }


      }





    }

    #get the node's children of id#
    private function GetChild($id)
    {
        $list = M("think_node")->where(array("pid"=>$id))->select();
        if (empty($list)) {
            return array();
        }
        foreach ($list as $key => $value) {
            $list[$key]['child'] = $this->GetChild($value['id']);
        }
            return $list;


    }
    #add the node#
    public function addnode()
    {   
        $this->nav = "5";
        $this->checklogin();
        if (IS_GET) {
            
            $id = I("id");
            $info = M('think_node')->where(array("id"=>$id))->find();
            $this->assign("info",$info);
        
        $cates = M("think_node")->where(array("pid"=>array("in",array(1,0))))->select();
        $this->assign("cates",$cates);
        $this->display();
        }else{
            
            $data = $_POST; 
            if ($data['id'] > 0) {
                $r = M("think_node")->where(array("id"=>$id))->save($data);
                $arr = $data;
            }else{
                $data['status'] = 1;

               
                if ($data['pid'] == "1") {
                     $data['level'] = "2";
                }else{
                    $data['level'] = "3";
                }
                 $r = M('think_node')->add($data);
            
                $arr['id'] = $r;

            }
            $this->ajaxReturn($arr);
        }



    }

    #rolelist#
    public function rolelist(){
        $this->checklogin();
     
      if (IS_GET) {
        $p = I("p",'1');
          $map['status'] = array("egt",0);
            
            $model = M('think_role'); // 实例化User对象
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $list = $model->where($map)->page($p.',10')->select();
            $this->assign('list',$list);// 赋值数据集
           

            $count      = $model->where($map)->count();// 查询满足要求的总记录数
            $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
            //分页跳转的时候保证查询条件
            $page->rollPage = 5 ;
            foreach($map as $key=>$val) {
                $Page->parameter[$key]   =   urlencode($val);
            }
            $show = $Page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
          
            $this->display(); // 输出模板

      }else{
            if (IS_AJAX) {
                
                $id = I("id");
                $t = I("t");
                $r = M("think_role")->where(array("id"=>$id))->setField("status",$t);
                if ($r) {
                    $data['msg'] = "Oprete successfully";
                    $data['code'] = 1;
                }else{
                    $data['code'] = 0;
                    $data['msg'] = "operate failuer";
                }
                $this->ajaxReturn($data);
            }


      }





    }

    #add user and edit the user#
    public function addrole()
    {


         $this->checklogin();
        if (IS_GET) {
            
            $id = I("id");
            $info = M('think_role')->where(array("id"=>$id))->find();
            $this->assign("info",$info);
       
        $this->display();
        }else{
            
            $data = $_POST;

            if ($data['id'] > 0) {
                $r = M("think_role")->where(array("id"=>$id))->save($data);
                $arr = $data;
            }else{
                $data['status'] = 1;
           

               
                 $r = M('think_role')->add($data);

            
                $arr['id'] = $r;

            }
            $this->ajaxReturn($arr);
        }



    }

    #give the role the access#
    public function accessnode()
    {   
        if (IS_GET) {
            $id = I("id");

            $have = M('think_access')->where(array("role_id"=>$id))->field("node_id")->select();
            $arr = json_encode($have);

            $access = M('think_node')->select();
            $this->assign(array(
                "rid"=>$id,
                    "have"=>$arr,
                    "access"=>$access,

                ));

            $this->display();

        }else{

            $data = $_POST;
            $node = $data['node_id'];
            
            
            foreach($node as $key=>$value){
                
            
                
                $arr[$key]['role_id'] = $data['role_id'];
                $arr[$key]['node_id'] = $value;

                $info = M("think_node")->where(array("id"=>$value))->find();

                if ($info['pid'] == 0) {
                    $arr[$key]['level'] = 1;
                }else if($info['pid'] == "1"){
                    $arr[$key]['level'] =2;
                }else{

                    $arr[$key]['level'] =3;
                }
            }
            
            //delete the access relation
            M('think_access')->where(array("role_id"=>$data['role_id']))->delete();

            foreach ($arr as $key => $value) {
                $re = M('think_access')->add($value);
            }
            $this->redirect('Access/rolelist');

        
        }



    }

    #userlist access#
    public function userlist()
    {
        $this->checklogin();
     
      if (IS_GET) {
        $p = I("p",'1');
          $map['status'] = array("egt",0);
            
            $model = M('user'); // 实例化User对象
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
            $list = $model->where($map)->page($p.',10')->select();
            $this->assign('list',$list);// 赋值数据集
           

            $count      = $model->where($map)->count();// 查询满足要求的总记录数
            $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
            //分页跳转的时候保证查询条件
            $page->rollPage = 5 ;
            foreach($map as $key=>$val) {
                $Page->parameter[$key]   =   urlencode($val);
            }
            $show = $Page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
          
            $this->display(); // 输出模板

      }else{
            if (IS_AJAX) {
                
                $id = I("id");
                $t = I("t");
                $r = M("user")->where(array("id"=>$id))->setField("status",$t);
                if ($r) {
                    $data['msg'] = "Oprete successfully";
                    $data['code'] = 1;
                }else{
                    $data['code'] = 0;
                    $data['msg'] = "operate failuer";
                }
                $this->ajaxReturn($data);
            }


      }


    }

    #add user and edit the user#
    public function adduser()
    {


         $this->checklogin();
        if (IS_GET) {
            
            $id = I("id");
            $info = M('user')->where(array("id"=>$id))->find();
            $this->assign("info",$info);
       
        $this->display();
        }else{
            
            $data = $_POST;
            $data['password'] = md5($data['password']);

            if ($data['id'] > 0) {
                $r = M("user")->where(array("id"=>$data['id']))->save($data);
                $arr = $data;
            }else{
                $data['status'] = 1;
                $data['password'] = md5($data['password']);
                $data['create_time'] = time();

               
                 $r = M('user')->add($data);

            
                $arr['id'] = $r;

            }
            $this->ajaxReturn($arr);
        }



    }

	
    #give the user the access#
    public function accessuser()
    {   
        if (IS_GET) {
            $id = I("id");

            $have = M('think_role_user')->where(array("user_id"=>$id))->field("role_id")->select();
            $role = json_encode($have);
            

            $access = M('think_role')->select();
            $this->assign(array(
                "uid"=>$id,
                    "have"=>$role,
                    "access"=>$access,

                ));

            $this->display();

        }else{

            $data = $_POST;
            $node = $data['role_id'];
            
            
            foreach($node as $key=>$value){
                
            
                
                $arr[$key]['user_id'] = $data['user_id'];
                $arr[$key]['role_id'] = $value;

              }
            
            //delete the access relation
            M('think_role_user')->where(array("user_id"=>$data['user_id']))->delete();

            foreach ($arr as $key => $value) {
                $re = M('think_role_user')->add($value);
            }
            $this->redirect('Access/userlist');

        
        }



    }



}


 ?>