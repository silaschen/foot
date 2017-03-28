<?php 
namespace Home\Controller;
use Think\Controller;
use Think\Page;
/**
* liondog is the greatest phper.
*/
class PicnewsController extends Controller
{
	
	public function view()
	{
		if (IS_GET) {
			$id=$_GET['id'];
			$p = I("p",1);
			$picnews=M("picnews")->where("id=$id")->find();
			$this->assign("picnews",$picnews);
			//update the browser
			M("picnews")->where("id=$id")->setInc("view");

			//import all the comment of this picnews
			$commlist = M("picnews_comment")->where(array('nid'=>$id))->page($p.' ,10')->order("create_time desc")->select();
			$this->assign("clist",$commlist);
			//page
			$count = M("picnews_comment")->where(array('nid'=>$id))->count();
			$page = new Page($count,10);
			$show = $page->show();
			$this->assign("page",$show);
			$this->assign("count",$count);
			$this->display();
		}else{
			//ajax do with the comment
			$data = array(
				"nid"=>$_POST['newsid'],
				"content"=>$_POST['comm'],
				"nickname" =>$_SESSION['name'],
				"create_time"=> NOW_TIME,
				);
			//add the data to news_pic_comment
			$r = M("picnews_comment")->add($data);
			$data['id'] = $r;
			if ($r) {
				$data['create_time'] = date("Y-m-d H:i",$data['create_time']);
				$this->ajaxReturn($data);
			}

		}
		
	}
	//write and editq the essay
	public function write()
	{
		if (IS_GET) {
			$id = I("id");
			//clublist
			$team = M("rank")->select();
			$this->assign("team",$team);
			$this->display();

		}else{
			$data = $_POST;
			$data['editor'] = session("name");
			$data['time'] = NOW_TIME;
			$data['ms'] = mb_substr($data['content'], 0,35,'utf-8');
			$r = M("picnews")->add($data);

			if ($r) {
				//update the score of user
				M("user")->where(array('status'=>1,'id'=>session('uid')))->setInc("score",1);
				$arr = array(
					'ret'=>1,
					'msg'=>'success to post',
					'id'=>$r,
					);

				$this->ajaxReturn($arr);
			}
			
		}

	}
}

 ?>
