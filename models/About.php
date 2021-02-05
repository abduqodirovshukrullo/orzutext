<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $image
 * @property string $big_image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $options_uz
 * @property string $options_ru
 * @property string $options_en
 * @property int $status
 * @property int $order
 */
class About extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }
    public function beforeSave($insert){
        $this->options_uz = \yii\helpers\Json::encode($this->options_uz);
        $this->options_ru = \yii\helpers\Json::encode($this->options_ru);
        $this->options_en = \yii\helpers\Json::encode($this->options_en);
        if(parent::beforeSave($insert)){
            return true;
        }
    }

    public function afterFind(){
        parent::afterFind();
        $this->options_uz = \yii\helpers\Json::decode($this->options_uz);
        $this->options_ru = \yii\helpers\Json::decode($this->options_ru);
        $this->options_en = \yii\helpers\Json::decode($this->options_en);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_content_uz', 'sub_content_ru', 'sub_content_en', 'content_uz', 'content_ru', 'content_en'], 'string'],
            [[ 'options_uz', 'options_ru', 'options_en'],'safe'],
            [['status', 'order'], 'integer'],
            [['image', 'big_image', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['base_file', 'base_files','base_file2','video_file'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'big_image' => Yii::t('app', 'Big Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'options_uz' => Yii::t('app', 'Options Uz'),
            'options_ru' => Yii::t('app', 'Options Ru'),
            'options_en' => Yii::t('app', 'Options En'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
    public function getTitle()
    {
        return $this->{'title_'. Yii::$app->language};
    }

    public function getContent()
    {
        return $this->{'content_'. Yii::$app->language};
    }
    public function getSubContent()
    {
        return $this->{'sub_content_'. Yii::$app->language};
    }
    public function getOptions()
    {
        return $this->{'options_'. Yii::$app->language};
    }
    
}
