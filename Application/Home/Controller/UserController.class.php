<?php 
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
/**
* 
*/
class UserController extends Controller
{
	public function sign()
	{
	    layout(false);
		$this->display();
	}
	public function signup()
	{
		$u=new UserModel();
		$name=$_POST['name'];
		$password=md5($_POST['code']);
		$time=date("Y-m-d H:i:s");
		$data=array('name'=>$name,
			'password'=>$password,
			'create_time'=>$time);
		if (!$u->create($data)){
     // 如果创建失败 表示验证没有通过 输出错误提示信息
     //exit($u->getError());
     $data=array('name'=>$name,
			'password'=>$password,
			'create_time'=>$time,
			'info'=>$u->getError(),
			'state'=>0);
     $this->ajaxReturn($data);
}else{
	$u->add();
	$data=array('name'=>$name,
			'password'=>$password,
			'create_time'=>$time,
			'info'=>'signup successfully...',
			'state'=>1);
	         $this->ajaxReturn($data);

     // 验证通过 可以进行其他数据操作
}
		

	}
	public function gosession()
	{
		$name=$_POST['name'];
		session('name',$name);
	}
	public function logout()
	{
		session('name',null);
		$this->redirect('user/login');
	}
	//loginpage
	public function login()
	{
		layout(false);
		$this->display();
	}

	//checklogin
	public function chklogin()
	{

		$u=new UserModel();
		$name=$_POST['name'];
		$password=md5($_POST['code']);
		$where['name']=$name;
		$where['password']=$password;
		$log=$u->where($where)->find();
		if ($log) {
			session('name',$log['name']);
			session("uid",$log['id']);
			
		}
		$data['find']=$log['id'];
			$data['name']=$name;
			$this->ajaxReturn($data);
	}
	//user center
	public function center()
	{	
		if (IS_GET) {
		$where['name']=session("name");
		//user info
		$user=M("user")->where($where)->find();
		$this->assign('u',$user);
		//my lesson
		$article['editor']=session('name');
		$lesson=M("lesson")->where($article)->select();
		$this->assign('lesson',$lesson);
		$this->display();
		}else{
			$fid = $_POST['fid'];
			$info = M("follow")->where(array('id'=>$fid))->find();
			//check the whether there is the follow data in the tabledata
			$map = array(
				'uid'=>session('uid'),
				'fid'=>$fid
				);
			$r = M("follow")->where($map)->find();
			//cancel the follow
			if ($r) {
				M("follow")->where(array($map))->delete();
				$this->ajaxReturn(array(
					'msg'=>'u have cancel followed the lion','ret'=>2));
			}
			if ($fid == session('uid')) {
				$this->ajaxReturn(array('msg'=>'u cannot follow urself'));
			}
			//follow the one
			$follow = M("follow")->add($map);

			if ($follow) {
				$this->ajaxReturn(array('ret'=>1,'msg'=>'followed successfully'));
			}
		}
		

	}
		//user center
	public function usercenter()
	{	
		$where['name']=$_GET['name'];
		//user info
		$user=M("user")->where($where)->find();


		$this->assign('u',$user);
		//my lesson
		$article['editor']=session('name');
		$lesson=M("lesson")->where($article)->select();
		$this->assign('lesson',$lesson);
		$this->display();

	}
	//update
	public function update()
	{
		$where['name']=session("name");
		//user info
		$user=M("user")->where($where)->find();
		$this->assign('u',$user);
		//my lesson
		$article['editor']=session('name');
	
		$this->display();


	}
	//do update
	public function doupdate()
	{
		if (M("user")->save($_POST)) {
			 $this->ajaxReturn($_POST);
		}







	}
	
}
 ?>