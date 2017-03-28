<?php
namespace Home\Controller;
use Think\Controller;

use Think\Page;
class IndexController extends Controller {
    public function index(){
   
      $this->display();
      
    }

    public function choose(){

    	if (IS_GET) {
    		$this->display();
    	}else{

    		//ajax
    		//get the form ,[[name=>"",value=>'',],[],]
    		$data = $_POST['data'];
    
    		$score = 0;
    		$i = 0;
    		foreach ($data as $key => $value) {
    				// echo $value['name']."-----------".$value['value']."<br>";
    			$info['ans'] = 1;
    			$info['jf'] = 5;
    			if ($value['value'] == $info['ans']) {
    				$score+=$info['jf'];
    			}else{

    				$err[$i]['name']=$value['name'];
    				$err[$i]['right'] = 1;
    				$i++;

    			}


    		}

    		$res = array(
    			"score"=>$score,
    			'nickname'=>"xiao",
    			'err'=>$err

    			);

    		$this->ajaxReturn($res);




    	}

    }

  
  



}