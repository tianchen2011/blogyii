<?php 
namespace app\models;

use yii\base\Model;
use app\models\Users;

class SignupForm extends Model{
	public $name;
	public $email;
	public $password;
	public $pubtime;
	public $updated_at;


	public function rules(){
		return [
			 // 对username的值进行两边去空格过滤
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required', 'message' => '用户名不可以为空'],
            // unique表示唯一性，targetClass表示的数据模型
            ['name', 'unique', 'targetClass' => 'app\models\Users', 'message' => '用户名已存在.'],
            ['name', 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => '邮箱不可以为空'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\Users', 'message' => 'email已经被设置了.'],
            ['password', 'required', 'message' => '密码不可以为空'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码至少填写6位'],
            [['pubtime', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
		];
	}


	public function signup()
    {
        // 调用validate方法对表单数据进行验证，验证规则参考上面的rules方法，如果不调用validate方法，那上面写的rules就完全是废的啦
        if (!$this->validate()) {
            return null;
        }
        // 实现数据入库操作
        $user = new Users();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->pubtime = $this->pubtime;   
        $user->updated_at = $this->updated_at;
        $user->password_hash = $this->password;
        // 生成 "remember me" 认证key
        $user->generateAuthKey();
        // save(false)的意思是：不调用Users的rules再做校验并实现数据入库操作
        // 这里这个false如果不加，save底层会调用Users的rules方法再对数据进行一次校验，这是没有必要的。
    // 因为我们上面已经调用Signup的rules校验过了，这里就没必要再用Users的rules校验了
        return $user->save(false);
    }

}