<?php

namespace app\models;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "gallery_photo".
 *
 * @property int $id
 * @property string $image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property int $status
 * @property int $order
 *
 * @property GalleryPhotos[] $galleryPhotos
 */
class GalleryPhoto extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_photo';
    }
    public function behaviors()
    {
        $parent = parent::behaviors();
        $parent[] =
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'base_files',
                'multiple' => true,
                'uploadRelation' => 'galleryPhotos',
                'pathAttribute' => 'image',
                'baseUrlAttribute' => false,
            ];

        return $parent;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['image', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
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
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalleryPhotos()
    {
        return $this->hasMany(GalleryPhotos::className(), ['photo_id' => 'id']);
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
