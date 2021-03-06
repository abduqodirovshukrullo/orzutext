<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $image
 * @property string $main_image
 * @property string $left_image
 * @property string $right_image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $machine
 * @property string $price
 * @property int $status
 * @property int $order
 */
class Services extends BaseModel
{
    public $for_main_image;
    public $for_right_image;
    public $for_left_image;
    public $for_machine;
    public $for_price_list;
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors[] =  [
            'class' => UploadBehavior::className(),
            'attribute' => 'for_main_image',
            'pathAttribute' => 'main_image',
            'baseUrlAttribute' => false
        ];
        $behaviors[] =  [
            'class' => UploadBehavior::className(),
            'attribute' => 'for_right_image',
            'pathAttribute' => 'right_image',
            'baseUrlAttribute' => false
        ];
        $behaviors[] =  [
            'class' => UploadBehavior::className(),
            'attribute' => 'for_left_image',
            'pathAttribute' => 'left_image',
            'baseUrlAttribute' => false
        ];
        $behaviors[] =  [
            'class' => UploadBehavior::className(),
            'attribute' => 'for_machine',
            'pathAttribute' => 'machine',
            'baseUrlAttribute' => false
        ];
        $behaviors[] =  [
            'class' => UploadBehavior::className(),
            'attribute' => 'for_price_list',
            'pathAttribute' => 'price',
            'baseUrlAttribute' => false
        ];

        return $behaviors;

    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_uz', 'content_ru', 'content_en'], 'string'],
            [['status', 'order'], 'integer'],
            [['image', 'main_image', 'left_image', 'right_image', 'title_uz', 'title_en', 'title_ru', 'machine', 'price'], 'string', 'max' => 255],
            [['base_file', 'base_files','video_file'], 'safe'],
            [['for_main_image',
            'for_right_image',
            'for_left_image',
            'for_machine',
            'for_price_list'],'safe'],
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
            'main_image' => Yii::t('app', 'Main Image'),
            'left_image' => Yii::t('app', 'Left Image'),
            'right_image' => Yii::t('app', 'Right Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_en' => Yii::t('app', 'Content En'),
            'machine' => Yii::t('app', 'Machine'),
            'price' => Yii::t('app', 'Price'),
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
}
