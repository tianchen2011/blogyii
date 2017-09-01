<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m170901_065408_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'art_id' => $this->integer()->notNull(),
            'comment' => $this->string(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
                'idx_comment-art_id',
                'comment',
                'art_id'
            );
        $this->createIndex(
                'idx_comment-created_at_id',
                'comment',
                'created_at'
            );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
