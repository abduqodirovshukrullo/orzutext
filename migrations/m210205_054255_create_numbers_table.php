<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%numbers}}`.
 */
class m210205_054255_create_numbers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%numbers}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%numbers}}');
    }
}
