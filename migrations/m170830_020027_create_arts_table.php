<?php

use yii\db\Migration;

/**
 * Handles the creation of table `arts`.
 */
class m170830_020027_create_arts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('arts', [
            'art_id' => $this->primaryKey(),
            'cat_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'pubtime' => $this->datetime()->notNull(),
            'comm' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('arts');
    }
}
