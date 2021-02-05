<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_work}}`.
 */
class m210131_175000_create_our_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_work}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->string(),
            'content_ru' => $this->string(),
            'content_en' => $this->string(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%our_work}}');
    }
}
