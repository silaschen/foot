<?php 
namespace Home\Controller;
use Home\Controller\CommonController;
use Think\Page;
class PicnewsController extends CommonController
{	
  #news list#
	public function index()
	{
    $this->nav = "2";
    if (IS_GET) {
      $p = I("p",1);
      $id = I("id");
      $word = I("word");
      $map = [];
      if ($word) $map['a.title'] = array('like',"%".$word."%");
      if ($id) $map['a.id'] = $id;
      // $map['status'] = array('egt',0);
      $list = M("picnews")
      ->alias("a")
      ->join("news_user b ON a.uid=b.id")
      ->where($map)
      ->page($p.',10')
      ->field("a.id,a.uid,a.cid,a.cover,a.title,b.name")
      ->select();
      $this->assign("list",$list);
      //page
      $count = M("picnews")->where($map)->count();
      $page = new Page($count,10);
      $page->setConfig(
          'theme',"<ul class='pagination pull-left'><li>%FIRST%</li> <li>%UP_PAGE%</li> <li>%LINK_PAGE%</li> <li>%DOWN_PAGE%</li> <li>%END%</li></ul>");
      $show=$page->show();
      $this->assign('page',$show);
      $this->display();
    }else{
      //post to do...
      $r = M("picnews")->where(['id'=>I("id")])->delete();
      if ($r) {
        exit(json_encode(array('id'=>I('id'),'ret'=>1)));
      }else{
        exit(json_encode(['msg'=>'failed to opreat']));
      }


    }

	}
	//add new one
	public function addnews()
	{
    if (IS_GET) {//DISPLAY the tpl
      $this->title = "news CSL";
      $id = I("id");
      if ($id) {
        $info = M("picnews")->where(array('id'=>$id))->find();
        $this->assign('info',$info);
      }
      //the team info
      $team = M("rank")->order("rank desc")->select();
      $this->assign("team",$team);
      $this->display();
    }else{//deal with the data
        $data = $_POST;
        if ($data['id'] > 0 ) {
           //means edit 
          $r = M("picnews")->where(['id'=>$data['id']])->save($data);
         } else{
            $data['time'] = time();
            $data['uid'] = $_SESSION['uid'];
            $data['ms'] = mb_substr(strip_tags($data['content']), 0,50,'utf-8');
            $r = M("picnews")->add($data);

         }
         if ($r) {
           exit(json_encode(['ret'=>1,'msg'=>'post successfully']));
         }else{
          exit(json_encode(['ret'=>0,'msg'=>'failed to post this news']));
         }
    }

	
	}

	// //doadd
	// public function doadd()
	// {
	// 	$title=$_POST['title'];
	// 	$ms=$_POST['ms'];
	// 	$content=$_POST['content'];
	// 	$type=$_POST['type'];
	// 	$editor=session("name");
	// 	$time=date("Y-m-d H:i:s");
	// 	$data=array(
	// 		'title'=>$title,
	// 		'ms'=>$ms,
	// 		'content'=>$content,
	// 		'type'=>$type,

	// 		);

	// 	$this->ajaxReturn($data);





	// }
	
}

 ?>