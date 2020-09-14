<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m200911_164823_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
            'email' => $this->string(60)->notNull()->unique(),
            'scale' => $this->integer(3),
			'comment' => $this->text(),
//			'created_at' => Schema::TYPE_TIMESTAMP,
//          'updated_at' => Schema::TYPE_TIMESTAMP,
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test}}');
    }
}
