<?php 
namespace frontend\controllers;
use Yii;
use frontend\controllers\BaseController;
use frontend\models\PostForm;
use common\models\CatsModel;
use common\widgets\tag;
/**
* 
*/
class PostsController extends BaseController
{
	  public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/blog/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ],
             'ueditor'=>[
            'class' => 'common\widgets\ueditor\UeditorAction',
            'config'=>[
                //上传图片配置
                'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                'imagePathFormat' => "/blog/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
            ]
        ],
        
        ];
    }
	//the index of the posts
	public function actionIndex()
	{

		return $this->render("index");


	}	


	//create the posts
	public function actionCreate()
	{
		$model = new PostForm();
		$cates = CatsModel::getcates();
        $model->create();

		return $this->render('create',['model'=>$model,'cates'=>$cates]);


	}

}

 ?>