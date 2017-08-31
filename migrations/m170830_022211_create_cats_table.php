<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cats`.
 */
class m170830_022211_create_cats_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cats', [
            'cat_id' => $this->primaryKey(),
            'catname' => $this->string()->notNull(),
            'num' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cats');
    }
}
