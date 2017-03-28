<?php 
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class VideoController extends Controller
{
	
	public function play()
	{
		
		$id=$_GET['id'];
		$video=M("video")->where("id=$id")->find();
		$f=$video['f'];
		$this->assign('video',$video);
		
		$this->assign('f',$f);
		$comment=$this->getlist(0,$id,$result);

		$this->assign('datacomment',$comment);
		$this->display();


	}


	//comment
	public function comment()
	{
		$id=$_POST['videoid'];//get video id
		$content=$_POST['content'];//get content
		$editor=session("name");//登陆者
		$time=date("Y-m-d H:i:s");//时间

		$data=array(
			'pid'=>0,
			'videoid'=>$id,
			'content'=>$content,
			'time'=>$time,
			'editor'=>$editor
			);

		$newid=M("videocomment")->add($data);
		//add successfully and get the id
		$data['id']=$newid;
		//get the head_pic

		$data['head_pic'] = M("user")->where(array("name"=>$editor))->getField("head_pic");
		//ajaxReturn the data
		$this->ajaxReturn($data);
	}

	//getlist
	public function getlist($pid,$videoid,&$result=array())

	{
		$where['videoid']=$videoid;
		$where['pid']=$pid;
		$dataarr=M("videocomment")->where($where)->select();

		if ($dataarr=="") {
			return array();
		}

	foreach ($dataarr as  $arr) {
		$thisArr=&$result[];
		$arr['head_pic'] = M("user")->where(array("name"=>$arr['editor']))->getField("head_pic");
		$arr['children']=$this->getlist($arr['id'],$videoid,$thisArr);
		$thisArr=$arr;
	}
		return $result;

	}





}
?>