<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200911_115952_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'email' => $this->string(60)->notNull()->unique(),
            'password' => $this->string(),
            'auth_key' => $this->string(),
            'access_token' => $this->string(),
            'isAdmin' => $this->integer(3),
//            'created_at' => Schema::TYPE_TIMESTAMP,
//            'updated_at' => Schema::TYPE_TIMESTAMP,
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
