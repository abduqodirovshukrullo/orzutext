<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%categories}}`
 * - `{{%categories}}`
 * - `{{%brands}}`
 */
class m210131_172608_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'big_image' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'content_uz' => $this->string(),
            'content_en' => $this->string(),
            'content_ru' => $this->string(),
            'parent_id' => $this->integer(),
            'category_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);

        // creates index for column `parent_id`
        $this->createIndex(
            '{{%idx-products-parent_id}}',
            '{{%products}}',
            'parent_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-products-parent_id}}',
            '{{%products}}',
            'parent_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-products-category_id}}',
            '{{%products}}',
            'category_id'
        );

        // add foreign key for table `{{%categories}}`
        $this->addForeignKey(
            '{{%fk-products-category_id}}',
            '{{%products}}',
            'category_id',
            '{{%categories}}',
            'id',
            'CASCADE'
        );

        // creates index for column `brand_id`
        $this->createIndex(
            '{{%idx-products-brand_id}}',
            '{{%products}}',
            'brand_id'
        );

        // add foreign key for table `{{%brands}}`
        $this->addForeignKey(
            '{{%fk-products-brand_id}}',
            '{{%products}}',
            'brand_id',
            '{{%brands}}',
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
            '{{%fk-products-parent_id}}',
            '{{%products}}'
        );

        // drops index for column `parent_id`
        $this->dropIndex(
            '{{%idx-products-parent_id}}',
            '{{%products}}'
        );

        // drops foreign key for table `{{%categories}}`
        $this->dropForeignKey(
            '{{%fk-products-category_id}}',
            '{{%products}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-products-category_id}}',
            '{{%products}}'
        );

        // drops foreign key for table `{{%brands}}`
        $this->dropForeignKey(
            '{{%fk-products-brand_id}}',
            '{{%products}}'
        );

        // drops index for column `brand_id`
        $this->dropIndex(
            '{{%idx-products-brand_id}}',
            '{{%products}}'
        );

        $this->dropTable('{{%products}}');
    }
}
