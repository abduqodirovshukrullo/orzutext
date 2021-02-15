<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property int $parent_id
 * @property int $status
 * @property int $order
 *
 * @property Categories $parent
 * @property Categories[] $categories
 * @property Products[] $products
 * @property Products[] $products0
 */
class Categories extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => Yii::t('app', 'Parent ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts0()
    {
        return $this->hasMany(Products::className(), ['parent_id' => 'id']);
    }
    public function getLink(){
        if (strcasecmp($this->title_ru, "Ткани") == 0) {
            return '/site/fabrics';
        }
        if (strcasecmp($this->title_ru, "Полотно") == 0) {
            return '/site/polotno';
        }
        if (strcasecmp($this->title_ru, "УНИФОРМА") == 0) {
            return '/site/uniforma';
        }
        if (strcasecmp($this->title_ru, "КОНТРАКТНОЕ ПРОИЗВОДСТВО
        ") == 0) {
            return '/site/contract?id=3';
        }
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
