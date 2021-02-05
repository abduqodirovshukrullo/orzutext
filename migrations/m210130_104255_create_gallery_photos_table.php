<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery_photos}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%gallery_photo}}`
 */
class m210130_104255_create_gallery_photos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery_photos}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'photo_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'order' => $this->integer(),
        ]);

        // creates index for column `photo_id`
        $this->createIndex(
            '{{%idx-gallery_photos-photo_id}}',
            '{{%gallery_photos}}',
            'photo_id'
        );

        // add foreign key for table `{{%gallery_photo}}`
        $this->addForeignKey(
            '{{%fk-gallery_photos-photo_id}}',
            '{{%gallery_photos}}',
            'photo_id',
            '{{%gallery_photo}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%gallery_photo}}`
        $this->dropForeignKey(
            '{{%fk-gallery_photos-photo_id}}',
            '{{%gallery_photos}}'
        );

        // drops index for column `photo_id`
        $this->dropIndex(
            '{{%idx-gallery_photos-photo_id}}',
            '{{%gallery_photos}}'
        );

        $this->dropTable('{{%gallery_photos}}');
    }
}
