<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SignupForm is the model behind the signup form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignupForm extends Model
{
	public $username;
    public $password;
    public $email;
	
	public function rules()
	{
		return [
			[['username', 'password', 'email'], 'required'],
			[['username'], 'string'],
			[['email'], 'email'],
			[['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email'],
		
		];
	}
	
	public function signup()
	{
		if ($this->validate())
		{
			$user = new User();
			
			$user->attributes = $this->attributes;
			
			return $user->create();
		}
		
		
	}
	
	
}