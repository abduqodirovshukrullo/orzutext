<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%breadcrumbs}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%pages}}`
 */
class m210203_051008_create_breadcrumbs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%breadcrumbs}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'url' => $this->string(),
            'page_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);

        // creates index for column `page_id`
        $this->createIndex(
            '{{%idx-breadcrumbs-page_id}}',
            '{{%breadcrumbs}}',
            'page_id'
        );

        // add foreign key for table `{{%pages}}`
        $this->addForeignKey(
            '{{%fk-breadcrumbs-page_id}}',
            '{{%breadcrumbs}}',
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
            '{{%fk-breadcrumbs-page_id}}',
            '{{%breadcrumbs}}'
        );

        // drops index for column `page_id`
        $this->dropIndex(
            '{{%idx-breadcrumbs-page_id}}',
            '{{%breadcrumbs}}'
        );

        $this->dropTable('{{%breadcrumbs}}');
    }
}
