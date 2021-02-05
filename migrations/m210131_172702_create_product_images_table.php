<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_images}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 */
class m210131_172702_create_product_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_images}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'parent_id' => $this->integer(),
        ]);

        // creates index for column `parent_id`
        $this->createIndex(
            '{{%idx-product_images-parent_id}}',
            '{{%product_images}}',
            'parent_id'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-product_images-parent_id}}',
            '{{%product_images}}',
            'parent_id',
            '{{%products}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-product_images-parent_id}}',
            '{{%product_images}}'
        );

        // drops index for column `parent_id`
        $this->dropIndex(
            '{{%idx-product_images-parent_id}}',
            '{{%product_images}}'
        );

        $this->dropTable('{{%product_images}}');
    }
}
