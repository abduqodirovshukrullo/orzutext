<?php

namespace app\models;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $image
 * @property string $big_image
 * @property string $title_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $content_uz
 * @property string $content_en
 * @property string $content_ru
 * @property int $parent_id
 * @property int $category_id
 * @property int $brand_id
 * @property int $status
 * @property int $order
 *
 * @property ProductImages[] $productImages
 * @property Brands $brand
 * @property Categories $category
 * @property Categories $parent
 */
class Products extends BaseModel
{
    const POLOTNO = 1;
    const FABRICS = 2;
    const UNIFORM = 3;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }
    public function behaviors()
    {
        $parent = parent::behaviors();
        $parent[] =
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'base_files',
                'multiple' => true,
                'uploadRelation' => 'productImages',
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
            [['parent_id', 'category_id', 'brand_id', 'status', 'order'], 'integer'],
            [[ 'content_uz', 'content_en', 'content_ru'],'safe'],
            [['image', 'big_image', 'title_uz', 'title_en', 'title_ru'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_en' => Yii::t('app', 'Content En'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'brand_id' => Yii::t('app', 'Brand ID'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImages::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brands::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
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
