<?php

namespace App;

use App\Mailer\UserMailer;
use Illuminate\Database\Eloquent\Model;
use Mail;
use Naux\Mail\SendCloudTemplate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar','is_active', 'confirmation_token','api_token','followers_count','followings_count',
        'questions_count','comments_count','answers_count','likes_count'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'setting'=>'array'
    ];

    //是否是admin
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function canEnterBack()
    {
        return $this->hasRole('admin') || $this->hasRole('admin-one') ||$this->hasRole('admin-two');
    }
    public function settings()
    {
        return new Setting($this);
    }

    //是否属于本对象
    public function owns(Model $model)
    {
        return $this->id == $model->user_id;
    }


    //发送密码重置
    public function sendPasswordResetNotification($token)
    {
        (new UserMailer())->passwordReset($this->email,$token);
    }
}
