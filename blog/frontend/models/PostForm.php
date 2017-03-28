<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\PostsModel;
class PostForm extends Model
{
    /**
     * @inheritdoc

     */
    public $tags;
    public $title;
    public $content;
    public $summary;
    public $label_img;
    public $cat_id;
    public $user_id;
    public $is_valid;
    public $created_at;
    public $updated_at;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],

            [['cat_id', 'user_id', 'is_valid', 'created_at', 'updated_at'], 'integer'],
            [['title', 'summary', 'label_img', 'user_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tags'=>"tags",
            'title' => 'Title',
            'summary' => 'Summary',
            'content' => 'Content',
            'label_img' => 'Label Img',
            'cat_id' => 'Cat ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'is_valid' => 'Is Valid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function create()
    {

        $model = new PostsModel();
        $model->SetAttributes($this->attributes());
        var_dump($model);

    }
}
