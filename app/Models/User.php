<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relationship
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function user_roles()
    {
        return $this->hasMany('App\Models\UserRoles');
    }

    public function user_activities()
    {
        return $this->hasMany('App\Models\UserActivity');
    }
}
