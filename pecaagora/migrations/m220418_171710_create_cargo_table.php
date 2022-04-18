<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cargo}}`.
 */
class m220418_171710_create_cargo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cargo}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cargo}}');
    }
}
