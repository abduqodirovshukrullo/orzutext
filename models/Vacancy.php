<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $sub_content_uz
 * @property string $sub_content_ru
 * @property string $sub_content_en
 * @property string $section_uz
 * @property string $section_ru
 * @property string $section_en
 * @property string $phone
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address_en
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 * @property int $order
 */
class Vacancy extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_content_uz', 'sub_content_ru', 'sub_content_en'], 'string'],
            [['created_at', 'updated_at', 'status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru', 'section_uz', 'section_ru', 'section_en', 'phone', 'address_uz', 'address_ru', 'address_en'], 'string', 'max' => 255],
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
            'sub_content_uz' => Yii::t('app', 'Sub Content Uz'),
            'sub_content_ru' => Yii::t('app', 'Sub Content Ru'),
            'sub_content_en' => Yii::t('app', 'Sub Content En'),
            'section_uz' => Yii::t('app', 'Section Uz'),
            'section_ru' => Yii::t('app', 'Section Ru'),
            'section_en' => Yii::t('app', 'Section En'),
            'phone' => Yii::t('app', 'Phone'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_en' => Yii::t('app', 'Address En'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
    public function getAddress()
    {
        return $this->{'address_'. Yii::$app->language};
    }
    public function getSection()
    {
        return $this->{'section_'. Yii::$app->language};
    }
}
