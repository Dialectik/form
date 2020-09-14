<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string|null $password
 * @property string|null $auth_key
 * @property string|null $access_token
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password', 'auth_key', 'access_token'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 60],
            [['username'], 'unique'],
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
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
	
	public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
	
	public function getId()
    {
		return $this->id;
	}

	public function getAuthKey()
    {
		// TODO: Implement getAuthKey() method.
	}
	
	public function validateAuthKey($authKey)
    {
		// TODO: Implement validateAuthKey() method.
	}
	
	public static function findByUsername($username)
    {
		return User::find()->where(['username'=>$username])->one();
	}
	
	public static function findByEmail($email)
    {
        return User::find()->where(['email'=>$email])->one();
    }
	
	public function validatePassword($password)
    {
		if ($this->password == $password)
		{
			return true;
		} else {
			return false;
		}
	}
    
    public function create()
    {
		return $this->save(false);
	}
    
    
    
    
}
