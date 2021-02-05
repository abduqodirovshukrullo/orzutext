<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page_texts}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%pages}}`
 */
class m210131_172859_create_page_texts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page_texts}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->text(),
            'content_ru' => $this->text(),
            'content_en' => $this->text(),
            'page_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);

        // creates index for column `page_id`
        $this->createIndex(
            '{{%idx-page_texts-page_id}}',
            '{{%page_texts}}',
            'page_id'
        );

        // add foreign key for table `{{%pages}}`
        $this->addForeignKey(
            '{{%fk-page_texts-page_id}}',
            '{{%page_texts}}',
            'page_id',
            '{{%pages}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%pages}}`
        $this->dropForeignKey(
            '{{%fk-page_texts-page_id}}',
            '{{%page_texts}}'
        );

        // drops index for column `page_id`
        $this->dropIndex(
            '{{%idx-page_texts-page_id}}',
            '{{%page_texts}}'
        );

        $this->dropTable('{{%page_texts}}');
    }
}
