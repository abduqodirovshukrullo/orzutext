<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tools}}`.
 */
class m210205_054158_create_tools_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tools}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'big_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->text(),
            'content_en' => $this->text(),
            'content_ru' => $this->text(),
            'sub_content_uz' => $this->string(),
            'sub_content_en' => $this->string(),
            'sub_content_ru' => $this->string(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tools}}');
    }
}
