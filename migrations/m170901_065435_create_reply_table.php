<?php

use yii\db\Migration;

/**
 * Handles the creation of table `reply`.
 */
class m170901_065435_create_reply_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('reply', [
            'id' => $this->primaryKey(),
            'comment_id' => $this->integer()->notNull(),
            'reply' => $this->string(),
            'status' => $this->integer(1)->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-reply-comment_id',
            'reply',
            'comment_id'
        );
        $this->createIndex(
            'idx-reply-created_at_id',
            'reply',
            'created_at'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('reply');
    }
}
