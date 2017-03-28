<?php 
namespace Home\Controller;
use Think\Controller;
use Home\Model\LessonModel;
/**
* 
*/
class LessonController extends Controller
{
  public function dg()
  {

    $menu=$this->cate(0);
  $this->assign('menu',$menu);
    // dump($menu);
    $this->display();

  }
  #文章分类#
 function cate($pid)
  {
    $where['pid']=$pid;
    $arr=M("cate")->where($where)->select();
    if(empty($arr)){

      return array();
    }
    foreach ($arr as $key => $value) {
        $value['children']=$this->cate($value['id']);
        $result[]=$value;
    }
    return $result;

  }
  public function zan()
  {
  	$id=$_POST['zid'];
  	$lesson=new LessonModel();
  	$lesson->where("id=$id")->setInc('zan');
  	$data['zan']=$lesson->where("id=$id")->getField('zan');
  	$this->ajaxReturn($data);



  }
  //view the lesson article
  public function view()
  {
  	$id=$_GET['id'];
  	$le=new LessonModel();
  	$le->where("id=$id")->setInc('view');
  	$lesson=$le->find($id);
    $comm=$this->getCommlist(0,$id,$result);
  	$this->assign('model',$lesson);
    $this->assign('comm',$comm);
  	$this->display();

  }
  public function addcomment()
  {
    $pid=$_POST['pid'];
    $lessonid=$_POST['lid'];
    $content=$_POST['content'];
    $time=date("Y-m-d H:i:s");
    $name=session("name");
    $head['name']=$name;
    $user=M("user")->where($head)->find();
    $head_pic=$user['head_pic'];
      $data=array('lesson_id'=>$lessonid,
        'content'=>$content,
        'editor'=>$name,
        'time'=>$time,
        'pid'=>$pid

        );
      $id=M("comment")->add($data);
      $data['id']=$id;
      $where["lesson_id"]=$lessonid;
      $where['pid']=$pid;
      $data['count']=M("comment")->where($where)->count();
      $data['head_pic']=$head_pic;
      $this->ajaxReturn($data);



  }


   
    public function getCommlist($pid = 0,$lid,&$result = array()){   
    $where['pid']=$pid;
    $where['lesson_id']=$lid;    
    $arr = M('comment')->where($where)->order("time desc")->select();   
    if(empty($arr)){
        return array();
    }
    foreach ($arr as $cm) {  
        $thisArr=&$result[];
        $cm["children"] = $this->getCommlist($cm["id"],$lid,$thisArr);    
        $thisArr = $cm;                                    
    }
    return $result;
   }
   //create new essaay
   public function add()
   {

    $this->display();
   }
   public function addessay()
   {  
    $data=$_POST;
    
    $time=date("Y-m-d H:i:s");
    $name=session("name");
    $arr=array(
        'title'=>$data['title'],
        'description'=>$data['description'],
        'content'=>$data['content'],
        'tag'=>$data['tag'],
        'forteam'=>$data['forteam'],
        'editor'=>$name,
        'addtime'=>$time

      );
    $id=M("lesson")->add($arr);
    $arr['id']=$id;
    $this->ajaxReturn($arr);
 



   }
 
	


}
 ?>