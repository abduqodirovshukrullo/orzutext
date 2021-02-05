<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_partners}}`.
 */
class m210131_175140_create_our_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_partners}}', [
            'id' => $this->primaryKey(),
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
        $this->dropTable('{{%our_partners}}');
    }
}
