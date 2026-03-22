<?php

use yii\db\Migration;
use common\enums\TranslatorStatusEnum;
/**
 * Handles the creation of table `{{%translaters}}`.
 */
class m260322_151431_create_translaters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%translaters}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string()->notNull(),
            'city' => $this->string(),
            'phone' => $this->string()->notNull(),
            'time_zone' => $this->integer()->defaultValue(3),
            'status' => $this->integer()->defaultValue(TranslatorStatusEnum::NEW->value),
            'deleted_at' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%translaters}}');
    }
}
