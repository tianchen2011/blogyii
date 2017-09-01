<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $name
 * @property string $auth_key
 * @property string $email
 * @property string $password
 * @property integer $pubtime
 * @property integer $updated_at
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

   

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'auth_key', 'email', 'password'], 'required'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'name' => 'Name',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'password' => 'Password',
            'pubtime' => 'Pubtime',
            'updated_at' => 'Updated At',
        ];
    }

     public static function findIdentity($id)
    {
        return static::findOne($id);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
        
    }

     public static function findByName($name)
    {
          $user = User::find()
            ->where(['name' => $name])
            ->asArray()
            ->one();

            if($user){
            return new static($user);
        }

        return null;
        
    }


    public function getId()
    {
        return $this->id;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
