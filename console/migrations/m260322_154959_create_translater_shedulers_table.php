<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%translater_shedulers}}`.
 */
class m260322_154959_create_translater_shedulers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%translater_shedulers}}', [
            'id' => $this->primaryKey(),
            'translater_id' => $this->integer()->notNull(),
            'weekday' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            '{{%fk-translaters-shedulers}}',
            '{{%translater_shedulers}}',
            'translater_id',
            '{{%translaters}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%translater_shedulers}}');
    }
}
