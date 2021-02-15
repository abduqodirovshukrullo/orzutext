<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $content_uz
 * @property string $content_en
 * @property string $content_ru
 * @property int $type
 * @property int $status
 * @property int $order
 *
 * @property Products[] $products
 */
class Brands extends BaseModel
{
    const TYPE_BABY = 0;
    const TYPE_WOMEN = 1;
    const TYPE_MEN = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'status', 'order'], 'integer'],
            [['image', 'big_image','title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['content_ru','content_uz','content_ru'],'string'],
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
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_en' => Yii::t('app', 'Content En'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['brand_id' => 'id']);
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
}
