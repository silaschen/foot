<?php 
namespace Home\Controller;
use Home\Controller\CommonController;
use Home\Model\UserModel;
use Think\Page;
use Org\Util\Rbac;  
/**
* 用户
*/
class UserController extends CommonController
{
	public function index()
	{
		if (IS_GET) {
		$user=new UserModel();
		if (!$_GET['p']) {
			$_GET['p'] = 1;
		}
		
		$list = $user->Order('create_time desc')->page($_GET['p'].',10')->select();//赋值数据集
		$this->assign('list',$list);

		$count=$user->count();
		//分页
		$page=new Page($count,10);//煤业两条数据
		$page->setConfig(
        'theme',"<ul class='pagination pull-right'><li>%FIRST%</li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li> <li>%DOWN_PAGE%</li> <li>%END%</li></ul>");
		$show=$page->show();
		$this->assign('page',$show);
		$this->display();

		}else{
			//ajax delete the user
			if (IS_AJAX) {
				$id=$_POST['id'];
				$user=new UserModel();
				$bool=$user->where(array('id'=>$id))->delete();
				if ($bool) {
					$this->ajaxReturn(array('ret'=>1,'id'=>$id));
				}
			}

		}
	}
	
	public function add()
	{	
		$this->nav = "1";

		$data['name']=$name=$_POST['name'];
		$data['password']=$_POST['password'];
		$data['create_time']=date("Y-m-d H:i:s");
		//$this->ajaxReturn($data);
		 $user=new UserModel();
		 if (!$user->create($data)) {
			$call=array('name'=>$name,'info'=>$user->getError());
			$this->ajaxReturn($call);
		}
		else{
			$user->add();
			$call=array('name'=>$name,'info'=>"添加成功");
			$this->ajaxReturn($call);
		}

	}
	//update
	public function update()
	{	
		$id=$_POST['id'];
		$user=new UserModel();
		$u=$user->where("id=$id")->find();
		$this->ajaxReturn($u);
	}
	public function doup()
	{	$id=$_POST['id'];
		$name=$_POST['name'];
		$password=$_POST['password'];
		$data=array(
				'name'=>$name,
				'password'=>$password,
				'create_time'=>date("Y-m-d H:i:s")
			);
		$user=new UserModel();
		// $this->ajaxReturn($data);
		if (!$user->create($data)) {
				$back['info']=$user->getError();
				$this->ajaxReturn($back);
		}
		else{
			$user->where("id=$id")->save($data);

			$back['info']='修改成功';
			$this->ajaxReturn($back);
		}


	}

	//login 
	public function login()
	{
		layout(false);
		if (IS_GET) {
			$this->display();
		}else{
			//登录
			$u=new UserModel();
			$name=$_POST['name'];
			$password=md5($_POST['pwd']);
			$result=$u->where(['name'=>$name,'password'=>$password])->find();
			if ($result) {
				if (!$result['status']) exit(json_encode(['ret'=>0,'msg'=>'此用户已锁定']));//状态锁定
					session('adminname',$name);
					session('uid',$result['id']);
					session(C("USER_AUTH_KEY"),$result['id']);
                if($result['name'] == C('RBAC_SUPERADMIN')) session(C('ADMIN_AUTH_KEY'),true); //超级管理员
              
                	//将权限写入session  
                	$r = Rbac::saveAccessList(); 
                	
                	//登录完毕返回信息
                	exit(json_encode(['ret'=>1,'msg'=>'登陆成功']));			
			}else{
				exit(json_encode(['ret'=>0,'msg'=>'用户名密码不正确']));
			}
		}
	}
	#登出#
	public function logout()
	{
		session("adminname",null);
		session("uid",null);
		session(C("USER_AUTH_KEY"),null); 
		session(C('ADMIN_AUTH_KEY'),false); 
		$this->redirect("user/login");
	}
		
}

 ?>