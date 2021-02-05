<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery_photos".
 *
 * @property int $id
 * @property string $image
 * @property int $photo_id
 * @property int $status
 * @property int $order
 *
 * @property GalleryPhoto $photo
 */
class GalleryPhotos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_photos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo_id', 'status', 'order'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => GalleryPhoto::className(), 'targetAttribute' => ['photo_id' => 'id']],
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
            'photo_id' => Yii::t('app', 'Photo ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoto()
    {
        return $this->hasOne(GalleryPhoto::className(), ['id' => 'photo_id']);
    }
}
