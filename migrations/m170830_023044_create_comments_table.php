<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m170830_023044_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'comment_id' => $this->primaryKey(),
            'art_id' => $this->integer()->notNull(),
            'nick' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'content' => $this->text(),
            'pubtime' => $this->datetime()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
