<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%categories}}`
 */
class m210131_171835_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'parent_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);

        // creates index for column `parent_id`
        $this->createIndex(
            '{{%idx-categories-parent_id}}',
            '{{%categories}}',
            'parent_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-categories-parent_id}}',
            '{{%categories}}',
            'parent_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%categories}}`
        $this->dropForeignKey(
            '{{%fk-categories-parent_id}}',
            '{{%categories}}'
        );

        // drops index for column `parent_id`
        $this->dropIndex(
            '{{%idx-categories-parent_id}}',
            '{{%categories}}'
        );

        $this->dropTable('{{%categories}}');
    }
}
