<?php


namespace App\Mailer;

use App\User;
use Auth;
class UserMailer extends Mailer
{
    //密码重置
    public function passwordReset($email,$token)
    {
        $data = [
            'url' => url('password/reset', $token)
        ];

        $this->sendTo('zhihu_password_reset',$email,$data);
    }

    //用户注册
    public function welcome(User $user)
    {
        $data = [
            'url' => route('email.verify',['token'=>$user->confirmation_token]),
            'name'=>$user->name
        ];

        $this->sendTo('zhihu_user_register',$user->email,$data);
    }
}