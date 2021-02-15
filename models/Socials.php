<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "socials".
 *
 * @property int $id
 * @property string $facebook
 * @property string $instagram
 * @property string $telegram
 * @property string $whatsapp
 * @property int $status
 * @property int $order
 */
class Socials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'socials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'order'], 'integer'],
            [['facebook', 'instagram', 'telegram', 'whatsapp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'facebook' => Yii::t('app', 'Facebook'),
            'instagram' => Yii::t('app', 'Instagram'),
            'telegram' => Yii::t('app', 'Telegram'),
            'whatsapp' => Yii::t('app', 'Whatsapp'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }
}
