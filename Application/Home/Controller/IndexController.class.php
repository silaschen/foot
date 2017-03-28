<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\LessonModel;
class IndexController extends Controller {
  public function search()
  {

    $key=$_GET['key'];
    $wh['content']=array('like',"%$key%");
    $wh['title']=array('like',"%$key%");
    $wh['_logic']="or";
    $list=M("lesson")->where($wh)->select();
    $count=M("lesson")->where($wh)->count();
    $data['count']=$count;
    $data['needdata']=$list;
    if($count>0){
      $data["back"]=1;
      $data['num']=$count;
    }else{
      $data['back']=0;
    }
    $this->ajaxReturn($data);
    
  }
    public function index(){
        $lesson=new LessonModel();
        $list=$lesson->limit(4)->order("addtime desc")->select();
        
        $this->assign('list',$list);
        //最新消息
        $list2=M("picnews")->limit(6)->order("time desc")->select();
        $this->assign('list2',$list2);
        //广州恒大
        $gz['type']="gzhd";
          $gzhdl=M("picnews")->where($gz)->limit(6)->order("time desc")->select();
        $this->assign('gzhdl',$gzhdl);
        //山东鲁能
         $sd['type']="sdln";
          $sdlnl=M("picnews")->where($sd)->limit(6)->order("time desc")->select();
        $this->assign('sdlnl',$sdlnl);
        //热点排行  图片新闻
        $list3=M("picnews")->limit(6)->order("view desc")->select();
        $this->assign('list3',$list3);
        //list4 
        $list4=M("picnews")->limit(3)->order("love desc")->select();
        $this->assign('list4',$list4);
          //video最新
        $list4=M("video")->limit(6)->order("addtime desc")->select();
        $this->assign('video',$list4);
        //rank
        $model=M("rank")->limit(8)->Order("rank")->select();
      $this->assign('rank',$model);

      //非图片新闻最新
      $left1=M("lesson")->order("addtime desc")->limit(5)->select();
      $this->assign("left1",$left1);
      //about guangzhou
      $gz['forteam']="广州恒大";
      $gzhd=$lesson->where($gz)->limit(5)->Order("view desc")->select();
      $this->assign('gzhd',$gzhd);
      //about shandong
       $sd['forteam']="山东鲁能";
      $sdln=$lesson->where($sd)->limit(5)->Order("view desc")->select();
      $this->assign('sdln',$sdln);
      //about beijing
             $bj['forteam']="北京国安";
      $bjga=$lesson->where($bj)->limit(5)->Order("view desc")->select();
      $this->assign('bjga',$bjga);
      //video guangzhou 
      $videogz['type']="gzhd";
      $gzhdvideo=M("video")->where($videogz)->select();
      
      $this->assign('gzhdvideo',$gzhdvideo);


    		$this->display();

    }
  //    public function study(){
  //       $end=strtotime("2016-09-15 07:40:00");
  //       $now=strtotime(date("Y-m-d H:i:s"));
  //       $left=$end-$now;//剩余总秒数
  //       $day=floor($left/(3600*24));//剩余天数
  //       $hour=floor(($left-$day*3600*24)/3600);//剩余小时
  //       $min=floor(($left-$day*3600*24-$hour*3600)/60);//剩余分钟
  //       $sec=floor($left-$day*3600*24-$hour*3600-$min*60);
  //       $data=array(
  //           'd'=>$day,
  //           'h'=>$hour,
  //           'min'=>$min,
  //           'sec'=>$sec

  //           );
  //       $this->ajaxReturn($data);


  // }
    //捐献
    public function donate()
    {
      $this->display();



    }
    //rankcsl
    public function rankcsl()
    {
      $rank=M("rank")->Order("rank")->select();
      $this->assign('soccer',$rank);
      $this->display();


    }
    //photo upload
    public function img()
    {
      $this->display();
    }
  //upload
    public function upload()
    {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
      
          
            }else{// 上传成功
              $image = new \Think\Image(); 
              $image->open('./uploads/'.$info['head']['savepath'].$info['head']['savename']);
              $width = $image->width(); // 返回图片的宽度
              $height = $image->height(); // 返回图片的高度
              $type = $image->type(); // 返回图片的类型
              $mime = $image->mime(); // 返回图片的mime类型
              $size = $image->size(); // 返回图片的尺寸数组 0 图片宽度 1 图片高度
              $image->open('./uploads/'.$info['head']['savepath'].$info['head']['savename'])->text('Zuqiu wang','./public/fonts/journal-webfont.ttf',20,'#000000',\Think\Image::IMAGE_WATER_SOUTHEAST)->save('./uploads/'.$info['head']['savepath'].$info['head']['savename']); 
              $name=session("name");
              $head['name']=$name;
              $data['head_pic']="./uploads/".$info['head']['savepath'].$info['head']['savename'];
              $user=M("user")->where($head)->save($data);
             $this->redirect('user/center');

            }



    }

}
