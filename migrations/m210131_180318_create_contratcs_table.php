<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contratcs}}`.
 */
class m210131_180318_create_contratcs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contratcs}}', [
            'id' => $this->primaryKey(),
            'main_image' => $this->string(),
            'image' => $this->string(),
            'left_image' => $this->string(),
            'right_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->string(),
            'content_en' => $this->string(),
            'content_ru' => $this->string(),
            'machine' => $this->string(),
            'price' => $this->string(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contratcs}}');
    }
}
