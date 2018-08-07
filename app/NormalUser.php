<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\NormalUserResetPasswordNotification;

class NormalUser extends Authenticatable
{
    use Notifiable;

    protected $guard='normal_user';

    protected $table='normal_users';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new NormalUserResetPasswordNotification($token));
    }
}
