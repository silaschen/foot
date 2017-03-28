<?php 
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Page;
/**
* 
*/
class RankController extends CommonController
{
	
	public function index()
	{
		if (IS_GET) {
			$p = I("p",1);
			$list=M("rank")->Order("rank")->page($p.',6')->select();
			$count=M("rank")->count();
			$page=new Page($count,6);
			$page->setConfig(
        	'theme',"<ul class='pagination pull-left'><li>%FIRST%</li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li> <li>%DOWN_PAGE%</li> <li>%END%</li></ul>");
			$show=$page->show();
			$this->assign('page',$show);
			$this->assign('model',$list);
			$this->display();
		}else{
			//delete  ajax
			$id = I("id");
			$r = M("rank")->where(array('id'=>$id))->delete();
			if ($r) {
				echo json_encode(array('ret'=>1,'id'=>$id));
			}

		}
	}
	//doadd
	public function addclub()
	{	

		if (IS_GET) {
			$id = I("id");
			if ($id) {
				$info = M("rank")->where(array('id'=>$id))->find();
				$this->assign('info',$info);

			}
			$this->display();
		}else{
			//add the content
			$data = $_POST;
			if ($data['id'] > 0) {
				$r = M("rank")->save($data);
			}else{
				$data['addtime'] = time();
				$r = M("rank")->add($data);


			}

			if ($r) {
				echo json_encode(array('ret'=>1,'msg'=>'save successfully'));
			}





		}

	}
	//show update page
	public function update()
	{
		$id=$_GET['id'];
		$model=M("rank")->where("id=$id")->find();
		$this->assign('model',$model);


		$this->display();
	}
	//deal with update
	public function doupdate()
	{

		$_POST['directshot']=$_POST['shotgo']-$_POST['shotoff'];
		$_POST['score']=($_POST['wintime']*3)+($_POST['ping']*1);
		
		if (M("rank")->save($_POST)) {
			$this->ajaxReturn($_POST);
		}
				
		






	}














}


 ?>