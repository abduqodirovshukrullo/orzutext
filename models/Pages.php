<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property int $status
 * @property int $order
 *
 * @property PageTexts[] $pageTexts
 */
class Pages extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
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
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPageTexts()
    {
        return $this->hasMany(PageTexts::className(), ['page_id' => 'id']);
    }
    public function getPageText()
    {
        return $this->hasOne(PageTexts::className(), ['page_id' => 'id']);
    }
    public function getBreadcrumb()
    {
        return $this->hasOne(Breadcrumbs::className(), ['page_id' => 'id']);
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
