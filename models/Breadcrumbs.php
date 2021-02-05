<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "breadcrumbs".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $url
 * @property int $page_id
 * @property int $status
 * @property int $order
 *
 * @property Pages $page
 */
class Breadcrumbs extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'breadcrumbs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru', 'url'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pages::className(), 'targetAttribute' => ['page_id' => 'id']],
            [['base_file', 'base_files','video_file'], 'safe'],
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
            'url' => Yii::t('app', 'Url'),
            'page_id' => Yii::t('app', 'Page ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Pages::className(), ['id' => 'page_id']);
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
