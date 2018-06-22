<?php 

namespace frontend\models;

use yii\base\Model;
use common\models\User;

class UserForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [ 
			[['name','email'],'required'],
			['email','email'],
		 	   ];
	}

}

?>