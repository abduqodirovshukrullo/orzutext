<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%brands}}`.
 */
class m210131_171458_create_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brands}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'big_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->string(),
            'content_en' => $this->string(),
            'content_ru' => $this->string(),
            'type' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%brands}}');
    }
}
