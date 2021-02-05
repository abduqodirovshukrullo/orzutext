<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\db\ActiveRecord;

/**
 *
 * @property mixed $name
 * @property mixed $description
 * @property mixed $title
 * @property mixed $content
 */
class BaseModel extends ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    const FILE_UPLOAD_URL = ['/admin/file-storage/upload'];
    const MAX_FILE_UPLOAD_SIZE =  5*1024*1024;
    const MAX_UPLOAD_FILE = 16;

    public $base_file;
    public $base_file2;
    public $base_files;
    public $video_file;

    

    /**
     * @return array
     */
    public function behaviors ()
    {
        return [
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'base_file',
                'pathAttribute' => 'image',
                'baseUrlAttribute' => false
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'base_file2',
                'pathAttribute' => 'big_image',
                'baseUrlAttribute' => false
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'video_file',
                'pathAttribute' => 'video',
                'baseUrlAttribute' => false
            ]
        ];
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['base_file', 'base_files','video_file'], 'safe'],
        ];
    }


}