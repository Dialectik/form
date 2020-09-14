<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int|null $scale
 * @property string|null $comment
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['scale'], 'integer'],
            [['comment'], 'string'],
//            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 60],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'scale' => 'Порекомендовали ли бы Вы нас своим знакомым?',
            'comment' => 'Комментарий',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата изменения',
        ];
    }
}
