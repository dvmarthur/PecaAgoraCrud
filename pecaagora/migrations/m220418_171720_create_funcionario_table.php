<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%funcionario}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%cargo}}`
 */
class m220418_171720_create_funcionario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%funcionario}}', [
            'id' => $this->primaryKey(),
            'cargo_id' => $this->integer()->notNull(),
            'name' => $this->string(100)->notNull(),
            'cpf' => $this->string(150),
            'logradouro' => $this->string(150),
            'cep' => $this->string(150),
            'cidade' => $this->string(150),
            'estado' => $this->string(30),
            'numero' => $this->string(150),
            'complemento' => $this->string(150),
        ]);

        // creates index for column `cargo_id`
        $this->createIndex(
            '{{%idx-funcionario-cargo_id}}',
            '{{%funcionario}}',
            'cargo_id'
        );

        // add foreign key for table `{{%cargo}}`
        $this->addForeignKey(
            '{{%fk-funcionario-cargo_id}}',
            '{{%funcionario}}',
            'cargo_id',
            '{{%cargo}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%cargo}}`
        $this->dropForeignKey(
            '{{%fk-funcionario-cargo_id}}',
            '{{%funcionario}}'
        );

        // drops index for column `cargo_id`
        $this->dropIndex(
            '{{%idx-funcionario-cargo_id}}',
            '{{%funcionario}}'
        );

        $this->dropTable('{{%funcionario}}');
    }
}
